<?php
$root=dirname(dirname(str_replace($_SERVER['DOCUMENT_ROOT'],"",str_replace("\\", "/", dirname(__FILE__)))));
session_start();
if (empty(@$_SESSION['id_user'])) { //kalo di set bearti dia login user
    header("location: $root/user/login.php");
    die();
}