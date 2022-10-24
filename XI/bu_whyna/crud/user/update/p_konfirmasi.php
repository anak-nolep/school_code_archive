<?php
include "../lib/checklogin.php";
include "../../lib/function.php";
include "../../lib/database.php";
$list = @$_SESSION['list'];
if (
    !empty($list) &&
    tokenvalid("confirm_list", @$_POST["token"])
) {
    $waktu=substr(date("Y-m-d H:i:s.U"), 0, -4); //tahun, bulan, hari, jam, menit, detik, ms
    $total_harga=0;
    $total=0;
    foreach (@$_SESSION['list'] as $key_produk => $val_produk){
        $total+=$val_produk["jumlah"];
        $total_harga+=$val_produk["jumlah"]*$val_produk["harga"];
    }
    $id = mysql_exec(
        "INSERT INTO `history`(`id_history`, `id_user`, `total`, `tanggal`, `total_harga`, `status`) VALUES (null,?,?,?,?,'Pesanan')"
    , ["ssss", $_SESSION["id_user"], $total, $waktu, $total_harga]);

    $id=$id->insert_id;
    $number=0;

    foreach (@$_SESSION['list'] as $key_produk => $val_produk) {
        $number+=1;
        //INSERT INTO `history_detail`(`id_history`, `id_urutan`, `id_produk`, `nama_produk`, `jumlah`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')
        $dt_produk = mysql_exec(
            "INSERT INTO `history_detail`(`id_history`, `id_urutan`, `id_produk`, `nama_produk`, `jumlah`) VALUES (?,?,?,?,?)"
        , ['sssss', $id, $number, $val_produk["id_produk"], $val_produk["nama_produk"], $val_produk["jumlah"]]);
        $dt_produk->close();
        
        //UPDATE produk SET jumlah_transaksi = jumlah_transaksi + 1 WHERE id_user=$_SESSION["id_user"];
        $dt_produk = mysql_exec(
            "UPDATE produk SET jumlah_transaksi = jumlah_transaksi + ? WHERE id_produk=?"
        , ['ss', $val_produk["jumlah"], $val_produk["id_produk"]]);
    }
    unset($_SESSION['list']);
    $msg = "berhasil";
}

header('location: ../data/histori.php');
