<?php
include "../lib/checklogin.php";
include "../../lib/function.php";
include "../../lib/database.php";

$nama_produk = @$_POST["nama_produk"];
$deskripsi = @$_POST["deskripsi"];
$id_produk = (int)@$_POST["id_produk"];

$result = mysql_exec("SELECT * FROM produk WHERE id_produk = ?", ['s', $id_produk]);
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
        $dt_produk = mysql_exec(
            "UPDATE produk SET nama_produk = ?, deskripsi = ?, foto = ?  WHERE id_produk=?"
        , ['ssss', $nama_produk, $deskripsi, $nama_gambar, $id_produk]);
    }
}

header("location: ../data/produk.php?status=$status");
