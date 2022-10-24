<?php
if (!@$_GET["id"]){
    echo "Hayo mau ngapain";
    header("location: histori.php");
    die();
}
include "../lib/header.php";
include "../../lib/database.php";
?>
<div style="margin:15px;">
    <h2>Histori Transaksi Produk</h2>
    <?php
    $limit_show = 4;

    $search = @$_GET["search_bar"];
    $search_filter = "%$search%";
    /*
    SELECT history.id_history, total, tanggal FROM history join history_detail on (history.id_history = history_detail.id_history)
    WHERE id_user = 1 AND (nama_produk LIKE '%%' OR tanggal LIKE '%%');
    */
    $total_list = mysql_exec('SELECT COUNT(id_urutan) as total FROM history_detail
    WHERE id_history = ?', ['s', $_GET['id']]);

    $total_list = $total_list->get_result()->fetch_assoc()["total"];
    include "../../lib/search_bar.php";
    ?>
    <table class="table table-hover table-striped">
        <thead>
            <th>NO</th>
            <th>Nama produk saat dibeli</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            $result = mysql_exec('SELECT id_produk, nama_produk, jumlah FROM history_detail
            WHERE id_history = ? ORDER BY id_urutan LIMIT ?, ?', ['sss', $_GET['id'],$start, $akhir]);
            $result = $result->get_result();

            $number = 0;
            while ($dt_history = $result->fetch_assoc()) {
                $number++;
            ?>
                <tr>
                    <td><?= ($number) ?></td>
                    <td><?= $dt_history['nama_produk'] ?></td>
                    <td><?= $dt_history['jumlah'] ?></td>
                    <td><a class="btn btn-success" href="../edit/produk.php?id=<?= $dt_history['id_produk'] ?>">Detail produk</a></td>
                </tr>
            <?php
            } ?>
        </tbody>
    </table>
</div>
<?php
include "../../lib/footer.php";
?>