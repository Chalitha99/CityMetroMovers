<?php
session_start();
?>



<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>contact us</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/contact_us.css">



  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
  </script>
  <script type="text/javascript">
    (function () {
      emailjs.init("7tuI5BjjAL9BWYvbH");
    })();
  </script>

    <script>
      function  sendMail(){
        var params = {
          from_name :document.getElementById("name-1").value,
          email_id :document.getElementById("email-1").value,
          message :document.getElementById("message-1").value
        }
        emailjs.send("service_vafkvd3","template_y99lf3a", params).then(function(res){
          alert("Success! " );
        })
      }
    </script>


</head>

<body ><!-- Start: nav bar -->
<?php include('includes/navbar.php'); ?>
  <!-- End: Navbar Right Links -->
  </div><!-- End: nav bar --><!-- Start: Contact Details -->
  <section class="position-relative py-4 py-xl-5" style="background-image: url('https://altraclightrail.com.au/wp-content/uploads/2022/10/hero-banner.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;"
    >
    <div class="container position-relative">
      <div class="row mb-5"
        style="margin-bottom: 19px;padding-bottom: 0px;background: rgb(145, 127, 179);border-style: solid;color: rgb(68, 60, 104);">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
          <h2 style="color: var(--bs-emphasis-color);"><strong><span style="text-decoration: underline; color: white;">Contact
                us</span></strong></h2>
          <p class="w-lg-50" style="color: black;"><b>"Connecting Communities, One Click at a Time!" Have
              questions or feedback about our light rail system web project? We're here to listen and help. Get in touch
              with us today and be a part of the future of urban transportation. Contact us now! </b><span
                style="color: rgb(0, 71, 254);">#RideTheFuture #CityMetroMovers</span>"</p>
        </div>
      </div>
      <div class="row d-flex justify-content-center"
        style="margin-top: 0px;padding-top: 0px;background: rgb(145, 127, 179);border-style: solid;">


        <div class="col-md-6 col-lg-4 col-xl-4" style="border-style: solid;">
          <div class="p-3 p-xl-4" method="post"><!-- Start: Success Example -->
            <div class="mb-3"><input class="form-control" type="text" id="name-1" name="name" placeholder="Name"
                required></div>
            <!-- End: Success Example --><!-- Start: Error Example -->
            <div class="mb-3"><input class="form-control" type="email" id="email-1" name="email" placeholder="Email"
                required>
            </div><!-- End: Error Example -->
            <div class="mb-3"><textarea class="form-control" id="message-1" name="message" rows="6"
                placeholder="Message" required></textarea></div>
            <div><button class="btn btn-primary d-block w-100" type="submit" style="border-style: none;"
                onclick="sendMail()">Send </button>
            </div>
          </div>
        </div>


        <div class="col-md-6 col-lg-5 col-xl-4" style="border-style: solid;">
          <div class="d-flex flex-column justify-content-center align-items-start h-100">
            <div class="d-flex align-items-center p-3">
              <div
                class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"
                  class="bi bi-telephone">
                  <path
                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z">
                  </path>
                </svg>
              </div>
              <div class="px-2">
                <h6 class="mb-0"><strong><span style="color: rgb(6, 6, 6);">Phone</span></strong></h6>
                <p class="mb-0"><strong><span style="color: rgb(8, 8, 8);">+94 769 310 308</span></strong></p>
              </div>
            </div>
            <div class="d-flex align-items-center p-3">
              <div
                class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"
                  class="bi bi-envelope">
                  <path
                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z">
                  </path>
                </svg>
              </div>
              <div class="px-2">
                <h6 class="mb-0"><strong><span style="color: rgb(0, 0, 0);">Email</span></strong></h6>
                <p class="mb-0"><strong>citymetromovers2k23@gmail.com</strong></p>
              </div>
            </div>
            <div class="d-flex align-items-center p-3">
              <div
                class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"
                  class="bi bi-pin">
                  <path
                    d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A5.921 5.921 0 0 1 5 6.708V2.277a2.77 2.77 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354zm1.58 1.408-.002-.001.002.001zm-.002-.001.002.001A.5.5 0 0 1 6 2v5a.5.5 0 0 1-.276.447h-.002l-.012.007-.054.03a4.922 4.922 0 0 0-.827.58c-.318.278-.585.596-.725.936h7.792c-.14-.34-.407-.658-.725-.936a4.915 4.915 0 0 0-.881-.61l-.012-.006h-.002A.5.5 0 0 1 10 7V2a.5.5 0 0 1 .295-.458 1.775 1.775 0 0 0 .351-.271c.08-.08.155-.17.214-.271H5.14c.06.1.133.191.214.271a1.78 1.78 0 0 0 .37.282z">
                  </path>
                </svg>
              </div>
              <div class="px-2">
                <h6 class="mb-0"><strong><span style="color: rgb(0, 0, 0);">Location</span></strong></h6>
                <p class="mb-0"><strong><span style="color: rgb(0, 0, 0);">Passara road, Badulla</span></strong></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End: Contact Details --><!-- Start: footer -->
  <?php include('includes/footer.php'); ?>
  <!-- End: footer -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.min.js"></script>
</body>

</html>