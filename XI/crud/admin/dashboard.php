<?php
include "lib/header.php";
include "../lib/database.php";

$result = mysql_exec("SELECT * FROM admin WHERE id_user = ?", ['s', $_SESSION["id_admin"]]);
$result = $result->get_result();
$result = $result->fetch_assoc();
?>
<style>
    #data {
        margin: 20px;
        margin-right: 300px;
        background-color: grey;
        border-style: solid;
    }

    #data>* {
        margin: 10px;
    }
    p {
        font-size: 125%;
    }
    img {
        border-radius: 50%;
    }
</style>
<div id="data">
    <h2>Selamat datang admin <?php echo '"' . $_SESSION['nama'] . '"'; ?> di website Brand Placeholder</h2>
    <div class="row" style="height: 300px;">
        <div class="col-md-auto">
            <img width="256" height="256" src="../assets/pfp/<?= $result["foto"] ?>">
        </div>
        <div class="col-md-auto">
            <p>Email : <?= $result["email"] ?></p>
            <p>Tanggal Lahir : <?= $result["tanggal_lahir"] ?></p>
            <p>Gender : <?= $result["gender"] ?></p>
            <p>Alamat : <?= $result["alamat"] ?></p>
            <a href="editprofile.php">Edit profile</a>
        </div>
    </div>
</div>
<?php
include "../lib/footer.php";
?>