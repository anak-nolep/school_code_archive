<?php
include "../../lib/database.php";
include "../../lib/function.php";

$id = (int)@$_GET["id"];
$msg = "error";
if (
    $id && //validasi int biar gak dimasukin string
    tokenvalid("hapus_user", @$_GET["token"])
) {
    unlink("../../assets/produk/" . $result["foto"]);
    $result = mysql_exec('DELETE FROM user WHERE id_user = ?', ['s', $id]);
    $msg = "berhasil";
}

header("location: user.php?&msg=$msg");
