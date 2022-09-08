<?php
if (!$_POST) {
    header("location: register.php");
}

$username = $_POST['username'];
$password = $_POST['password'];
if (($password!="") & ($username!="")) {
    include "lib/koneksi.php";
    $qry_login = mysqli_query($conn, "select * from siswa where USERNAME = '" . $username . "' and PASSWORD = '" . md5($password) . "'");
    if (mysqli_num_rows($qry_login) > 0) {
        $dt_login = mysqli_fetch_array($qry_login);
        session_start();
        $_SESSION['id_siswa'] = $dt_login['ID_SISWA'];
        $_SESSION['nama_siswa'] = $dt_login['NAMA_SISWA'];
        $_SESSION['status_login'] = true;
        header("location: home.php");
    }
}
echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
