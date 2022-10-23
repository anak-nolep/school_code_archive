<?php
include "../lib/checklogin.php";
include "../../lib/function.php";
include "../../lib/database.php";
$list = @$_SESSION['list'];
$msg = "gagal";
if (
    !empty($list) &&
    tokenvalid("confirm_list", @$_POST["token"])
) {
    foreach (@$_SESSION['list'] as $key_produk => $val_produk) {
        $dt_produk = mysql_exec(
            "INSERT INTO `history` (`id_history`, `id_pembeli`, `id_produk`,`nama_pembeli`, `nama_produk`, `jumlah`, `tanggal`) VALUES (null, ?,?,?,?,?,?)"
        , ['ssssss', $_SESSION["id_user"], $val_produk["id_produk"], $_SESSION["nama"], $val_produk["nama_produk"], $val_produk["jumlah"], date("Y-m-d")]);
        $dt_produk->close();
        //UPDATE produk SET jumlah_transaksi = jumlah_transaksi + 1 WHERE id_user=$_SESSION["id_user"];
        $dt_produk = mysql_exec(
            "UPDATE produk SET jumlah_transaksi = jumlah_transaksi + ? WHERE id_produk=?"
        , ['ss', $val_produk["jumlah"], $val_produk["id_produk"]]);
    }
    unset($_SESSION['list']);
    $msg = "berhasil";
}

header('location: ../data/histori.php?pesan=' . $msg);
