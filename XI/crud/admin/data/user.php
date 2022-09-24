<?php
include "../lib/header.php";
include "../../lib/database.php";
include "../../lib/function.php";
?>
<div style="margin:15px;">
    <div class="row" style="margin-bottom:5px;">
        <h2 class="col-md-auto text-center">Daftar User
            <a href="tambah_user.php?token=<?= generatetoken('tambah_user'); ?>" class="col-md-auto btn btn-primary">Tambah</a>
        </h2>
    </div>
    <?php
    $limit_show = 4;

    $search = @$_GET["search_bar"];
    $search_filter = "%$search%";
    $total_list = $mysqli->prepare("SELECT COUNT(*) FROM user WHERE nama LIKE ? OR email LIKE ?");
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
            <th>Email</th>
            <th>Alamat</th>
            <th>Gender</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            $result = $mysqli->prepare('SELECT * FROM user WHERE nama LIKE ? OR email LIKE ? limit ?, ?');
            $result->bind_param('ssss', $search_filter, $search_filter, $start, $akhir);
            $result->execute();
            $result = $result->get_result();
            $number = 0;
            while ($dt_produk = $result->fetch_assoc()) {
                $number++;
            ?>
                <tr>
                    <td style="width:5%"><?= $number ?></td>
                    <td style="width:5%"><?= $dt_produk['id_user'] ?></td>
                    <td style="width:10%; text-align:center;"><img src="../../assets/pfp/<?= $dt_produk['foto'] ?>" width="128" height="128"></td>
                    <td style="width:10%"><?= $dt_produk['nama'] ?></td>
                    <td style="width:15%"><?= $dt_produk['email'] ?></td>
                    <td style="width:15%"><?= $dt_produk['alamat'] ?></td>
                    <td style="width:15%"><?= $dt_produk['gender'] ?></td>
                    <td style="width:12.5%">
                        <a href="../edit/user.php?id=<?= $dt_produk['id_user'] ?>" class="col-auto btn btn-primary">Edit</a>
                        <a href="hapus_user.php?id=<?= $dt_produk['id_user'] ?>&token=<?= generatetoken('hapus_user'); ?>" class="btn btn-primary bg-danger">Hapus</a>
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