<div style="height: 82px;">
    <nav class="navbar navbar-expand-md navigation-clean navbar-light"
         style="z-index: 2000 !important; background: rgb(99, 89, 133);height: 83px;">
        <div class="container-fluid"><a class="navbar-brand" href="#"><img
                        src="assets/img/citymetromovers-low-resolution-logo-black-on-transparent-background.png"
                        style="width: 160px;height: 70px;"></a>
            <button data-bs-toggle="collapse" class="navbar-toggler"
                    data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php"
                                            style="color: var(--bs-tertiary-bg);font-family: Verdana, Geneva, Tahoma, sans-serif
;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="route.php"
                                            style="color: var(--bs-tertiary-bg);font-family: Verdana, Geneva, Tahoma, sans-serif
;">Route</a></li>
                    <li class="nav-item"><a class="nav-link" href="about_us.php"
                                            style="color: var(--bs-tertiary-bg);font-family: Verdana, Geneva, Tahoma, sans-serif
;">About us</a></li>
                    <?php if (isset($_SESSION['auth_user'])): ?>
                        <li class="nav-item"><a class="nav-link" href="pkgdisplay.php"
                                                style="color: var(--bs-tertiary-bg);font-family: Verdana, Geneva, Tahoma, sans-serif
;">Packages</a></li>
                    <?php endif; ?>

                </ul>
            </div>
            <div>
                <?php if (isset($_SESSION['auth_user'])): ?>
                    <div class="dropdown">
                        <div class="btn-group dropstart">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                    style="background-color: rgb(175, 180, 255); color: #000; border: none; font-family: Verdana, Geneva, Tahoma, sans-serif
;">
                                <?= $_SESSION['auth_user']['user_name']; ?>
                            </button>
                            <ul class="dropdown-menu"
                                style="background-color: rgb(175, 180, 255); border: none; border-radius: 0; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-family: Verdana, Geneva, Tahoma, sans-serif
;">
                                <li><a class="dropdown-item" href="faq.php"
                                       style="color: #000; padding: 10px 20px; transition: background-color 0.3s;">FAQ |
                                        AskMe</a></li>
                                <?php if ($_SESSION['auth_role'] == "admin") { ?>
                                    <li><a class="dropdown-item" href="admin/view_register.php"
                                           style="color: #000; padding: 10px 20px; transition: background-color 0.3s;">Admin
                                            Panel</a></li>
                                <?php } ?>

                                <?php if ($_SESSION['auth_role'] == "moderator" || $_SESSION['auth_role'] == "admin") { ?>
                                    <li><a class="dropdown-item" href="moderatorindex.php"
                                           style="color: #000; padding: 10px 20px; transition: background-color 0.3s;">Company
                                            Moderator Panal</a></li>
                                <?php } ?>

                                <?php if ($_SESSION['auth_role'] == "moderator" || $_SESSION['auth_role'] == "admin" || $_SESSION['auth_role'] == "station_operator") { ?>
                                    <li><a class="dropdown-item" href="Station_master_dashbord.php"
                                           style="color: #000; padding: 10px 20px; transition: background-color 0.3s;">Station
                                            Operator Panal</a></li>
                                <?php } ?>

                                <li>
                                    <form action="allcode.php" method="POST">
                                        <button type="submit" name="logout_btn" class="dropdown-item"
                                                style="color: #000; padding: 10px 20px; transition: background-color 0.3s;">
                                            Log
                                            out
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>

                <?php else: ?>
                    <form action="allcode.php" method="POST">
                        <ul class="nav-item" style="padding: 0px;padding-top: 12px;">
                            <button class="btn btn-primary"
                                    type="submit" name="signin_btn"
                                    style="background: rgb(57, 48, 83);width: 110.22px;height: 38px;padding: 4px 12px;padding-top: 4px;font-family: Verdana, Geneva, Tahoma, sans-serif
;padding-right: 12px;margin-right: 12px;">Sign
                                in
                            </button>
                            <button class="btn btn-primary" type="submit" name="signup_btn"
                                    style="background: rgb(24, 18, 43);width: 110.22px;height: 38px;padding: 4px 12px;padding-top: 4px;font-family: Verdana, Geneva, Tahoma, sans-serif
;padding-right: 16px;">Sign
                                up
                            </button>
                        </ul>
                    </form>
                <?php endif; ?>

            </div>
        </div>
    </nav>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Verdana, Geneva, Tahoma, sans-serif
&amp;display=swap">
</div>