<?php
include "../lib/checklogin.php";
include "../../lib/function.php";
include "../../lib/database.php";

$id_user = (int)@$_POST["id"];
$nama = @$_POST["nama"];
$username = @$_POST["username"];
$password = @$_POST["password"];

$msg = "Error";

if (
    tokenvalid("update_user", @$_POST["token"]) &&
    !empty($id_user)
) {
    $result = $mysqli->prepare("SELECT * FROM user WHERE id_user = ?");
    $result->bind_param('s', $id_user);
    $result->execute();
    $result = $result->get_result();
    $result = $result->fetch_assoc();

    $checkusername = $mysqli->prepare("SELECT * FROM user WHERE username = ?");
    $checkusername->bind_param('s', $username);
    $checkusername->execute();
    $checkusername = $checkusername->get_result();
    $checkusername = $checkusername->fetch_assoc();
    if (count($checkusername) > 1){
        $msg="tidak boleh ada username yang sama";
    }

    if (empty($password)) {
        $password = $result["password"];
    } else {
        $password = md5($password);
    }

    $dt_produk = $mysqli->prepare(
        "UPDATE user SET nama = ?,username = ?, password = ?  WHERE id_user=?"
    );
    $dt_produk->bind_param('ssss', $nama, $username, $password, $id_user);
    $dt_produk->execute();
    $msg = "berhasil";
}

//header("location: ../data/user.php?msg=$msg");
