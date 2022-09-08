<?php
include "../lib/checklogin.php";
unset($_SESSION['cart'][$_GET['id']]);
header('location: keranjang.php');
