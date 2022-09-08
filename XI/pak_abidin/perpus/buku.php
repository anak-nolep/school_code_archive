<?php
include "lib/header.php";
?>
<h2>Daftar Toko Buku</h2>
<div class="row">
    <?php
    include "lib/koneksi.php";
    $qry_buku = mysqli_query($conn, "select * from buku");
    while ($dt_buku = mysqli_fetch_array($qry_buku)) {
    ?>
        <div class="col-md-3">
            <div class="card">
                <img src="assets/buku/<?= $dt_buku['FOTO'] ?>" width="128" height="384" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $dt_buku['NAMA_BUKU'] ?></h5>
                    <p class="card-text"><?= substr($dt_buku['DESKRIPSI'], 0) ?></p>
                    <a href="transaksi/pinjam_buku.php?id_buku=<?= $dt_buku['ID_BUKU'] ?>" class="btn btn-primary">Pinjam</a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<?php
include "lib/footer.php";
?>