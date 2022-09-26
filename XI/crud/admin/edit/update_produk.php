<?php
include "../lib/checklogin.php";
include "../../lib/function.php";
include "../../lib/database.php";

$nama_produk = @$_POST["nama_produk"];
$deskripsi = @$_POST["deskripsi"];
$id_produk = (int)@$_POST["id_produk"];

$result = $mysqli->prepare("SELECT * FROM produk WHERE id_produk = ?");
$result->bind_param('s', $id_produk);
$result->execute();
$result = $result->get_result();
$result = $result->fetch_assoc();
$nama_gambar = $result["foto"];
if (
    !empty($result) &&
    tokenvalid("update_produk", @$_POST["token"])
) {
    $prefix=$id_produk;
    $gambar = $_FILES["gambar"];
    $target_dir = "../../assets/produk/";
    include "../../lib/upload.php";

    if (
        !empty($nama_produk) &&
        !empty($deskripsi)
    ) {
        $dt_produk = $mysqli->prepare(
            "UPDATE produk SET nama_produk = ?, deskripsi = ?, foto = ?  WHERE id_produk=?"
        );
        $dt_produk->bind_param('ssss', $nama_produk, $deskripsi, $nama_gambar, $id_produk);
        $dt_produk->execute();
    }
}

header("location: ../data/produk.php?status=$status");
