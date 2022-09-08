<!DOCTYPE html>
<html>

<head>
    <link href="/pak_abidin/perpus/lib/bootstrap-5.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="/pak_abidin/perpus/lib/bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
    <link href="khusus/page.css" rel="stylesheet">
    <title>Perpus onlen</title>
</head>

<body>
    <div class="row" style="margin-top:50px;">
        <div class="col-md"></div>
        <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
            <form name="f" action="p_register.php" method="post">
                <h3 align="center">REGISTER Perpus Online</h3>
                Username:
                <input type="text" name="username" value="" class="form-control">
                password:
                <input type="password" name="password" class="form-control"><br>
                <center><input type="submit" name="register" class="btn btn-success" value="REGISTER" onsubmit="return validateForm()"></center>
            </form>
        </div>
        <div class="col-md"></div>
    </div>
</body>

</html>