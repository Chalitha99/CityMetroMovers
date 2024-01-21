<?php
session_start();
require "../../Classes/admin.php";
require "../../Classes/DBConnector.php";
use Classes\admin;
use Classes\DBConnector;
include "../message.php";

if(isset($_POST['update_user'])){

    $user_id = $_POST['id'];
    $user_fname = $_POST['user_fname'];
    $user_lname = $_POST['user_lname'];
    $user_nic = $_POST['user_nic'];
    $user_contactNo = $_POST['user_contactNo'];
    $user_email = $_POST['user_email'];
    $user_status = $_POST['user_status'];
    $user_role = $_POST['user_role'];

    $updateUser = new admin($user_id, $user_fname, $user_lname, $user_nic, $user_contactNo, $user_email, $user_status, $user_role);

    $updateUser->updateUser();

    $_SESSION['message'] = "Successfully Updated";
    header("Location:../view_register.php");

}

if(isset($_POST['user_delete'])){
    $userid = $_POST['user_delete'];

    $deleteUser = new admin($userid,"","","","","","","");
    $deleteUser->deleteUser($userid);

    $_SESSION['message'] = "Successfully Deleted";
    header("Location:../view_register.php");
}


