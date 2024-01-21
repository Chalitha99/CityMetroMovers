<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require './Classes/DBConnector.php';
use Classes\DBConnector;
use PDOException;

?>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
         <nav class="sb-topnav navbar navbar-expand " style="background-image:linear-gradient(to right, rgb(108,74,180), rgb(223, 215, 239));">
            <!-- Navbar Brand-->
            <img alt="img" src="citymetromovers-low-resolution-logo-black-on-transparent-background.png" width="160px" height="70px" class="mt-4" style="margin-left: 10px;">
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars" style="color: white;" ></i></button>
           
           
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu" style="background-image:linear-gradient(rgb(108,74,182), rgb(223, 215, 239));">
                        <div class="nav mt-4">
                            
                           
                            <a class="nav-link" href="moderatorindex.php" style="color: white;">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                           
                            
                           <a class="nav-link" href="newFeed.php" style="color: white;">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                News Editor
                            </a>
                            
                            <a class="nav-link" href="tables.php" style="color: white;">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>

                            <a class="nav-link" href="index.php" style="color: white;">
                            <div class="sb-nav-link-icon"><i class="fas fa-globe"></i></div>
                            Website
                        </a>
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        
                        <div class="card mb-4">
                           
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                System Users
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    
                                     <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>User Name</th>
                                            <th>User NIC</th>
                                            <th>Contact Number</th>
                                            <th>User email</th>
                                            <th>User Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>User ID</th>
                                            <th>User Name</th>
                                            <th>User NIC</th>
                                            <th>Contact Number</th>
                                            <th>User email</th>
                                            <th>User Status</th>                                       
                                        </tr>
                                    </tfoot>
                                    
                                    <tbody>

                                    <?php
                                       try {
                                        $dbcon =new DBConnector();
                                        $con = $dbcon->getConnection();
                                        $query = "SELECT * FROM user WHERE user_role=?";

                                        $user_role ="user";
                                        $pstmt = $con->prepare($query);
                                        $pstmt->bindValue(1, $user_role);
                                        $pstmt->execute();

                                        $rs1 = $pstmt->fetchAll(PDO::FETCH_OBJ);       
                                        
                                        foreach ($rs1 as $user){   
                                            
                                        ?>      
                                          
                                         <tr>
                                            <td><?php echo $user->user_id; ?></td>
                                            <td><?php echo $user->user_fname; ?></td>
                                            <td><?php echo $user->user_nic; ?></td>
                                            <td><?php echo $user->user_contactNo; ?></td>
                                            <td><?php echo $user->user_email; ?></td>
                                            <td><?php echo $user->user_status; ?></td>
                                        </tr>
                                       
                                      <?php
                                      
                                        }
                                       }
                                        
                                        catch (PDOException $exc){
                                            echo $exc->getMessage();
                                  
                                        }
                                      ?>
                                        
                                 </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
