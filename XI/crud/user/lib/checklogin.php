<?php
session_start();
if (empty(@$_SESSION['id_user'])) { //kalo di set bearti dia login user
    header('location: /pak_abidin/crud/user/login.php');
    die();
}