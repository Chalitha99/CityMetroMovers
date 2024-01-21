<?php 
session_start();   
require 'Classes/login_classes.php';
require './Classes/newsAdd.php';
use Classes\Login_classes;
use Classes\newsAdd;

?>


<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>prelogin_home - Copy</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Verdana, Geneva, Tahoma, sans-serif
&amp;display=swap">
  <link rel="stylesheet" href="css/home-style .css">
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/31a106ca50.js" crossorigin="anonymous"></script>
</head>

<body
  style="background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;);padding-bottom: 0px;">
  <div style="height: 82px;">
    
        <?php include('includes/navbar.php'); ?>
  </div>
  <div style="background: url(&quot;assets/img/bg1.jpg&quot;) center / cover no-repeat;">
    <h1
      style="margin-bottom: 0px;color: var(--bs-body-bg);font-family: Verdana, Geneva, Tahoma, sans-serif
;text-align: center;padding-top: 200px;padding-bottom: 100px;">
      Welcome to CityMetroMovers</h1>
  </div>
  <div>
    <div class="simple-slider">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background: var(--bs-body-bg);height: 800px;">
            <div class="container py-4 py-xl-5" style="background: var(--bs-body-bg);height: 900px;">
              <div class="row" style="background: var(--bs-body-bg);">
                <div class="col-md-8 col-xl-6 mx-auto p-4" style="background: var(--bs-body-bg);">
                  <div class="d-flex align-items-center align-items-md-start align-items-xl-center"
                    style="margin-bottom: 40px;background: var(--bs-body-bg);">
                    <div
                      class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center me-4 d-inline-block bs-icon xl">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                        viewBox="0 0 16 16" class="bi bi-bell">
                        <path
                          d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z">
                        </path>
                      </svg></div>
                    <div>
                      <h4 style="font-family: Verdana, Geneva, Tahoma, sans-serif
;"><strong>Easy Ticket Booking</strong></h4>
                      <p>Say farewell to waiting in never-ending lines. With CityMetroMovers, booking your metro bus
                        tickets is as simple as ABC! Access our intuitive interface, select your destination, choose
                        your preferred schedule, and you're all set – no more last-minute ticket panics!<br><br><br></p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center align-items-md-start align-items-xl-center"
                    style="margin-bottom: 40px;background: var(--bs-body-bg);">
                    <div
                      class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center order-last ms-4 d-inline-block bs-icon xl">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                        viewBox="0 0 16 16" class="bi bi-bell">
                        <path
                          d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z">
                        </path>
                      </svg></div>
                    <div>
                      <h4 style="font-family: Verdana, Geneva, Tahoma, sans-serif
;"><strong>Secure and Hassle-Free Payments</strong></h4>
                      <p>Your safety and security are our utmost priorities.CityMetroMovers integrates state-of-the-art
                        payment gateways, allowing you to make secure transactions with ease. Rest assured that your
                        payment details are encrypted and protected, giving you peace of mind throughout your entire
                        booking process.<br><br><br></p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center align-items-md-start align-items-xl-center"
                    style="margin-top: 40px;background: var(--bs-body-bg);">
                    <div
                      class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center me-4 d-inline-block bs-icon xl">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                        viewBox="0 0 16 16" class="bi bi-bell">
                        <path
                          d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z">
                        </path>
                      </svg></div>
                    <div>
                      <h4 style="font-family: Verdana, Geneva, Tahoma, sans-serif
;"><strong>Time-Saving Convenience</strong></h4>
                      <p>We understand the value of your time. With CityMetroMovers, you can wave goodbye to wasted
                        hours in traffic jams or waiting for public transportation. Our efficient metro buses and
                        streamlined ticketing process ensure you reach your destination on time, every time.<br><br><br>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div style="background: rgb(255,255,255);margin: 0px;">
    <div class="container py-4 py-xl-5" style="background: var(--bs-body-bg);margin-bottom: 0px;">
      <div class="row mb-5" style="background: var(--bs-body-bg);margin: 50px;margin-bottom: 50px;">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
          <h2
            style="font-family: Verdana, Geneva, Tahoma, sans-serif
;background: rgb(24, 18, 43);border-radius: 20px;height: 50px;margin-top: 0px;padding: 8px; color:white;">
            News Feed</h2>
        </div>
      </div>
      <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3"
        style="width: 100%;height: 300px;margin-bottom: 70px;">
          
           <?php
                  
                $newsArray_1 = newsAdd::newsGetter("1");
                $BoxTopic_1 = $newsArray_1[0];
                $BoxDescription_1 =$newsArray_1[1];
                
           ?> 
          
        <div class="col" style="height: 100%;width: 33%;">
          <div class="p-4"
            style="background: url(&quot;assets/img/Money_Cash.jpg&quot;) no-repeat;background-size: cover;border-radius: 30px;height: 100%;">
            <span class="badge rounded-pill bg-primary mb-2">New</span>
            <h4 style="font-family: Verdana, Geneva, Tahoma, sans-serif
;color: var(--bs-body-bg);">
                
              <?php
                         echo $BoxTopic_1;
              ?>
                
                
            </h4>
            <p style="color: var(--bs-body-bg);">
                
                 <?php
                         echo $BoxDescription_1;
                 ?>
                
            </p>
            <div class="d-flex">
              <div></div>
            </div>
          </div>
        </div>
          
          
           <?php
                    
                $newsArray_2 = newsAdd::newsGetter("2");
                $BoxTopic_2 = $newsArray_2[0];
                $BoxDescription_2 =$newsArray_2[1];
                
           ?> 
        <div class="col" style="width: 33%;height: 100%;">
          <div class="p-4"
            style="background: url(&quot;assets/img/metro.jpg&quot;) no-repeat;background-size: cover;border-radius: 30px;height: 100%;">
            <span class="badge rounded-pill bg-primary mb-2">New</span>
            <h4 style="font-family: Verdana, Geneva, Tahoma, sans-serif
;color: var(--bs-body-bg);">
                
                 <?php
                         echo $BoxTopic_2;
                 ?>
            </h4>
            <p style="color: var(--bs-body-bg);">
                
                 <?php
                         echo $BoxDescription_2;
              ?>
            </p>
            <div class="d-flex">
              <div></div>
            </div>
          </div>
        </div>
          
          
          <?php
                    
                $newsArray_3 = newsAdd::newsGetter("3");
                $BoxTopic_3 = $newsArray_3[0];
                $BoxDescription_3 =$newsArray_3[1];
                
           ?> 
        <div class="col" style="width: 33%;height: 100%;">
          <div class="p-4"
            style="background: url(&quot;assets/img/fine.jpg&quot;) no-repeat;background-size: cover;border-radius: 30px;height: 100%;">
            <span class="badge rounded-pill bg-primary mb-2">New</span>
            <h4 style="font-family: Verdana, Geneva, Tahoma, sans-serif
;color: var(--bs-body-bg);">
            
             <?php
                         echo $BoxTopic_3;
             ?>
            
            </h4>
            <p style="color: var(--bs-body-bg);">
                <?php
                         echo $BoxDescription_3;
                 ?> 
                
            </p>
            <div class="d-flex">
              <div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
     <?php include('includes/footer.php'); ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.min.js"></script>
</body>

</html>