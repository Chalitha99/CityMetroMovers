<?php

namespace Classes;
use Classes\DBConnector;
use PDO;
use PDOException;

class admin
{
    public $user_id;
    public $user_fname;
    public $user_lname;
    public $user_nic;
    public $user_contactNo;
    public $user_email;
    public $user_status;
    public $user_role;

    /**
     * @param $user_id
     * @param $user_fname
     * @param $user_lname
     * @param $user_email
     * @param $user_nic
     * @param $user_contactNo
     * @param $user_status
     * @param $user_role
     */
    public function __construct($user_id, $user_fname, $user_lname, $user_nic, $user_contactNo, $user_email, $user_status, $user_role)
    {
        $this->user_id = $user_id;
        $this->user_fname = $user_fname;
        $this->user_lname = $user_lname;
        $this->user_nic = $user_nic;
        $this->user_contactNo = $user_contactNo;
        $this->user_email = $user_email;
        $this->user_status = $user_status;
        $this->user_role = $user_role;
    }

    /**
     * @param $user_id
     */



    public static function viewRegister(){
        $dbcon = new DBConnector();
        $con = $dbcon->getConnection();
        try {
            $users = array();
            $query = "SELECT * FROM user";
            $pstmt = $con->prepare($query);
            $pstmt->execute();
            $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);
            if(!empty($rs)){
                foreach ($rs as $row){
                    $user = new admin($row->user_id,$row->user_fname,$row->user_lname,$row->user_nic,$row->user_contactNo,$row->user_email,$row->user_status,$row->user_role);
                    $users[] = $user;
                }
            }
        }catch (\PDOException $exc){
            echo $exc->getMessage();
        }
        return $users;
    }

    public static function showDetails($userid)
    {
        $dbcon = new DBConnector();
        $con = $dbcon->getConnection();
        try {
            $users = array();
            $query = "SELECT * FROM user WHERE user_id = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $userid);
            $pstmt->execute();
            $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);
            if (!empty($rs)) {
                foreach ($rs as $row) {
                    $user = new admin($row->user_id, $row->user_fname, $row->user_lname, $row->user_nic, $row->user_contactNo, $row->user_email, $row->user_status, $row->user_role);
                    $users[] = $user;
                }
            }
        } catch (\PDOException $exc) {
            echo $exc->getMessage();
        }
        return $users;
    }

    public function updateUser(){
        $dbcon = new DBConnector();
        $con = $dbcon->getConnection();
        try {
            $query = "UPDATE user SET user_fname=?, user_lname=?, user_nic=?, user_contactNo=?, user_email=?,user_status=?, user_role=?
                WHERE user_id=?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->user_fname);
            $pstmt->bindValue(2, $this->user_lname);
            $pstmt->bindValue(3, $this->user_nic);
            $pstmt->bindValue(4, $this->user_contactNo);
            $pstmt->bindValue(5, $this->user_email);
            $pstmt->bindValue(6, $this->user_status);
            $pstmt->bindValue(7, $this->user_role);
            $pstmt->bindValue(8, $this->user_id);
            if(!$pstmt->execute()){
                $pstmt = null;
                header("Location:../edit_register.php?error=stmtfailed");
                exit();
            }
            $pstmt = null;

        } catch (\PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function deleteUser($userid){
        $dbcon = new DBConnector();
        $con = $dbcon->getConnection();
        try {
            $query = "DELETE FROM user WHERE user_id=?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1,$userid);
                if(!$pstmt->execute()){
                    $pstmt = null;
                    header("Location:../view_register.php?error=stmtfailed");
                    exit();
                }
            $pstmt = null;

        }catch (PDOException $exc){
            echo $exc->getMessage();
        }
    }


}