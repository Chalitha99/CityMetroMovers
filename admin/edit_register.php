<?php
include('authentication.php');
include('includes/header.php');
require "../Classes/admin.php";
require "../Classes/DBConnector.php";
use Classes\DBConnector;
use Classes\admin;
include "message.php";


?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Users</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Users</li>
    </ol>

    <div class="row">

        <div class="col=md-12">
            <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4>Edit User</h4>
                    <a href="view_register.php" class="btn btn-danger float-end">Back</a>
                </div>
                <div class="card-body">

                    <?php
                    if (isset($_GET['id'])) {
                        $user_id = $_GET['id'];
                        $users = admin::showDetails($user_id);

                            foreach ($users as $user) {
                                ?>
                                <form action="includes/editUser.inc.php" method="POST">
                                    <input type="hidden" name="id" value="<?=$user->user_id;?>">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="">First Name</label>
                                            <input type="text" name="user_fname" value="<?= $user->user_fname;?>" class="form-control">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="">Last Name</label>
                                            <input type="text" name="user_lname" value="<?= $user->user_lname;?>" class="form-control">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="">Nic</label>
                                            <input type="text" name="user_nic" value="<?= $user->user_nic;?>" class="form-control">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="">Phone</label>
                                            <input type="text" name="user_contactNo" value="<?= $user->user_contactNo;?>" class="form-control">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="">Email</label>
                                            <input type="text" name="user_email" value="<?= $user->user_email;?>" class="form-control">
                                        </di

                                        <div class="col-md-6 mb-3">

                                            <label for="">Status</label>
                                            <select name="user_status" required class="form-control">
                                                <option value="">--Select Status--</option>
                                                <option value="Active" <?= $user->user_status == 'Active' ? 'selected':'';?> >Active</option>
                                                <option value="Banned" <?= $user->user_status == 'Banned' ? 'selected':'';?>>Banned</option>
                                                
                                            </select>
                                        </div>

                                        <div class="col-md-6 mb-3">

                                            <label for="">Role</label>
                                            <select name="user_role" required class="form-control">
                                                <option value="">--Select Role--</option>
                                                <option value="admin" <?= $user->user_role == 'admin' ? 'selected':'';?> >Admin</option>
                                                <option value="user" <?= $user->user_role == 'user' ? 'selected':'';?>>User</option>

                                                <option value="moderator" <?= $user->user_role == 'moderator' ? 'selected':'';?>>Moderator</option>
                                                <option value="station_operator" <?= $user->user_role == 'station_operator' ? 'selected':'';?>>Station Operator</option>
                                                <option value="communicator" <?= $user->user_role == 'communicator' ? 'selected':'';?>>Communicator</option>

                                            </select>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <button type="submit" name="update_user" class="btn btn-primary">Update User</button>
                                        </div>


                                    </div>
                                </form>
                                <?php
                            }

                    } else {
                        ?>
                    <h4>No Record Found</h4>
                    <?php
                    }

                    ?>


                </div>
            </div>
        </div>

    </div>
</div>


<?php
include('includes/footer.php');
include('includes/scripts.php');



?>
