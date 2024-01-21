<?php
session_start();
include 'admin/config/dbcon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userID = $_SESSION['user_id']; 
    $packageID = $_SESSION['pkg_id'];
    $route_id = $_POST["route_id"];

    // Insert data into pkg_user table
    $sql = "INSERT INTO pkg_user (User_id, Pkg_id, Route_id) VALUES (?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sss", $userID, $packageID, $route_id);

    if ($stmt->execute()) {
        header("Location:payment.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>
