<?php
session_start();
include "Classes/DBConnector.php";
include "Classes/packageDisplay.php";
use Classes\DBConnector;
use Classes\packageDisplay;

$packageID = $_SESSION['pkg_id'];
$packagePrice = $_SESSION['pkg_price'];
$packageTitle = $_SESSION['pkg_title'];
$userID = $_SESSION['user_id'];



    $newUser = new packageDisplay();
    $userData = $newUser->getUser($userID);

    $name = $userData[0]['user_fname'] . ' ' . $userData[0]['user_lname'];
    $email = $userData[0]['user_email'];

?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $userID = $_SESSION['user_id'];
    $packageID = $_SESSION['pkg_id'];
    $route_id = $_POST["route_id"];

    $insertPkg = new packageDisplay();
    $insertPkg->insertUserPackage($userID, $packageID, $route_id);
    header("Location:payment.php");

}
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Package Confirmation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="pkgconfirm.css">
</head>

<body>
    <script>
        var selectedRouteId = null; // Initialize the variable to null
    </script>

    <?php include('includes/navbar.php'); ?>


    <!--        <div class="container-detailsDisplay">
            
            <h2>Your Package Details</h2>
            <p></p>
            
        </div>-->
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">

        <div class="custom-form-container" style="margin-bottom: 1px; padding-bottom: 0px; padding-top: 30px;"></div>

            <div class="custom-form-container" style="border: 3px solid black; padding: 20px;">

                <form class="custom-form" action="check_userid.php" method="POST"
                    style="margin-bottom: 1px; padding-bottom: 0px; padding-top: 0px;">
                    <label class="form-label" style="text-align: center; margin-bottom: 26px; font-size: 16.52px;"><b>Your
                        Details are...</b></label>

                    <div class="row form-group" style="margin-bottom: 20px;">
                        <div class="col-sm-4 label-column">
                            <label class="col-form-label" for="user-id-input-field" name="userid">User ID</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" id="user-id-input-field"
                                value="<?php echo $userID; ?>" readonly>
                        </div>
                    </div>
                </form>

                <div class="row form-group" style="margin-bottom: 20px;">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="name-input-field">Name</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" id="name-input-field" value="<?php echo $name; ?>"
                            readonly>
                    </div>
                </div>

                <div class="row form-group" style="margin-bottom: 20px;">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="email-input-field">Email</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" id="email-input-field" value="<?php echo $email; ?>"
                            readonly>
                    </div>
                </div>

                <div class="row form-group" style="margin-bottom: 20px;">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="name-input-field">Amount</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" name="amount"
                            value="<?php echo "Rs." . $packagePrice . ".00" ?>" readonly>
                    </div>
                </div>

                <div class="row form-group" style="margin-bottom: 20px;">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="name-input-field">Package type</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" name="pkgType" value="<?= $packageTitle ?>" readonly>
                    </div>
                </div>

            </div>

            <div class="custom-form-container" style="margin-bottom: 1px; padding-bottom: 0px; padding-top: 30px;"></div>


            <div class="container" style="margin-bottom: 28px;">
                <h1 style="text-align: center;font-size: 16.52px;">Select Your Route...</h1>
            </div>
            <div class="table-responsive" style="border-style: solid;text-align: center;">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="border-style: solid;">Route No</th>
                            <th>Start</th>
                            <th>End</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $route = new packageDisplay();
                        $result = $route->getRouteInfo();

                        foreach ($result as $row) {
                            ?>
                            <tr>
                                <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="POST">
                                    <td>
                                        <?php echo $row['Route_no']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Route_start']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Route_end']; ?>
                                    </td>

                                    <input type="hidden" name="user_id" value="<?= $userID ?>" />
                                    <input type="hidden" name="pkg_id" value="<?= $packageID ?>" />
                                    <input type="hidden" name="route_id" value="<?= $row['Route_id']; ?>" />
                                    <td>
                                        <button class="btn btn-primary" type="submit" name='submit'
                                            style="background: rgb(156, 158, 254);">Select and Proceed to Pay.</button>
                                        <!--                                <script>
                                function selectRoute(routeId) {
                                    selectedRouteId = routeId; // Store the selected route_id
                                    alert("Enter your User ID"); // You can display an alert for testing purposes
                                }
                            </script>-->

                                    </td>

                                </form>
                            </tr>
                        <?php }
                        //endforeach; ?>
                    </tbody>
                </table>

            </div>

        </div>
        <div class="custom-form-container" style="margin-bottom: 1px; padding-bottom: 0px; padding-top: 30px;"></div>
    </div>



    <!-- Start: footer -->
    <?php include('includes/footer.php'); ?>
    <!-- End: footer -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>