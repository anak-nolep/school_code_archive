<?php
include "../lib/checklogin.php";
include "../../lib/function.php";
include "../../lib/database.php";

$nama_produk = @$_POST["nama_produk"];
$deskripsi = @$_POST["deskripsi"];
$id_produk = (int)@$_POST["id_produk"];

$result = $mysqli->prepare("SELECT * FROM produk WHERE id_produk = ?");
$result->bind_param('s', $id_produk);
$result->execute();
$result = $result->get_result();
$result = $result->fetch_assoc();
$set_foto = $result["foto"];
if (
    !empty($result) &&
    tokenvalid("update_produk", @$_POST["token"])
) {
    $gambar = $_FILES["gambar"];
    if (!empty($gambar["name"])) {
        $target_dir = "../../assets/produk/";
        $target_name = substr($id_produk."_".basename($gambar["name"]), 0, 240);
        $target_file = $target_dir . $target_name;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $status = "";
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["gambar"]["tmp_name"]);
            if ($check !== false) {
                $status = "<br>File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                $status = "<br>File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check file size
        if ($_FILES["gambar"]["size"] > 500000) {
            $status = "<br>Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $status = "<br>Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $status = "<br>Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                $status = "<br>The file " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . " has been uploaded.";
            } else {
                $status = "<br>Sorry, there was an error uploading your file.";
            }
        }
        if ($uploadOk) {
            $set_foto = $target_file;
        }
    }

    if (
        !empty($nama_produk) &&
        !empty($deskripsi)
    ) {
        $dt_produk = $mysqli->prepare(
            "UPDATE produk SET nama_produk = ?, deskripsi = ?, foto = ?  WHERE id_produk=?"
        );
        $dt_produk->bind_param('ssss', $nama_produk, $deskripsi, $set_foto, $id_produk);
        $dt_produk->execute();
    }
}

header("location: ../data/produk.php?status=$status");
