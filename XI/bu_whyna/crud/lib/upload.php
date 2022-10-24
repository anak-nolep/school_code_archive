<?php
/* param
    $prefix=""; //file prefix
    $gambar = $_FILES["gambar"];
    $target_dir = "../../assets/produk/";
*/
if (!empty($gambar["name"])) {
        if ($nama_gambar != "empty.png") {
            @unlink($target_dir . $nama_gambar);
        }
        $nama_gambar = explode(".", basename($gambar["name"]));
        $imageFileType = strtolower($nama_gambar[1]);
        $nama_gambar = substr($prefix. "_" . $nama_gambar[0], 0, 240).".". $imageFileType;
        if (empty($target_file)){
            $target_file = $target_dir . $nama_gambar;
        }
        $uploadOk = 1;
        $status = "";
        //Ril or fek

        if (isset($_POST["submit"])) {
            $check = getimagesize($gambar["tmp_name"]);
            if ($check !== false) {
                $status = "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                $status = "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check file size
        if ($gambar["size"] > 500000) {
            $status = "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($bypass_type || ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")) {
            $status = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if (
            move_uploaded_file($gambar["tmp_name"], $target_file) &&
            $uploadOk
        ) {
            $status = "The file " . htmlspecialchars(basename($gambar["name"])) . " has been uploaded.";
        }
    }