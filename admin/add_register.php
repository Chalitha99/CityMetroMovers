<?php
include('authentication.php');
include('includes/header.php');


?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Users</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Users</li>
    </ol>

    <div class="row mt-4">
        <div class="col-md-12">
            <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4 style="margin: 0;">Add Admin/User</h4>
                    <a href="view_register.php" class="btn btn-danger float-end">Back</a>
                </div>
                <div class="card-body">
                    <form action="includes/adduser.inc.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="user_fname">First Name</label>
                                <input type="text" name="user_fname" class="form-control" id="user_fname">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="user_lname">Last Name</label>
                                <input type="text" name="user_lname" class="form-control" id="user_lname">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="user_nic">Nic</label>
                                <input type="text" name="user_nic" class="form-control" id="user_nic">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="user_contactNo">Phone</label>
                                <input type="text" name="user_contactNo" class="form-control" id="user_contactNo">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="user_email">Email</label>
                                <input type="text" name="user_email" class="form-control" id="user_email">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="user_status">Status</label>
                                <select name="user_status" required class="form-control" id="user_status">
                                    <option value="">--Select Status--</option>
                                    <option value="Active">Active</option>
                                    <option value="Banned">Banned</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="user_role">Role</label>
                                <select name="user_role" required class="form-control" id="user_role">
                                    <option value="">--Select Role--</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                    <option value="moderator">Moderator</option>
                                    <option value="station_operator">Station Operator</option>
                                    <option value="communicator">Communicator</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="user_password">Password</label>
                                <input type="text" name="user_password" class="form-control" id="user_password">
                            </div>

                            <div class="col-md-12 mb-3">
                                <button type="submit" name="add_user" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include('includes/footer.php');
include('includes/scripts.php');


?>

