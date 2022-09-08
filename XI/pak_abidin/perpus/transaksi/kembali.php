<?php
if($_GET['id']>-1){
    include "../lib/koneksi.php";
    $ID_PEMINJAMAN_BUKU=$_GET['id'];
    $cek_terlambat=mysqli_query($conn, "select * from peminjaman_buku where ID_PEMINJAMAN_BUKU = '".$ID_PEMINJAMAN_BUKU."' ");
    $dt_pinjam=mysqli_fetch_array($cek_terlambat);
    echo join(", ",$dt_pinjam);
    if(strtotime($dt_pinjam['TANGGAL_KEMBALI'])>=strtotime(date('Y-m-d'))){
        $DENDA=0;
    } else{
        $harga_DENDA_perhari=5000;
        $TANGGAL_KEMBALI = new DateTime();
        $tgl_harus_kembali = new DateTime($dt_pinjam['TANGGAL_KEMBALI']); 
        $selisih_hari = $TANGGAL_KEMBALI->diff($tgl_harus_kembali)->d;
        $DENDA=$selisih_hari*$harga_DENDA_perhari;
    }
    mysqli_query($conn, "insert into pengembalian_buku (ID_PEMINJAMAN_BUKU, TANGGAL_PENGEMBALIAN,DENDA) value('".$ID_PEMINJAMAN_BUKU."','".date('Y-m-d')."','".$DENDA."')");
    header('location: history.php');
}
