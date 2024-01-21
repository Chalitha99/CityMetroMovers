<?php
session_start();
include "../Classes/DBConnector.php";
include "../Classes/register_classes.php";
include "../Classes/registerCntrl.php";
use Classes\register_classes;
use Classes\registerCntrl;
include "../message.php";

if(isset($_POST['register_btn'])) {

    $user_fname = $_POST['user_fname'];
    $user_lname = $_POST['user_lname'];
    $user_email = $_POST['user_email'];
    $user_contactNo = $_POST['user_contactNo'];
    $user_nic = $_POST['user_nic'];
    $user_photo = addslashes(file_get_contents($_FILES["user_photo"]["tmp_name"]));
    $user_password = $_POST['user_password'];
    $confirm_user_password = $_POST['cpassword'];



    $register = new \Classes\registerCntrl($user_fname,$user_lname,$user_email,$user_contactNo,$user_nic,$user_photo,$user_password,$confirm_user_password);

    $register->registerUser();


}