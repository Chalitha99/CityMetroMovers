<?php
session_start();
if(!isset($_SESSION['auth'])){
    
    $_SESSION['message'] = "Login to access dashboard";
    header("Location: signin.php");
    exit(0);
}

if($_SESSION['auth_role'] != "station_operator" && $_SESSION['auth_role'] != "moderator" && $_SESSION['auth_role'] != "admin"){
    header("Location: signin.php");
    exit(0);
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body
    style="background: url(&quot;509757.jpg&quot;) top / cover no-repeat, transparent;text-align: center;width: 100%;height: 100vh;">
    
    <div style="height: 82px;">
    <nav class="navbar navbar-expand-md navigation-clean navbar-light"
      style="z-index: 2000;background: rgb(99, 89, 133);height: 83px;">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 col-xl-2 offset-xl-1"><img
                src="citymetromovers-low-resolution-logo-black-on-transparent-background.png"
                style="width: 177px;height: 74px;padding-right: 0px;margin-right: 0px;padding-left: 0px;margin-left: 0px;"
                width="177" height="74"></div>
            <div class="col-md-4 col-xl-3 offset-xl-1"></div>
          </div>
        </div>
      </div>
    </nav>
  </div>
    
    <header>
        <h1><span style="color: rgb(255, 255, 255);">Station Master</span></h1>
    </header>
    <div class="container">
        <div class="row" style="padding: 86px;padding-top: 200px;">
            <div class="col-md-4" style="padding: 10px;height: 150px;"><button class="btn btn-primary" type="button"
                                                                               style="height: 60%;width: 90%;background: rgb(159,145,204);"><a href="station_A.php" style="text-decoration: none; color: white; font-size:20px;">Station A</a></button></div>
            <div class="col-md-4" style="padding: 10px;height: 150px;"><button class="btn btn-primary" type="button"
                    style="width: 90%;height: 60%;background: rgb(85,72,129);"><a href="station_B.php" style="text-decoration: none; color: white; font-size:20px;">Station B</a></button></div>
            <div class="col-md-4" style="padding: 10px;height: 150px;"><button class="btn btn-primary" type="button"
                    style="width: 90%;height: 60%;background: rgb(52,42,85);"><a href="station_C.php" style="text-decoration: none; color: white; font-size:20px;">Station C</a></button></div>
        </div>
    </div>
    
    <div>
    <footer class="text-center" style="background: rgb(99, 89, 133);">
      <div class="container text-muted py-4 py-lg-5">
        <ul class="list-inline text-decoration-none" style="color: var(--bs-tertiary-bg);">
          <li class="list-inline-item me-4" style="font-family: Verdana, Geneva, Tahoma, sans-serif;color: var(--bs-secondary-bg);"><a
              href="#" style="color: var(--bs-tertiary-bg);font-family: Verdana, Geneva, Tahoma, sans-serif;">About us</a></li>
          <li class="list-inline-item me-4" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><a href="#"
              style="color: var(--bs-tertiary-bg);font-family: Verdana, Geneva, Tahoma, sans-serif;">Contact us</a></li>
          <li class="list-inline-item" style="color: var(--bs-tertiary-bg);font-family: Verdana, Geneva, Tahoma, sans-serif;"><a href="#"
              style="color: var(--bs-tertiary-bg);font-family: Verdana, Geneva, Tahoma, sans-serif;">Feedbacks</a></li>
        </ul>
        <ul class="list-inline">
          <li class="list-inline-item me-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
              fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
              
            </svg></li>
          <li class="list-inline-item me-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
              fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
             
            </svg></li>
          <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
              fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
              
            </svg></li>
        </ul>
        <p class="mb-0" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Copyright © 2023 CityMetroMovers&nbsp; All rights
          reserved</p>
      </div>
    </footer>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>