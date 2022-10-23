<?php
include "../../lib/function.php";
include "../../lib/database.php";

$msg="produk.php";
if (tokenvalid("tambah_produk", @$_GET["token"])) {
    $id_produk = mysql_exec(
        "INSERT INTO `produk`(`id_produk`, `nama_produk`, `deskripsi`, `jumlah_transaksi`, `foto`) VALUES (null,'','',0,'empty.png')"
    );
    $id_produk=$id_produk->insert_id;

    $msg="../edit/produk.php?id=".$id_produk;
}

header("location: $msg");