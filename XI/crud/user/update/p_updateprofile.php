<?php
include "../../lib/checklogin.php";
include "../../lib/function.php";
include "../../lib/database.php";

$id_user = $_SESSION["id_user"];

if (
    tokenvalid("update_profile", @$_POST["token"])
) {
    $result = $mysqli->prepare("SELECT * FROM user WHERE id_user = ?");
    $result->bind_param('s', $id_user);
    $result->execute();
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

    $prefix=$id_user."_user";
    $gambar = $_FILES["gambar"];
    $target_dir = "../../assets/pfp/";
    include "../../lib/upload.php";

    //Update profile
    $dt_produk = $mysqli->prepare(
        "UPDATE `user` SET `nama`=? , `tanggal_lahir`=? , `gender`=? , `alamat`=? , `username`=? , `email`=? , `foto`=? , `password`=? WHERE id_user = ?"
    );
    $dt_produk->bind_param('sssssssss', $nama, $tanggal_lahir, $gender, $alamat, $username, $email, $nama_gambar, $password, $id_user);

    $dt_produk->execute();
}

header("location: ../dashboard.php");
