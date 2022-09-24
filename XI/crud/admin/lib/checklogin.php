<?php
session_start();
if (empty($_SESSION['id_admin'])) {
    header('location: /pak_abidin/crud/admin/login.php');
    die();
}
