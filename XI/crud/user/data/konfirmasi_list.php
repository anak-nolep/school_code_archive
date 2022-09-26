<?php
include "../lib/header.php";
include "../../lib/function.php";
?>
<div style="margin:15px;">
    <h2>Daftar produk di list</h2>
    <?php
    $limit_show = 4;

    $search = @$_GET["search_bar"];
    $total_list = 0;
    if (!empty(@$_SESSION['list'])) {
        foreach (@$_SESSION['list'] as $key_produk => $val_produk) {
            if (!empty(preg_grep("/$search/", @$val_produk))) {
                $total_list++;
                $tmp[] = array(
                    'id_produk' => $val_produk['id_produk'],
                    'nama_produk' => $val_produk['nama_produk'],
                    'jumlah' => $val_produk['jumlah']
                );
            }
        }
    }

    include "../../lib/search_bar.php"
    ?>
    <table class="table table-hover striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Buku</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty(@$tmp)) {
                $number = $start;
                foreach (array_slice(@$tmp, $start, $akhir) as $key_produk => $val_produk) {
                    $number++;
            ?>
                    <tr>
                        <td><?= ($number) ?></td>
                        <td><?= $val_produk['nama_produk'] ?></td>
                        <td><?= $val_produk['jumlah'] ?></td>
                        <td><a href="../update/p_hapus.php?id=<?= $key_produk ?>" class="btn btn-danger"><strong>X</strong></a></td>
                    </tr>
            <?php
                }
            } ?>
        </tbody>
    </table>
    <form name="f" action="../update/p_konfirmasi.php" method="post">
        <input type="submit" name="confirm" class="btn btn-primary mt-auto" value="Check Out" style="text-align: center;">
        <input type="hidden" name="token" value="<?= generatetoken('confirm_list'); ?>" />
    </form>
</div>
<?php
include "../../lib/footer.php";
?>