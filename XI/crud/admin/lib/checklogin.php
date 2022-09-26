<?php
session_start();
if (empty(@$_SESSION['id_admin'])) { //kalo di set bearti dia admin user
    header('location: /pak_abidin/crud/admin/login.php');
    die();
}
