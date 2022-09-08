<?php
include "../lib/header.php";
include "../lib/koneksi.php";
$qry_detail_buku = mysqli_query($conn, "select * from buku where ID_BUKU = '" . $_GET['id_buku'] . "'");
$dt_buku = mysqli_fetch_array($qry_detail_buku);
?>
<h2>Pinjam Buku</h2>
<div class="row">
    <div class="col-md-4">
        <img src="../assets/buku/<?= $dt_buku['FOTO'] ?>" class="card-img-top" width="128" height="640">
    </div>
    <div class="col-md-8">
        <form action="tambah_cart.php?id_buku=<?= $dt_buku['ID_BUKU'] ?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Nama Buku</td>
                        <td><?= $dt_buku['NAMA_BUKU'] ?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td><?= $dt_buku['DESKRIPSI'] ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Pinjam</td>
                        <td><input type="number" name="jumlah_pinjam" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="PINJAM"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
<?php
include "../lib/footer.php";
?>