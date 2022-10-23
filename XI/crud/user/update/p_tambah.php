<?php
include "../lib/checklogin.php";
include "../../lib/function.php";

if (
    (int)@$_POST["id_produk"] && //validasi int biar gak dimasukin string
    (int)@$_POST["jumlah_produk"]
    && tokenvalid("cart", @$_POST["token"])
) {
    include "../../lib/database.php";
    $result = mysql_exec("SELECT * FROM produk WHERE id_produk = ?",
    ['s', $_POST["id_produk"]]);
    $result = $result->get_result();
    $result = $result->fetch_assoc();

    if (!empty($result)) {
        $_SESSION['list'][] = array(
            'id_produk' => $result['id_produk'],
            'nama_produk' => $result['nama_produk'],
            'jumlah' => $_POST['jumlah_produk']
        );
    }
    echo "berhasil";
}

header('location: ../data/konfirmasi_list.php');
