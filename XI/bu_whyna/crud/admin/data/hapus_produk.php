<?php
include "../../lib/database.php";
include "../../lib/function.php";

$id = (int)@$_GET["id"];
$msg = "error";
if (
    $id && //validasi int biar gak dimasukin string
    tokenvalid("hapus_produk", @$_GET["token"])
) {
    unlink("../../assets/produk/" . $result["foto"]);
    $result = mysql_exec('DELETE FROM produk WHERE id_produk = ?', ['s', $id]);
    $msg = "berhasil";
}

header("location: produk.php?&msg=$msg");
