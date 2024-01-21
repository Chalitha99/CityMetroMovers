<?php
session_start();
include "../Classes/DBConnector.php";
include "../Classes/login_classes.php";
include "../Classes/loginCntrl.php";
include "../message.php";
use Classes\Login_classes;
use Classes\loginCntrl;

if(isset($_POST['login_btn'])) {
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $login = new \Classes\loginCntrl($user_email,$user_password);

    $login->loginUser();

    switch ($_SESSION['auth_role']) {
        case "admin":
            $_SESSION['message'] = "Welcome to dashboard";
            header("Location: admin/index.php");
            exit(0);

        case "user":
            $_SESSION['message'] = $user_name." "."welcome to CityMetroMovers";
            header("Location: ../index.php");
            exit(0);

        case "moderator":
            $_SESSION['message'] = "You are logged in";
            header("Location: ../moderatorindex.php");
            exit(0);

        case "station_operator":
            $_SESSION['message'] = "You are logged in";
            header("Location: Station_master_dashbord.php");
            exit(0);

        case "communicator":
            $_SESSION['message'] = "You are logged in";
            header("Location: index.php");
            exit(0);

        default:
            break;
    }
}