<?php
include "../../lib/function.php";
include "../../lib/database.php";

$msg = "user.php";
if (tokenvalid("tambah_user", @$_GET["token"])) {
    $username = mysql_exec("SELECT COUNT(*) FROM user");
    $username = $username->get_result();
    $username = "user_".($username->fetch_assoc()["COUNT(*)"]);

    $id_user = mysql_exec(
        "INSERT INTO " .
            "`user`(`id_user`, `nama`, `tanggal_lahir`, `gender`, `alamat`, `username`, `email`, `foto`, `password`) " .
            "VALUES (null,'Nama','Tanggal_lahir','Gender','alamat',?,'email','empty.png','')"
    , ["s",$username]);
    $id_user = $id_user->insert_id;

    $msg = "../edit/user.php?id=" . $id_user;
}

header("location: $msg");
