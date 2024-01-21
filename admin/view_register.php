<?php
include('authentication.php');
include('includes/header.php');
require "../Classes/admin.php";
require "../Classes/DBConnector.php";
use Classes\DBConnector;
use Classes\admin;
include "message.php";
$users = admin::viewRegister();

?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Users</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Users</li>
    </ol>

    <div class="row">
        <div class="col-md-12">
            <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4 style="margin: 0;">Registered Users</h4>
                    <a href="add_register.php" class="btn btn-primary float-end">Add User/User role</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive"> <!-- Added a responsive wrapper -->
                        <table class="table table-bordered" style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                            <thead>
                            <tr style="background-color: #f0f0f0;">
                                <th style="padding: 10px; text-align: center;">ID</th>
                                <th style="padding: 10px; text-align: center;">First Name</th>
                                <th style="padding: 10px; text-align: center;">Last Name</th>
                                <th style="padding: 10px; text-align: center;">NIC</th>
                                <th style="padding: 10px; text-align: center;">Email</th>
                                <th style="padding: 10px; text-align: center;">Phone</th>
                                <th style="padding: 10px; text-align: center;">Status</th>
                                <th style="padding: 10px; text-align: center;">Role</th>
                                <th style="padding: 10px; text-align: center;">Edit</th>
                                <th style="padding: 10px; text-align: center;">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($users as $user) {
                                ?>
                                <tr>
                                    <td><?= $user->user_id; ?></td>
                                    <td><?= $user->user_fname; ?></td>
                                    <td><?= $user->user_lname; ?></td>
                                    <td><?= $user->user_nic; ?></td>
                                    <td><?= $user->user_email; ?></td>
                                    <td><?= $user->user_contactNo; ?></td>
                                    <td>
                                        <?php
                                        if ($user->user_status == 'Active') {
                                            echo '<span class="badge bg-success">Active</span>';
                                        } elseif ($user->user_status == 'Banned') {
                                            echo '<span class="badge bg-danger">Banned</span>';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        switch ($user->user_role) {
                                            case 'admin':
                                                echo '<span class="badge bg-primary">Admin</span>';
                                                break;
                                            case 'user':
                                                echo '<span class="badge bg-secondary">User</span>';
                                                break;
                                            case 'moderator':
                                                echo '<span class="badge bg-warning text-dark">Moderator</span>';
                                                break;
                                            case 'station_operator':
                                                echo '<span class="badge bg-info text-dark">Station Operator</span>';
                                                break;
                                            case 'communicator':
                                                echo '<span class="badge bg-info">Communicator</span>';
                                                break;
                                            default:
                                                echo '<span class="badge bg-secondary">Unknown</span>';
                                                break;
                                        }
                                        ?>
                                    </td>
                                    <td><a href="edit_register.php?id=<?= $user->user_id; ?>" class="btn btn-success btn-sm">Edit</a></td>
                                    <td>
                                        <form action="includes/editUser.inc.php" method="POST">
                                            <button type="submit" name="user_delete" value="<?= $user->user_id; ?>" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>
