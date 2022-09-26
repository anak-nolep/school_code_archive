<?php
include "../../lib/checklogin.php";
include "../../lib/function.php";

if (!empty(@$_SESSION["list"][(int)@$_GET["id"]])) {
    unset($_SESSION['list'][$_GET['id']]);
}

header('location: ../data/konfirmasi_list.php');
