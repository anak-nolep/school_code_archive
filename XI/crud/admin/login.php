<?php
include "../lib/function.php";
if (@$_SESSION["id_admin"]) {
    header('location: dashboard.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <link href="/lib/bootstrap-5.2.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Login Admin</title>
</head>

<body style="background-color: #669BC8;">
    <div class="row" style="margin: 5%">
        <div class="col-md-0"></div>
        <div class="rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:30px;max-width: 525px;">
            <?php
            if ((!empty($_GET)) && $_GET["wrong"] == "password") {
                echo '<div class="alert alert-danger" role="alert">Password salah</div>';
            }
            ?>
            <form name="f" action="p_login.php" method="post">
                <h1><?= @$_SESSION["id_admin"]?></h1>
                <h3>LOGIN Admin</h3>
                Username:
                <input type="text" name="username" value="" class="form-control">
                password:
                <input type="password" name="password" class="form-control"><br>
                <input type="submit" name="login" class="btn btn-success" value="LOGIN" style="text-align: center;">
                <input type="hidden" name="token" value="<?= generatetoken('login_admin'); ?>"/>
            </form>
            <a href="../user/login.php">User Login</a>
        </div>
        <div class="col-md-1"></div>
    </div>
</body>

</html>