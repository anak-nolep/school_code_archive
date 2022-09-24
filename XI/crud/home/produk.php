<?php
include "../lib/header.php";
include "../lib/database.php";
?>
<style>
    #card {
        width: 20rem;
        margin: 10px;
    }

    div.card>* {
        font-size: 85%;
        margin-top: 10px;
    }
</style>
<div class="row" style="margin:5px;">
    <div class="row">
        <div class="col-auto">
            <h3>Daftar produk</h3>
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
        
        include "../lib/search_bar.php"
        ?>
    </div>
    <div class="container">
        <div class="row">
            <?php
            //SELECT COUNT(*) FROM `produk`;
            //SELECT * FROM `produk` limit 0,1;
            $result = $mysqli->prepare("SELECT * FROM produk WHERE nama_produk LIKE ? OR deskripsi LIKE ? limit ?, ?");
            $result->bind_param('ssss', $search_filter, $search_filter, $start, $akhir);
            $result->execute();
            $result = $result->get_result();
            while ($dt_produk = $result->fetch_assoc()) {
            ?>
                <div class="card" id="card">
                    <img src="../assets/produk/<?= $dt_produk['foto'] ?>" class="card-img-top" width="192" height="300">
                    <div class="card-body flex-column d-flex">
                        <h5 class="card-title"><?= substr($dt_produk['nama_produk'], 0, 256) ?></h5>
                        <hr>
                        <p class="card-text"><?= substr($dt_produk['deskripsi'], 0, 256) ?></p>
                        <a href="produk_detail.php?id_produk=<?= $dt_produk['id_produk'] ?>" class="btn btn-primary mt-auto">Transaksi</a>
                    </div>

                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<?php
include "../lib/footer.php";
?>