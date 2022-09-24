<?php
include "../lib/header.php";
include "../../lib/database.php";
include "../../lib/function.php";

$id = (int)@$_GET["id"];
$dt_produk = $mysqli->prepare("SELECT * FROM produk WHERE id_produk = ?");
$dt_produk->bind_param('s', $id);
$dt_produk->execute();
$dt_produk = $dt_produk->get_result();
$dt_produk = $dt_produk->fetch_assoc();
if (empty($dt_produk)) {
    header("../dashboard.php");
}
?>
<div style="margin:20px;">
    <h2>Edit produk</h2>
    <form action="update_produk.php" method="post" class="row" enctype="multipart/form-data">
        <div class="col-md-4">
            <h5>File gambar (akan update setelah di upload) : <br><input type="file" name="gambar"/></h5>
            <img src="../../assets/produk/<?= $dt_produk['foto'] ?>" class="card-img-top" width="128" height="640">
        </div>
        <div class="col-md-8">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Nama Produk</td>
                        <td><input style="border-radius: 0;" name="nama_produk" value="<?= $dt_produk['nama_produk'] ?>" placeholder="Masukan nama produk"></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td><textarea name="deskripsi" rows="4" cols="50" placeholder="Masukan deskripsi"><?= $dt_produk['deskripsi'] ?></textarea></td>
                    </tr>
                    <tr>
                        <input type="hidden" name="id_produk" value="<?= $dt_produk['id_produk'] ?>" />
                        <input type="hidden" name="token" value="<?= generatetoken('update_produk'); ?>" />
                        <td colspan="2"><input class="btn btn-success" type="submit" value="Update data"></td>
                    </tr>
                </thead>
            </table>
        </div>
    </form>
</div>
<?php
include "../../lib/footer.php";
?>