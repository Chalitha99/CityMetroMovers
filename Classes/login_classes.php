<?php

namespace Classes;

use Classes\DBConnector;
use PDO;
use PDOException;

class Login_classes
{
    protected function getUser($user_email, $user_password){
        $dbcon = new DBConnector();
        $con = $dbcon->getConnection();
        try {
            $query = "SELECT * FROM user WHERE user_email=?;";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $user_email);

            if (!$pstmt->execute()) {
                throw new Exception("Statement execution failed");
            }

            $rs = $pstmt->fetch(PDO::FETCH_ASSOC);

            if (!$rs) {
                $_SESSION['message'] = "User not found";
                header("Location:../signIn.php?error=user_not_found");
                exit();
            }

            $hashed_password = md5($user_password);

            if ($hashed_password != $rs['user_password']) {
                $_SESSION['message'] = "email or password does not match";
                header("Location:../signIn.php?error=email_or_password_does_not_match");
                exit();
            } else {
                session_start();

                $_SESSION['user_id'] = $rs['user_id'];
                $_SESSION['auth'] = true;
                $_SESSION['auth_role'] = $rs['user_role'];
                $user_id = $rs['user_id'];
                $user_name = $rs['user_fname']." ".$rs['user_lname'];
                $user_nic = $rs['user_nic'];
                $user_contactNo = $rs['user_contactNo'];
                $user_email = $rs['user_email'];
                $_SESSION['auth_user'] = [
                    'user_id' => $rs['user_id'],
                    'user_name' => $user_name,
                    'user_nic' => $user_nic,
                    'user_contactNo' => $user_contactNo,
                    'user_email' => $user_email,

                ];

            }
        } catch (PDOException $e) {
            // Log the error or handle it in a more secure way
            echo "Database Error: " . $e->getMessage();
        } catch (Exception $e) {
            // Log the error or handle it in a more secure way
            echo "Error: " . $e->getMessage();
        }
    }

    protected function userEmail($user_email){
        $dbcon = new DBConnector();
        $con = $dbcon->getConnection();
        try {
            $query = "SELECT user_email FROM user WHERE user_email = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1,$user_email);
            $rs = $pstmt->execute();
            if($pstmt->rowCount()>0){
                $result = true;
            }else{
                $result = false;
            }
        }catch (PDOException $exc){
            echo $exc->getMessage();
        }
        return $result;
    }

    protected function userStatus($user_email){
        $dbcon = new DBConnector();
        $con = $dbcon->getConnection();

        try {
            $query = "SELECT user_status FROM user WHERE user_email=?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $user_email);
            $pstmt->execute(); // You need to execute the prepared statement
            $rs = $pstmt->fetch(PDO::FETCH_ASSOC);

            if ($rs !== false) {
                $status = $rs['user_status'];
                if ($status == "Active") {
                    $result = true;
                } else if($status == "Banned"){
                    $result = false;
                }else{
                    $_SESSION['message'] = "User not found";
                    header("Location:../signIn.php?error=user_not_found");
                    exit();
                }
            }
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
        return $result;
    }

}
