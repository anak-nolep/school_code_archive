<?php
include "../lib/header.php";
?>
<h2>Histori Peminjaman Buku</h2>
<table class="table table-hover table-striped">
    <thead>
        <th>NO</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal harus Kembali</th>
        <th>Nama Buku</th>
        <th>Status</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php
        include "../lib/koneksi.php";
        $qry_histori = mysqli_query($conn, "select * from peminjaman_buku order by ID_PEMINJAMAN_BUKU DESC");
        $no = 0;
        while ($dt_histori = mysqli_fetch_array($qry_histori)) {
            $no++;
            //menampilkan buku yang dipinjam
            $buku_dipinjam = "<ol>";
            $qry_buku = mysqli_query($conn, "select * from  detail_peminjaman_buku join buku on buku.id_buku=detail_peminjaman_buku.id_buku where ID_PEMINJAMAN_BUKU = '" . $dt_histori['ID_PEMINJAMAN_BUKU'] . "'");
            while ($dt_buku = mysqli_fetch_array($qry_buku)) {
                $buku_dipinjam .= "<li>" . $dt_buku['NAMA_BUKU'] . "</li>";
            }
            $buku_dipinjam .= "</ol>";
            //menampilkan status sudah kembali atau belum
            $qry_cek_kembali = mysqli_query($conn, "select * from pengembalian_buku where ID_PEMINJAMAN_BUKU = '" . $dt_histori['ID_PEMINJAMAN_BUKU'] . "'");
            if (mysqli_num_rows($qry_cek_kembali) > 0) {
                $dt_kembali = mysqli_fetch_array($qry_cek_kembali);
                $denda = "denda Rp. " . $dt_kembali['DENDA'];
                $status_kembali = "<label class='alert alert-success'>Sudah kembali <br>" . $denda . "</label>";
                $button_kembali = "";
            } else {
                $status_kembali = "<label class='alert alert-danger'>Belum kembali</label>";
                $button_kembali = "<a href='kembali.php?id=" . $dt_histori['ID_PEMINJAMAN_BUKU'] . "' class='btn btn-warning'>Kembalikan</a>";
            }
        ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $dt_histori['TANGGAL_PINJAM'] ?></td>
                <td><?= $dt_histori['TANGGAL_KEMBALI'] ?></td>
                <td><?= $buku_dipinjam ?></td>
                <td><?= $status_kembali ?></td>
                <td><?= $button_kembali ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?php
include "../lib/footer.php";
?>