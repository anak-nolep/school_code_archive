<?php
session_start();
if (!@$_SESSION['id_user']) {
    header('location: /pak_abidin/CRUD/home/dashboard.php');
}
$username = @$_POST['username'];
$password = @$_POST['password'];
$token = @$_POST['token'];

include "../lib/function.php";
include "../lib/database.php";

$foward = ("login.php?wrong=password");
if (
    ($username != "") &&
    ($password != "") &&
    (tokenvalid("login", $token))
) {
    $password = hash('sha256', $password);
    $result = mysql_exec('SELECT * FROM user WHERE username = binary ? AND password = ?', ['ss', $username, $password]);
    $result = $result->get_result();
    $result = $result->fetch_assoc();

    if (!empty($result)) {
        $_SESSION['id_user'] = $result['id_user'];
        $_SESSION['nama'] = $result['nama'];
        $foward = ("dashboard.php");
    }
}

header("location: " . $foward);
