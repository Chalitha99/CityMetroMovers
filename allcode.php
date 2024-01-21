<?php
session_start();

if(isset($_POST['signin_btn'])){
    $_SESSION['message'] = "Please Login";
    header("Location: signin.php");
    exit(0);
}else if(isset($_POST['signup_btn'])){
    $_SESSION['message'] = "Please Register";
    header("Location: register.php");
    exit(0);
}


if(isset($_POST['logout_btn'])){
    //session_destroy();
    unset( $_SESSION['auth']);

    unset( $_SESSION['auth_status']);

    unset( $_SESSION['auth_role']);
    unset( $_SESSION['auth_user']);

    $_SESSION['message'] = "Logged out Successfully";
    header("Location: signIn.php");
    exit(0);
}

?>

