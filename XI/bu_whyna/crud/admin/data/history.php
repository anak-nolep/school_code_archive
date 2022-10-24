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
        -moz-box-shadow: inset 0 0 0px white;
        -webkit-box-shadow: inset 0 0 0px white;
        box-shadow: inset 0 0 0px white;
    }

    .file, .file:hover {
        background: grey;
    }
</style>
</style>
<div style="margin:15px;">
    <h2>Histori Transaksi Produk</h2>
    <p>"Anda tidak bisa merubah sejarah masa lalu, tapi anda bisa menulis sejarah masa depan"
        <!--Anjay-->
        <br>- GOLOK_KU
    </p>
    <?php
    $limit_show = 4;

    $search = @$_GET["search_bar"];
    $search_filter = "%$search%";
    /*
    SELECT history.id_history, total, tanggal FROM history join history_detail on (history.id_history = history_detail.id_history)
    WHERE id_user = 1 AND (nama_produk LIKE '%%' OR tanggal LIKE '%%');
    */
    $total_list = mysql_exec(
        "SELECT COUNT(DISTINCT history.id_history) AS total FROM history
    join history_detail on (history.id_history = history_detail.id_history)
    WHERE (nama_produk LIKE ? OR tanggal LIKE ?)",
        ['ss', $search_filter, $search_filter]
    );

    $total_list = $total_list->get_result()->fetch_assoc()["total"];
    include "../../lib/search_bar.php";
    ?>
    <table class="table table-hover table-striped">
        <thead>
            <th>NO</th>
            <th>Pembeli</th>
            <th>Transaksi List</th>
            <th>Jumlah List Produk</th>
            <th>Tanggal Transaksi</th>
            <th width="30%">Aksi</th>
        </thead>
        <tbody>
            <?php
            $result = mysql_exec(
                'SELECT DISTINCT user.username, history.id_history, total, tanggal, status FROM history
                JOIN history_detail on (history.id_history = history_detail.id_history)
                JOIN user on (user.id_user = history.id_user)
            WHERE (nama_produk LIKE ? OR tanggal LIKE ?) LIMIT ?, ?',
                ['ssss', $search_filter, $search_filter, $start, $akhir]
            );
            $result = $result->get_result();

            $number = 0;
            while ($dt_history = $result->fetch_assoc()) {
                $number++;
            ?>
                <tr>
                    <td><?= $number ?></td>
                    <td><?= $dt_history['username'] ?></td>
                    <td><?php
                        $result_nama = mysql_exec('SELECT nama_produk, id_urutan FROM history_detail
                        WHERE id_history = ? LIMIT 5', ['s', $dt_history['id_history']]);
                        $result_nama = $result_nama->get_result();
                        while ($list_produk = $result_nama->fetch_assoc()) {
                            echo $list_produk['id_urutan'] . ". " . $list_produk['nama_produk'] . "<br>";
                        }
                        ?></td>
                    <td><?= $dt_history['total'] ?></td>
                    <td><?= $dt_history['tanggal'] ?></td>
                    <td>
                        <a class="jarak" href="histori_detail.php?id=<?= $dt_history['id_history'] ?>">
                            <p class="btn btn-success col-md-11">Detail</p>
                        </a>
                        <?php
                        $status = $dt_history['status'];
                        if (in_array($status, ["Sampai", ""])) {
                            if ($status == "Sampai") {
                                $msg = 'Menunggu konfirmasi user';
                            } else if ($status == "") {
                                $msg = 'Pesanan sudah sampai';
                            }
                            $msg = '<p class="btn btn-static btn-success col-md-11">' . $msg . '</p>';
                        }

                        if ($status == "Pesanan") {
                            $msg = '
                            <a href="../edit/update_konfirmasi.php?id=' . $dt_history['id_history'] . '&token=' . generatetoken("konfirmasi") . '">
                                <p class="btn btn-warning col-md-11">Terima pesanan</p>
                            </a>';
                        } else if ($status == "Proses") {
                            $msg = '
                            <form action="../edit/update_konfirmasi.php" enctype="multipart/form-data" method="post">
                                <input type="hidden" name="id" value="' . $dt_history['id_history'] . '" />
                                <input type="hidden" name="token" value="' . generatetoken('konfirmasi') . '" />
                                <input class="btn col-md-11 file" type="file" name="gambar" style="margin-bottom:17.5px;"/>
                                <input class="btn btn-success col-md-11" type="submit" value="Kirim bukti">
                            </form>';
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