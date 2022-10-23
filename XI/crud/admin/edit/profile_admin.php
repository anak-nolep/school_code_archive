<?php
include "../lib/checklogin.php";
include "../../lib/function.php";
include "../../lib/database.php";

$id_user = $_SESSION["id_admin"];

if (
    tokenvalid("update_profile", @$_POST["token"])
) {
    $result = mysql_exec("SELECT * FROM admin WHERE id_user = ?",
    ['s', $id_user]);
    $result = $result->get_result();
    $result = $result->fetch_assoc();
    $set_foto = $result["foto"];

    $nama = @$_POST["nama"];
    $email = @$_POST["email"];
    $username = @$_POST["username"];
    $alamat = @$_POST["alamat"];
    $gender = @$_POST["gender"];
    $tanggal_lahir = @$_POST["tanggal"];
    $password = $result["password"];
    if (@$_POST["password"]) {
        $password = hash('sha256', @$_POST["password"]);
    }
    $nama_gambar = $result["foto"];

    $prefix=$id_user."_admin";
    $gambar = $_FILES["gambar"];
    $target_dir = "../../assets/pfp/";
    include "../../lib/upload.php";

    //Update profile
    $dt_produk = mysql_exec(
        "UPDATE `admin` SET `nama`=? , `tanggal_lahir`=? , `gender`=? , `alamat`=? , `username`=? , `email`=? , `foto`=? , `password`=? WHERE id_user = ?"
    ,['sssssssss', $nama, $tanggal_lahir, $gender, $alamat, $username, $email, $nama_gambar, $password, $id_user]);
}

header("location: ../dashboard.php");