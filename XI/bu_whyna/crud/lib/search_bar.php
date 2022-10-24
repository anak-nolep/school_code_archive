<?php
/*
Sebelum include code ini jangan lupa set
Mengeset variable $start dan $akhir untuk limit jumlah yang dibutuhkan
*/
//Page logic
//list page yang ada
$page = ($total_list / $limit_show);
if (is_double($page)) {
    $page = (int)$page + 1;
}

$page_next = $page;
if (!$page) {
    $page_next = 1;
}

//Jump page logic
$cat = (int)@$_GET["cat"];
$jmp = (int)@$_GET["jmp"];

$bagian = $cat;
if ($jmp) {
    $bagian = $jmp;
}

if (!$bagian) {
    $bagian = 1;
}

if ($bagian > $page) {
    $bagian = $page;
}

//return nilai start dan akhir
$start = ($bagian - 1) * $limit_show;
$akhir = $start + $limit_show;
?>

<form>
    <div class="col-md-5">
        <h2>
            <?php
                if (@$_GET["id"]){ //jika search mengunakan ID
                    echo '<input type="hidden" value="'.@$_GET['id'].'" name="id">';
                }
            ?>
            <input class="form-control" style="border-radius: 0;" name="search_bar" value="<?= htmlentities($search) ?>" placeholder="Masukan teks">
        </h2>
    </div>
    <ul class="col-auto pagination">
        <li class="page-item">
            <button name="jmp" type="submit" value=<?= $bagian - 1 ?> style="border-radius: 0;" class="page-link">&laquo;</button>
        </li>
        <li class="page-item">
            <button name="cat" type="submit" value="1" class="page-link">1</button>
        </li>
        <li class="page-item col-md-1">
            <input name="jmp" value="" class="form-control " style="border-radius: 0;"></input>
        </li>
        <li class="page-item">
            <button name="cat" type="submit" value="<?= $page_next ?>" class="page-link"><?= $page_next ?></button>
        </li>
        <li class="page-item">
            <button name="jmp" type="submit" value=<?= $bagian + 1 ?> class="page-link">&raquo;</a>
        </li>
        <li class="page-item">
            <button name="cat" type="submit" value="1" style="border-radius: 0;" class="btn btn-primary">Cari</button>
        </li>
        <li class="page-item page-link">Bagian : <?= $bagian ?> | List Produk : <?= $total_list ?></li>
    </ul>
</form>