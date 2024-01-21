<?php
session_start();
include "../../Classes/DBConnector.php";
include "../../Classes/adminAddUser_classes.php";
include "../../Classes/adminAddUserCntrl.php";
include "../message.php";
use Classes\adminAddUser_classes;
use Classes\adminAddUserCntrl;

if(isset($_POST['add_user'])){

    $user_fname = $_POST['user_fname'];
    $user_lname = $_POST['user_lname'];
    $user_nic = $_POST['user_nic'];
    $user_contactNo = $_POST['user_contactNo'];
    $user_email = $_POST['user_email'];
    $status = $_POST['user_status'];
    $user_role = $_POST['user_role'];
    $user_password = $_POST['user_password'];

    $adduser = new \Classes\adminAddUserCntrl($user_fname,$user_lname,$user_email,$user_contactNo,$user_nic,$user_password,$user_role,$status);

    $adduser->registerUser();

    $_SESSION['message'] = "Successfully registered";
    header("Location: ../add_register.php");

}