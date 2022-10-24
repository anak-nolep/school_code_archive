<?php
include "../lib/header.php";
include "../../lib/database.php";
include "../../lib/function.php";
?>
<style>
.btn-static {
  cursor: default;
}
.btn-static:active {
  -moz-box-shadow:    inset 0 0 0px white;
  -webkit-box-shadow: inset 0 0 0px white;
  box-shadow:         inset 0 0 0px white;
}
</style>
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
    $total_list = mysql_exec("SELECT COUNT(DISTINCT history.id_history) AS total FROM history
    join history_detail on (history.id_history = history_detail.id_history)
    WHERE id_user = ? AND (nama_produk LIKE ? OR tanggal LIKE ?)",
    ['sss', $_SESSION["id_user"], $search_filter, $search_filter]);

    $total_list = $total_list->get_result()->fetch_assoc()["total"];
    include "../../lib/search_bar.php";
    ?>
    <table class="table table-hover table-striped">
        <thead>
            <th>NO</th>
            <th>Transaksi List</th>
            <th>Jumlah List Produk</th>
            <th>Tanggal Transaksi</th>
            <th>Harga</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            $result = mysql_exec('SELECT DISTINCT history.id_history, total, total_harga, tanggal, status FROM history
            join history_detail on (history.id_history = history_detail.id_history)
            WHERE id_user = ? AND (nama_produk LIKE ? OR tanggal LIKE ?) LIMIT ?, ?',
            ['sssss', $_SESSION["id_user"], $search_filter, $search_filter, $start, $akhir]);
            $result = $result->get_result();

            $number = 0;
            while ($dt_history = $result->fetch_assoc()) {
                $number++;
            ?>
                <tr>
                    <td><?= ($number) ?></td>
                    <td><?php
                        $result_nama = mysql_exec('SELECT nama_produk, id_urutan FROM history_detail
                        WHERE id_history = ? LIMIT 5', ['s', $dt_history['id_history']]);
                        $result_nama=$result_nama->get_result();
                        while ($list_produk = $result_nama->fetch_assoc()) {
                            echo $list_produk['id_urutan'].". ".$list_produk['nama_produk']."<br>";
                        }
                    ?></td>
                    <td><?= $dt_history['total'] ?></td>
                    <td><?= $dt_history['tanggal'] ?></td>
                    <td><?= $dt_history['total_harga'] ?></td>
                    <td>
                        <a href="histori_detail.php?id=<?= $dt_history['id_history'] ?>"><p class="btn btn-success">Detail</p></a>
                        <?php
                            /* Pesanan -> Proses -> Antar -> Konfirmasi sampai(untuk menunggu konfirmasi user)
                            -> Sampai(variable kosong)
                            Konfirmasi sampai dan Sampai warna hijau
                            */
                            $status=$dt_history['status'];
                            $msg='<p class="btn-static btn btn-warning">Pesanan dalam status '.$status.'</p>';
                            if ($dt_history['status']=="Sampai"){
                                $msg='<a href="../update/p_konfirmasi_terima.php?id='.$dt_history['id_history'].'&token='.generatetoken("konfirmasi").'"><p class="btn btn-success">Konfirmasi produk sampai</p></a>';
                            }
                            else if ($dt_history['status']==""){
                                $msg='<p class="btn-static btn btn-success">Pesanan sudah sampai</p>';
                            }
                            echo $msg;
                        ?>
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