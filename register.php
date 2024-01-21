<?php
session_start();
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>register</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css">
  <link rel="stylesheet" href="assets/css/register.min.css">
</head>

<body>
  <!-- header -->
  <?php include('includes/navbar.php'); ?>
  <?php include('message.php'); ?>

  <!-- Start: Pretty Registration Form -->
  <div class="row register-form">
    <div class="col-md-8 offset-md-2" style="margin-top: 48px;">


      <form action="includes/register.inc.php" method="POST" enctype="multipart/form-data" class="custom-form"
        style="padding-top: 4px;color: var(--bs-btn-disabled-color);box-shadow: 0px 0px 3px; background-image: url('https://img.freepik.com/free-vector/abstract-background-with-geometric-design_1048-1949.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
        <h1 style="margin-top: 19px;margin-bottom: 36px;"><span style="color: rgb(0, 0, 0);"><b>Register Form</b></span></h1>
        <div class="row form-group">
          <div class="col-sm-4 label-column" style="text-align: center; color:black;"><label class="col-form-label"
              for="name-input-field"><b>First Name</b> </label></div>
          <div class="col-sm-6 input-column"><input class="form-control" required type="text" name="user_fname"></div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 label-column" style="text-align: center; color:black;"><label class="col-form-label"
              for="name-input-field"><b>Last Name </b></label></div>
          <div class="col-sm-6 input-column"><input class="form-control" required type="text" name="user_lname"></div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 label-column" style="text-align: center;"><label class="col-form-label"
              for="email-input-field" style="text-align: left; color:black;"><b>Email</b> </label></div>
          <div class="col-sm-6 input-column"><input class="form-control" required type="email" name="user_email"></div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 label-column" style="text-align: center;"><label class="col-form-label"
              for="email-input-field" style="text-align: left; color:black;"><b>Phone Number</b></label></div>
          <div class="col-sm-6 input-column"><input class="form-control" required type="text" name="user_contactNo">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 label-column" style="text-align: center;"><label class="col-form-label"
              for="email-input-field" style="text-align: left; color:black;"><b>NIC Number</b></label></div>
          <div class="col-sm-6 input-column"><input class="form-control" required type="text" name="user_nic"></div>
        </div>
        <div class="row form-group">
          <!--  <div class="col" style="text-align: center;padding-top: 0px;margin-top: -16px;"><a href="#"
              style="font-weight: bold;"><br><span
                style="font-weight: normal !important; color: rgb(0, 178, 254);">Upload a front side photo of the NIC
                card&nbsp; &nbsp;</span><i class="la la-upload"
                style="color: var(--bs-blue);font-weight: bold;"></i></a></div> -->
          <div class="col-sm-4 label-column" style="text-align: center;"><label class="col-form-label"
              for="email-input-field" style="text-align: center; color:black;"><b>NIC Photo</b></label></div>
          <div class="col-sm-6 input-column"><input class="form-control" required type="file" name="user_photo"
              id="user_photo"></div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4 label-column" style="text-align: center; color:black;"><label class="col-form-label"
              for="pawssword-input-field"><b>Password </b></label></div>
          <div class="col-sm-6 input-column"><input class="form-control" required type="password" name="user_password">
          </div>
          <div>
            <p class="fw-light text-danger mt-2"><small>** You should enter minimum 8 characters including one Uppercase
                letter, one Lowercase letter and one digit.</small></p>
          </div>
        </div>  
          <div class="row form-group">
            <div class="col-sm-4 label-column" style="text-align: center; color:black;"><label class="col-form-label"
                for="repeat-pawssword-input-field"><b>Repeat Password </b></label></div>
            <div class="col-sm-6 input-column"><input class="form-control" required type="password" name="cpassword">
            </div>
          </div><!-- Start: Bootstrap 4's Custom Radios & Checkboxes -->
          <div>
            <fieldset></fieldset>
          </div><!-- End: Bootstrap 4's Custom Radios & Checkboxes -->
          <!-- Start: 1 Row 1 Column -->
          <div class="container">
            <!-- End: 1 Row 1 Column --><button class="btn btn-light submit-button" type="submit" name="register_btn"
              style="background: rgb(159, 145, 204);border: 2px solid black;border-left-style: double;box-shadow: 0px 0px 0px var(--bs-btn-disabled-color);border-radius: 16px; color:black;">Submit
              Form</button>
      </form>
    </div>
  </div><!-- End: Pretty Registration Form -->

  <!-- Start: Footer Basic -->

  <?php include('includes/footer.php'); ?>

  <!-- End: Footer Basic -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>