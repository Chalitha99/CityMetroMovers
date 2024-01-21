<?php
session_start();

if(!isset($_SESSION['auth'])){
    
    $_SESSION['message'] = "Login to access dashboard";
    header("Location: ../signin.php");
    exit(0);
}else{
    if($_SESSION['auth_role'] != "admin"){
        header("Location: ../signin.php");
        exit(0);
    }
}
?>