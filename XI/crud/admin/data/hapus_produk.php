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
    $result = $mysqli->prepare('DELETE FROM produk WHERE id_produk = ?');
    $result->bind_param('s', $id);
    $result->execute();
    $msg = "berhasil";
}

header("location: produk.php?&msg=$msg");
