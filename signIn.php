<?php
session_start();

if(isset($_SESSION['auth'])){

  header("Location: index.php");
  exit(0);
}

?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>Sign_In</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="assets/css/signin.css" />
  </head>
  <body>
    <!-- header -->
  <?php include('includes/navbar.php'); ?>

    <?php include('message.php'); ?>


    <!-- Start: Login Form Basic -->
    <section class="position-relative py-4 py-xl-5">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-6 col-xl-4">
            <div class="card mb-5">
              <div class="card-body d-flex flex-column align-items-center" style="background-image: url('https://img.freepik.com/free-vector/abstract-background-with-geometric-design_1048-1949.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
                <div
                  class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"
                  style="background: rgb(159, 145, 204); border:2px solid black;"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="1em"
                    height="1em"
                    fill="currentColor"
                    viewBox="0 0 16 16"
                    class="bi bi-person-fill"
                    style="color: var(--bs-emphasis-color); background: rgb(156, 158, 254);"
                  >
                    <path
                      d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                    ></path>
                  </svg>
                </div>
                <form class="text-center" action="includes/login.inc.php" method="post">
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="email"
                      name="user_email"
                      placeholder="Email"
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="password"
                      name="user_password"
                      placeholder="Password"
                    />
                  </div>
                  <div class="mb-3">
                    <button
                      class="btn btn-primary d-block w-100"
                      type="submit"
                      name= "login_btn"
                      style="
                        background: rgb(159, 145, 204);
                        color: var(--bs-emphasis-color);
                        font-weight: bold;
                         border:2px solid black;
                      "
                    >
                      Login
                    </button>
                  </div>
                  <p class="text-muted">
                    <b>Dont have an account?</b>
                    <strong
                      ><span style="color: rgba(255, 0, 0, 0.75)"
                        ><a href="register.php">SIGN UP</a></span
                      ></strong
                    >
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End: Login Form Basic --><!-- Start: Footer Basic -->
    <?php include('includes/footer.php'); ?>
    <!-- End: Footer Basic -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
