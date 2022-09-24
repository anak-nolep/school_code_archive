<?php
include "../../lib/function.php";
include "../../lib/database.php";

$msg = "user.php";
if (tokenvalid("tambah_user", @$_GET["token"])) {
    $username = $mysqli->prepare("SELECT COUNT(*) FROM user");
    $username->execute();
    $username = $username->get_result();
    $username = "user_".($username->fetch_assoc()["COUNT(*)"]);

    $id_user = $mysqli->prepare(
        "INSERT INTO " .
            "`user`(`id_user`, `nama`, `tanggal_lahir`, `gender`, `alamat`, `username`, `email`, `foto`, `password`) " .
            "VALUES (null,'Nama','Tanggal_lahir','Gender','alamat',?,'email','empty.png','')"
    );
    $id_user -> bind_param("s",$username);
    $id_user->execute();
    $id_user = $id_user->insert_id;

    $msg = "../edit/user.php?id=" . $id_user;
}

header("location: $msg");
