<?php
include "../lib/checklogin.php";
include "../../lib/function.php";
include "../../lib/database.php";

if (
    @$_GET['id'] &&
    tokenvalid("konfirmasi", @$_GET["token"])
) {
    $status=mysql_exec("SELECT status FROM history WHERE id_history=? LIMIT 1", ["s", $_GET['id']]);
    $status=$status->get_result()->fetch_all()[0][0];
    if ($status=="Sampai"){
        mysql_exec("UPDATE `history` SET `status`='' WHERE id_history=?", ["s", $_GET["id"]]);
        //duit berkurang ?
    }
}

header("location: ../data/histori.php");