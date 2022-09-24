<?php
session_start();
if (empty($_SESSION['id_user'])) {
    header('location: /pak_abidin/crud/login.php');
    die();
}