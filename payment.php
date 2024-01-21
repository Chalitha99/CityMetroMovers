<?php
  session_start();
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Payment_Gateway</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/payment.css">
</head>

<body>

<?php include('includes/navbar.php'); ?>
<div class="custom-form-container" style="margin-bottom: 1px; padding-bottom: 0px; padding-top: 30px;"></div>

  <div class="row .payment-dialog-row">
    <div class="col-12 col-md-4 offset-md-4">
      <div class="card credit-card-box">
        <div class="card-header">
          <h3 style="text-align: center;"><img class="img-fluid panel-title-image" src="assets/img/accepted_cards.png">
          </h3>
        </div>
        <div class="card-body">
          <form id="payment-form">
            <div class="row">
              <div class="col-12">
                <div class="form-group mb-3"><label class="form-label" for="cardNumber"><strong>Card number
                    </strong></label>
                  <div class="input-group"><input class="form-control" type="tel" id="cardNumber" required=""
                      placeholder="Valid Card Number" style="box-shadow: 0px 0px 5px;"><span class="input-group-text"
                      style="box-shadow: 0px 0px 5px 2px;"><i class="fa fa-credit-card"
                        style="font-weight: bold;color: var(--bs-emphasis-color);"></i></span></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-7">
                <div class="form-group mb-3"><label class="form-label" for="cardExpiry"><span><strong>EXP
                      </strong></span><strong> date</strong></label><input class="form-control" type="tel"
                    id="cardExpiry" required="" placeholder="MM / YY" style="box-shadow: 0px 0px 5px;"></div>
              </div>
              <div class="col-5 pull-right" style="margin-bottom: 27px;padding-bottom: 0px;">
                <div class="form-group mb-3"><label class="form-label" for="cardCVC"><strong>cv
                      code</strong></label><input class="form-control" type="tel" id="cardCVC" required=""
                    placeholder="CVC" style="box-shadow: 0px 0px 5px;"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-12"><button class="btn btn-success btn-lg d-block w-100" type="submit"
                  style="background: rgb(156, 158, 254);color: var(--bs-body-bg);font-weight: bold;">Pay</button></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="custom-form-container" style="margin-bottom: 1px; padding-bottom: 0px; padding-top: 30px;"></div>
  <div>
  <?php include('includes/footer.php'); ?>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.min.js"></script>
</body>

</html>