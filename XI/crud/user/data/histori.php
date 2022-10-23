<?php
include "../lib/header.php";
include "../../lib/database.php";
?>
<div style="margin:15px;">
    <h2>Histori Transaksi Produk</h2>
    <?php
    $limit_show = 4;

    $search = @$_GET["search_bar"];
    $search_filter = "%$search%";
    $total_list = mysql_exec("SELECT COUNT(*) FROM history WHERE id_pembeli = ? AND (nama_produk LIKE ? OR tanggal LIKE ?)",
    ['sss', $_SESSION["id_user"], $search_filter, $search_filter]);
    $total_list = $total_list->get_result();
    $total_list = $total_list->fetch_assoc()["COUNT(*)"];
    include "../../lib/search_bar.php"
    ?>
    <table class="table table-hover table-striped">
        <thead>
            <th>NO</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Tanggal Transaksi</th>
        </thead>
        <tbody>
            <?php
            $result = mysql_exec('SELECT * FROM history WHERE id_pembeli = ? AND (nama_produk LIKE ? OR tanggal LIKE ?) limit ?, ?',
            ['sssss', $_SESSION["id_user"], $search_filter, $search_filter, $start, $akhir]);
            $result = $result->get_result();
            $number = 0;
            while ($dt_history = $result->fetch_assoc()) {
                $number++;
            ?>
                <tr>
                    <td><?= ($number) ?></td>
                    <td><?= $dt_history['nama_produk'] ?></td>
                    <td><?= $dt_history['jumlah'] ?></td>
                    <td><?= $dt_history['tanggal'] ?></td>
                </tr>
            <?php
            } ?>
        </tbody>
    </table>
</div>
<?php
include "../../lib/footer.php";
?>