<?php
include "../lib/checklogin.php";
include "../../lib/function.php";
include "../../lib/database.php";

if (@$_GET){
    $id=$_GET["id"];
    $token=$_GET["token"];
} else if (@$_POST){
    $id=$_POST["id"];
    $token=$_POST["token"];

    $bypass_type=true;
    $target_dir = "../../assets/bukti/";
    $gambar = $_FILES["gambar"];
    $prefix="";
    $nama_gambar = "";
    $target_file = $target_dir . $id;
}

if (
    $id && $token &&
    tokenvalid("konfirmasi", @$token)
) {
    $status=mysql_exec("SELECT status FROM history WHERE id_history=? LIMIT 1", ["s", $id]);
    $status=$status->get_result()->fetch_all()[0][0];
    if ($status=="Pesanan"){
        mysql_exec("UPDATE `history` SET `status`='Proses' WHERE id_history=?", ["s", $id]);
    }
    else if ($status=="Proses"){
        include "../../lib/upload.php";
        mysql_exec("UPDATE `history` SET `status`='Sampai' WHERE id_history=?", ["s", $id]);
    }
}

header("location: ../data/history.php");