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
    $result = mysql_exec("SELECT * FROM user WHERE id_user = ?", ['s', $id_user]);
    $result = $result->get_result();
    $result = $result->fetch_assoc();

    $checkusername = mysql_exec("SELECT * FROM user WHERE username = ?"
    , ['s', $username]);
    $checkusername = $checkusername->get_result();
    $checkusername = $checkusername->fetch_assoc();
    if (count($checkusername) > 1){
        $msg="tidak boleh ada username yang sama";
    }

    if (empty($password)) {
        $password = $result["password"];
    } else {
        $password = hash('sha256', $password);
    }

    $dt_produk = mysql_exec(
        "UPDATE user SET nama = ?,username = ?, password = ?  WHERE id_user=?"
    , ['ssss', $nama, $username, $password, $id_user]);
    $msg = "berhasil";
}

//header("location: ../data/user.php?msg=$msg");
