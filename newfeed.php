


<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Station master - Copy</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/newsfeed.css">
  
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body style="height: 100%;">
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
  <div>
    <section class="position-relative py-4 py-xl-5">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
            <div class="card mb-5"
              style="background: rgb(99, 89, 133);filter: contrast(103%);opacity: 0.94; border-width: 3px;border-color: var(--bs-emphasis-color);">
              <div class="card-body p-sm-5">
                <h2 class="text-center mb-4" style="color: var(--bs-emphasis-color);font-size: 33px;">News Feed</h2>



                <form method="post" action="news_backend.php" enctype="multipart/form-data">
                  <div class="mb-3">
                    <div class="form-check" style="width: 150px;">
                        <input class="form-check-input" type="radio" id="formCheck-1" name="Box" value="1">
                        <label class="form-check-label" for="formCheck-1" style="color: Black;"><b>First
                        news box</b></label></div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="formCheck-2" name="Box" value="2">
                        <label
                        class="form-check-label" for="formCheck-2" style="width: 150px;color: Black;"><b>Second news box</b>
                        </label></div>
                      <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="Box" value="3"><label
                        class="form-check-label" for="formCheck-3"
                        style="width: 150px;color: Black;font-size: 16px;"><b>Third new box</b></label></div>
                  </div>
                    <div class="mb-3"><input class="form-control" type="text"  placeholder="News Topic" name="topic"></div>
                  <div class="mb-3"><textarea class="form-control" id="message-2" name="message" rows="6"
                      placeholder="Message"></textarea></div>
                  <div><input class="btn btn-primary" d-block w-100 type="submit" name="submit" value="Submit"></div>
                </form>

<?php
if (isset($_GET['success'])) {

    if ($_GET['success'] == "1") {
        ?>

        <script>
            swal("Successfully!", "Updated the News !", "success");
        </script>
        <?php
    }
}
?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div>
      <?php include('includes/footer.php'); ?>
  </div>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>