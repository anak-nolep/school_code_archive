<?php
include "lib/checklogin.php";
session_destroy();
header('location: /pak_abidin/crud/admin/login.php');
