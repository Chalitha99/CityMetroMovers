<?php

namespace Classes;
use Classes\DBConnector;
use Classes\adminAddUserCntrl;
use PDO;
use PDOException;

class adminAddUser_classes
{

    protected function setUser($user_fname,$user_lname,$user_email,$user_contactNo,$user_nic,$user_role,$status,$user_password){
        $hasheduser_password = md5($user_password);
        $dbcon = new DBConnector();
        $con = $dbcon->getConnection();
        try {
            $query = "INSERT INTO user (user_fname,user_lname,user_email,user_contactNo,user_nic,user_role,user_status,user_password) VALUES(?,?,?,?,?,?,?,?)";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1,$user_fname);
            $pstmt->bindValue(2,$user_lname);
            $pstmt->bindValue(3,$user_email);
            $pstmt->bindValue(4,$user_contactNo);
            $pstmt->bindValue(5,$user_nic);
            $pstmt->bindValue(6,$user_role);
            $pstmt->bindValue(7,$status);
            $pstmt->bindValue(8,$hasheduser_password);

            if(!$pstmt->execute()){
                $pstmt = null;
                header("Location:../add_register.php?error=stmtfailed");
                exit();
            }
            $pstmt = null;
        }catch (Exception $exc){
            echo $exc->getMessage();
        }
    }
    protected function checkUser($user_email){
        $dbcon = new DBConnector();
        $con = $dbcon->getConnection();
        try {
            $query = "SELECT user_id FROM user WHERE user_email=?;";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1,$user_email);
            if(!$pstmt->execute()){
                $pstmt = null;
                header("Location:../add_register.php?error=stmtfailed");
                exit();
            }
            if($pstmt->rowCount() > 0){
                $resultCheck = false;
            }else{
                $resultCheck = true;
            }

        }catch (Exception $exc){
            echo $exc->getMessage();
        }
        return $resultCheck;
    }
}