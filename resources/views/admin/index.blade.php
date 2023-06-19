<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/images/nina.png" rel="shortcut icon" type="image/x-icon" />
    <title>Administrator | TheVyShop | Phần mềm quản lý</title>

    <!-- Css all -->
    <?php include TEMPLATE . LAYOUT . "css.php"; ?>
</head>

<body class="sidebar-mini hold-transition text-sm <?= (!isset($_SESSION[$loginAdmin]['active']) || $_SESSION[$loginAdmin]['active'] == false) ? 'login-page' : '' ?>">
    <!-- Loader -->
    <?php if ($template == 'index' || $template == 'user/login') include TEMPLATE . LAYOUT . "loader.php"; ?>

    <!-- Wrapper -->
    <?php if (isset($_SESSION[$loginAdmin]['active']) && ($_SESSION[$loginAdmin]['active'] == true)) { ?>
        <div class="wrapper">
            <?php
            include TEMPLATE . LAYOUT . "header.php";
            include TEMPLATE . LAYOUT . "menu.php";
            ?>
            <div class="content-wrapper">
                <?php if ($alertlogin) { ?>
                    <section class="content">
                        <div class="container-fluid">
                            <div class="alert my-alert alert-warning alert-dismissible text-sm bg-gradient-warning mt-3 mb-0">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <i class="icon fas fa-exclamation-triangle"></i> <?= $alertlogin ?>
                            </div>
                        </div>
                    </section>
                <?php } ?>
                <?php include TEMPLATE . $template . "_tpl.php"; ?>
            </div>
            <?php include TEMPLATE . LAYOUT . "footer.php"; ?>
        </div>
    <?php } else {
        include TEMPLATE . "user/login_tpl.php";
    } ?>

    <!-- Js all -->
    @include('blade_template.layout.js')
</body>

</html>