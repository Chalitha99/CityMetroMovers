<?php
session_start();
include "Classes/DBConnector.php";
include "Classes/packageDisplay.php";
use Classes\DBConnector;
use Classes\packageDisplay;

?>
<?php include 'admin/config/dbcon.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Package Details</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/pkg.css">
    </head>
    <body>

        <!-- Start: navbar -->
        <?php include('includes/navbar.php'); ?>
        <!-- End: navbar -->

 
        <div class="main-container">
            <div class="background-container">
                <h2>Choose your plan</h2>
                <div class="price-row">
                    <?php


                $pkg = new packageDisplay();
                $result = $pkg->getPackage();

                    foreach ($result as $row) {
                    ?>
                    <div class="price-col package">
                        <p><?php echo $row['Pkg_title']; ?></p>
                        <h3>Rs.<?php echo $row['Pkg_price']; ?><span>/month</span></h3>
                        <ul>
                            <li><?php echo $row['Pkg_description']; ?></li>
                        </ul>
                        <form method="POST" action="packageSelect.php">
                            <input type="hidden" name="id" value="<?php echo $row['Pkg_id']; ?>">
                            <input type="hidden" name="price" value="<?php echo $row['Pkg_price']; ?>">
                            <input type="hidden" name="title" value="<?php echo $row['Pkg_title']; ?>">
                            <button type="submit" name="confirmpkg">Buy now</button>
                        </form>
                    </div>
                    <?php
                    }
                    ?>


                </div>
            </div>
        </div>
        <!-- Start: footer -->
        <?php include('includes/footer.php'); ?>
        <!-- End: footer -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>