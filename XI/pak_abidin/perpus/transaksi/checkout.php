<?php
include "../lib/checklogin.php";
include "../lib/koneksi.php";
$cart = @$_SESSION['cart'];
if (!empty($cart)) {
    $lama_pinjam = 5; //satuan hari
    $tgl_harus_kembali = date('Y-m-d', mktime(0, 0, 0, date('m'), (date('d') + $lama_pinjam), date('Y')));
    mysqli_query($conn, "insert into peminjaman_buku (ID_SISWA,TANGGAL_PINJAM,TANGGAL_KEMBALI) value('" . $_SESSION['id_siswa'] . "','" . date('Y-m-d') . "','" . $tgl_harus_kembali . "')");
    $id = mysqli_insert_id($conn);
    foreach ($cart as $key_produk => $val_produk) {
        mysqli_query($conn, "insert into detail_peminjaman_buku (ID_PEMINJAMAN_BUKU,ID_BUKU,QTY) value('" . $id . "','" . $val_produk['id_buku'] . "','" . $val_produk['qty'] . "')");
    }
    unset($_SESSION['cart']);
    echo '<script>alert("Anda berhasil meminjam buku")"</script>';
}
else {
    echo '<script>alert("Tidak ada buku yang di pinjam")</script>';
}
header('location: history.php');
