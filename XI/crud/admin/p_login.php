<?php
session_start();
if (!@$_SESSION['id_admin']) {
    header('location: /pak_abidin/CRUD/home/dashboard.php');
}

$username = $_POST['username'];
$password = $_POST['password'];
$token = $_POST['token'];

include "../lib/function.php";
include "../lib/database.php";

$foward = ("login.php?wrong=password");
if (
    ($username != "") &&
    ($password != "") &&
    (tokenvalid("login_admin", $token))
) {
    $password = hash('sha256', $password);
    $result = $mysqli->prepare('SELECT * FROM admin WHERE username = binary ? AND password = ?');
    $result->bind_param('ss', $username, $password);
    $result->execute();
    $result = $result->get_result();
    $result = $result->fetch_assoc();

    if (!empty($result)) {
        $_SESSION['id_admin'] = $result['id_user'];
        $_SESSION['nama'] = $result['nama'];
        $foward = ("dashboard.php");
    }
}

header("location: " . $foward);
