<?php
session_start();
$root=dirname(dirname(str_replace($_SERVER['DOCUMENT_ROOT'],"",str_replace("\\", "/", dirname(__FILE__)))));
if (empty(@$_SESSION['id_admin'])) { //kalo di set bearti dia admin user
    header("location: $root/admin/login.php");
    die();
}
