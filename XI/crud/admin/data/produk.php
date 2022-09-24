<?php
include "../lib/header.php";
include "../../lib/database.php";
include "../../lib/function.php";
?>
<div style="margin:15px;">
    <div class="row" style="margin-bottom:5px;">
        <h2 class="col-md-auto text-center">Daftar Produk
            <a href="tambah_produk.php?token=<?= generatetoken('tambah_produk'); ?>" class="col-md-auto btn btn-primary">Tambah</a>
        </h2>
    </div>
    <?php
    $limit_show = 4;

    $search = @$_GET["search_bar"];
    $search_filter = "%$search%";
    $total_list = $mysqli->prepare("SELECT COUNT(*) FROM produk WHERE nama_produk LIKE ? OR deskripsi LIKE ?");
    $total_list->bind_param('ss', $search_filter, $search_filter);
    $total_list->execute();
    $total_list = $total_list->get_result();
    $total_list = $total_list->fetch_assoc()["COUNT(*)"];
    include "../../lib/search_bar.php"
    ?>
    <table class="table table-hover table-bordered">
        <thead>
            <th>NO</th>
            <th>ID</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Total transaksi</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            $result = $mysqli->prepare('SELECT * FROM produk WHERE nama_produk LIKE ? OR deskripsi LIKE ? limit ?, ?');
            $result->bind_param('ssss', $search_filter, $search_filter, $start, $akhir);
            $result->execute();
            $result = $result->get_result();
            $number = 0;
            while ($dt_produk = $result->fetch_assoc()) {
                $number++;
            ?>
                <tr>
                    <td><?= $number ?></td>
                    <td><?= $dt_produk['id_produk'] ?></td>
                    <td><img src="../../assets/produk/<?= $dt_produk['foto'] ?>" width="192" height="300"></td>
                    <td style="width:15%"><?= $dt_produk['nama_produk'] ?></td>
                    <td style="width:45%"><?= $dt_produk['deskripsi'] ?></td>
                    <td style="width:5%"><?= $dt_produk['jumlah_transaksi'] ?></td>
                    <td style="width:12.5%">
                        <a href="../edit/produk.php?id=<?= $dt_produk['id_produk'] ?>" class="col-auto btn btn-primary">Edit</a>
                        <a href="hapus_produk.php?id=<?= $dt_produk['id_produk'] ?>&token=<?= generatetoken('hapus_produk'); ?>" class="btn btn-primary bg-danger">Hapus</a>
                    </td>
                </tr>
            <?php
            } ?>
        </tbody>
    </table>
</div>
<?php
include "../../lib/footer.php";
?>