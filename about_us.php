<?php
session_start();
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>aboutUs</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Verdana, Geneva, Tahoma, sans-serif
&amp;display=swap">
  <link rel="stylesheet" href="assets/css/about_us.css">
</head>

<body>
  <!-- Start: navbar -->
  <?php include('includes/navbar.php'); ?>
  <section style="background: rgb(255, 255, 255);">
    <div id="space1" style="padding: 10px;"></div><!-- Start: 1 Row 2 Columns -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 item">
          <div class="row">
            <div class="col" style="padding-left: 161px;padding-right: 160px;text-align: center;"><svg
                xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" width="1em" fill="currentColor"
                class="text-center" style="margin-right: 0px;text-align: center;">
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M20 4H4v2h16V4zm1 10v-2l-1-5H4l-1 5v2h1v6h10v-6h4v6h2v-6h1zm-9 4H6v-4h6v4z"></path>
              </svg></div>
          </div>
          <h2 class="text-center" style="font-family: Verdana, Geneva, Tahoma, sans-serif
;"><b>Our Story:</b></h2>
          <p
            style="color: var(--bs-emphasis-color);font-family: Verdana, Geneva, Tahoma, sans-serif
;text-align: left;transform: scale(1);">
            CityMetroMovers has earned its reputation as a distinguished company through a journey marked by unwavering
            dedication and innovation. We take pride in our story of excellence and evolution.<br><br></p>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col" style="padding-left: 161px; padding-right: 160px; text-align: center;">
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="1em" viewBox="0 0 24 24"
                width="1em" fill="currentColor" class="text-center">
                <rect fill="none" height="24" width="24"></rect>
                <g>
                  <path
                    d="M12,12.75c1.63,0,3.07,0.39,4.24,0.9c1.08,0.48,1.76,1.56,1.76,2.73L18,18H6l0-1.61c0-1.18,0.68-2.26,1.76-2.73 C8.93,13.14,10.37,12.75,12,12.75z M4,13c1.10,0,2-0.90,2-2c0-1.10-0.90-2-2-2s-2,0.90-2,2C2,12.10,2.90,13,4,13z M5.13,14.10 C4.76,14.04,4.39,14,4,14c-0.99,0-1.93,0.21-2.78,0.58C0.48,14.90,0,15.62,0,16.43V18l4.5,0v-1.61C4.5,15.56,4.73,14.78,5.13,14.10z M20,13c1.10,0,2-0.90,2-2c0-1.10-0.90-2-2-2s-2,0.90-2,2C18,12.10,18.90,13,20,13z M24,16.43c0-0.81-0.48-1.53-1.22-1.85 C21.93,14.21,20.99,14,20,14c-0.39,0-0.76,0.04-1.13,0.10c0.40,0.68,0.63,1.46,0.63,2.29V18l4.5,0V16.43z M12,6c1.66,0,3,1.34,3,3 c0,1.66-1.34,3-3,3s-3-1.34-3-3C9,7.34,10.34,6,12,6z">
                  </path>
                </g>
              </svg>
            </div>
          </div>
          <h2 class="text-center" style="font-family: Verdana, Geneva, Tahoma, sans-serif
;"><b>Our Team:</b></h2>
          <a href="team.php" class="btn btn-primary" style="font-family: Verdana, Geneva, Tahoma, sans-serif
; display: block; margin: 0 auto; text-align: center; background-color: rgb(57, 48, 83); transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='rgb(159, 145, 204)'" onmouseout="this.style.backgroundColor='rgb(57, 48, 83)'">
    Come see us
</a>

        </div>

      </div>
    </div><!-- End: 1 Row 2 Columns -->
    <div id="space" class="space" style="padding: 10px;"></div><!-- Start: 1 Row 3 Columns -->
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <div class="col" style="padding-left: 161px;padding-right: 160px;text-align: center;"><svg
                xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                class="text-center" style="text-align: center;">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79086 9.79086 8 12 8C14.2091 8 16 9.79086 16 12ZM14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12Z"
                  fill="currentColor"></path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12 3C17.5915 3 22.2898 6.82432 23.6219 12C22.2898 17.1757 17.5915 21 12 21C6.40848 21 1.71018 17.1757 0.378052 12C1.71018 6.82432 6.40848 3 12 3ZM12 19C7.52443 19 3.73132 16.0581 2.45723 12C3.73132 7.94186 7.52443 5 12 5C16.4756 5 20.2687 7.94186 21.5428 12C20.2687 16.0581 16.4756 19 12 19Z"
                  fill="currentColor"></path>
              </svg></div>
          </div>
          <h2 class="text-center" style="font-family: Verdana, Geneva, Tahoma, sans-serif
;"><b>Our Mission:</b></h2>
          <p
            style="color: var(--bs-emphasis-color);font-family: Verdana, Geneva, Tahoma, sans-serif
;text-align: left;transform: scale(1);">
            At CityMetroMovers, our journey began with a vision to transform public transportation in metropolitan areas
            across Sri Lanka. Our project, aptly named CityMetroMovers, was conceived with a deep understanding of the
            challenges commuters face daily – overcrowding, ticketing inefficiencies, and limited accessibility. We
            aimed to revolutionize the metro bus experience, and we're proud to share our story with you.<br><br></p>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col" style="padding-left: 161px;padding-right: 160px;text-align: center;"><svg
                xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" width="1em" fill="currentColor"
                class="text-center">
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path
                  d="M3 5h2V3c-1.1 0-2 .9-2 2zm0 8h2v-2H3v2zm4 8h2v-2H7v2zM3 9h2V7H3v2zm10-6h-2v2h2V3zm6 0v2h2c0-1.1-.9-2-2-2zM5 21v-2H3c0 1.1.9 2 2 2zm-2-4h2v-2H3v2zM9 3H7v2h2V3zm2 18h2v-2h-2v2zm8-8h2v-2h-2v2zm0 8c1.1 0 2-.9 2-2h-2v2zm0-12h2V7h-2v2zm0 8h2v-2h-2v2zm-4 4h2v-2h-2v2zm0-16h2V3h-2v2zM7 17h10V7H7v10zm2-8h6v6H9V9z">
                </path>
              </svg></div>
          </div>
          <h2 class="text-center" style="font-family: Verdana, Geneva, Tahoma, sans-serif
;"><b>Why Choose US:</b></h2>
          <p
            style="color: var(--bs-emphasis-color);font-family: Verdana, Geneva, Tahoma, sans-serif
;text-align: left;transform: scale(1);">
            CityMetroMovers is your premier choice for metro bus ticketing and information in Sri Lanka. We stand out for our commitment to:<br>
Convenience: Experience hassle-free ticketing, easy access to information, and user-friendly services.<br>
Transparency: We believe in openness and provide monthly reports for improved service quality.<br>Choose CityMetroMovers for a seamless and reliable metro bus experience.<br><br></p>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col" style="padding-left: 161px;padding-right: 160px;text-align: center;"><svg
                xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" width="1em" fill="currentColor"
                class="text-center">
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path
                  d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z">
                </path>
              </svg></div>
          </div>
          <h2 class="text-center" style="font-family: Verdana, Geneva, Tahoma, sans-serif
;"><b>Security:</b></h2>
          <p
            style="color: var(--bs-emphasis-color);font-family: Verdana, Geneva, Tahoma, sans-serif
;text-align: left;transform: scale(1);">
            As a reputed company we are ensuring that our customer's privacy is secured and the we are protecting our
            website from all the malware attacks.<br><br></p>
        </div>
      </div>
    </div><!-- End: 1 Row 3 Columns -->
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <?php include('includes/footer.php'); ?>
</body>

</html>