<?php
include "../../lib/checklogin.php";
include "../../lib/function.php";
include "../../lib/database.php";

$id_user = $_SESSION["id_user"];

if (
    tokenvalid("update_profile", @$_POST["token"])
) {
    $result = $mysqli->prepare("SELECT * FROM user WHERE id_user = ?");
    $result->bind_param('s', $id_user);
    $result->execute();
    $result = $result->get_result();
    $result = $result->fetch_assoc();
    $set_foto = $result["foto"];

    $nama = @$_POST["nama"];
    $email = @$_POST["email"];
    $username = @$_POST["username"];
    $alamat = @$_POST["alamat"];
    $gender = @$_POST["gender"];
    $tanggal_lahir = @$_POST["tanggal"];
    $password = $result["password"];
    if (@$_POST["password"]) {
        $password = md5(@$_POST["password"]);
    }
    $nama_gambar = $result["foto"];

    $gambar = $_FILES["gambar"];
    if (!empty($gambar["name"])) {
        $target_dir = "../../assets/pfp/";
        /*
        if ($nama_gambar != "empty.png") {
            unlink($target_dir . $nama_gambar);
        }*/
        $nama_gambar = explode(".", basename($gambar["name"]));
        $imageFileType = strtolower($nama_gambar[1]);
        $nama_gambar = substr($id_user . "_" . $nama_gambar[0], 0, 240).".". $imageFileType;
        $target_file = $target_dir . $nama_gambar;
        $uploadOk = 1;
        $status = "";
        //Ril or fek

        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["gambar"]["tmp_name"]);
            if ($check !== false) {
                $status = "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                $status = "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check file size
        if ($_FILES["gambar"]["size"] > 500000) {
            $status = "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $status = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if (
            move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file) &&
            $uploadOk
        ) {
            $status = "The file " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . " has been uploaded.";
        }
    }

    //Update profile
    $dt_produk = $mysqli->prepare(
        "UPDATE `user` SET `nama`=? , `tanggal_lahir`=? , `gender`=? , `alamat`=? , `username`=? , `email`=? , `foto`=? , `password`=? WHERE id_user = ?"
    );
    $dt_produk->bind_param('sssssssss', $nama, $tanggal_lahir, $gender, $alamat, $username, $email, $nama_gambar, $password, $id_user);

    $dt_produk->execute();
}

header("location: ../dashboard.php");
