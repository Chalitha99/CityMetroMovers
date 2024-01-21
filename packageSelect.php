<?php
session_start();

if(isset($_POST['confirmpkg'])){
    $_SESSION['pkg_id'] = $_POST['id'];
    $_SESSION['pkg_price'] = $_POST['price'];
    $_SESSION['pkg_title'] = $_POST['title'];
    
    header("location:pkgconfirmation.php");
    
}
 
?>