<?php
include "../lib/checklogin.php";
if ($_POST) {
    include "../lib/koneksi.php";

    $qry_get_buku = mysqli_query($conn, "select * from buku where id_buku = '" . $_GET['id_buku'] . "'");
    $dt_buku = mysqli_fetch_array($qry_get_buku);
    $_SESSION['cart'][] = array(
        'id_buku' => $dt_buku['ID_BUKU'],
        'nama_buku' => $dt_buku['NAMA_BUKU'],
        'qty' => $_POST['jumlah_pinjam']
    );
}
header('location: keranjang.php');
