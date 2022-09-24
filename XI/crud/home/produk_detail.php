<?php
include "../lib/header.php";
include "../lib/function.php";
include "../lib/database.php";
$search = "1";
if (array_key_exists('id_produk', $_GET)) {
    $search = $_GET["id_produk"];
}

$dt_produk = $mysqli->prepare("SELECT * FROM produk WHERE id_produk = ?");
$dt_produk->bind_param('s', $search);
$dt_produk->execute();
$dt_produk = $dt_produk->get_result();
$dt_produk = $dt_produk->fetch_assoc();
?>
<div class="row" style="margin:10px;">
    <h2>Detail produk</h2>
    <div class="col-md-4">
        <img src="../assets/produk/<?= $dt_produk['foto'] ?>" class="card-img-top" width="128" height="640">
    </div>
    <div class="col-md-8">
        <form action="update/p_tambah.php" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Nama Produk</td>
                        <td><?= $dt_produk['nama_produk'] ?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td><?= $dt_produk['deskripsi'] ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Produk</td>
                        <td><input type="number" name="jumlah_produk" value="1"></td>
                    </tr>
                    <tr>
                        <input type="hidden" name="id_produk" value="<?= $dt_produk['id_produk'] ?>" />
                        <input type="hidden" name="token" value="<?= generatetoken('cart'); ?>" />
                        <td colspan="2"><input class="btn btn-success" type="submit" value="Transaksi"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
<?php
include "../lib/footer.php";
?>