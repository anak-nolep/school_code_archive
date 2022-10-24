<?php
include "lib/header.php";
include "../lib/database.php";
include "../lib/function.php";

$id = $_SESSION["id_admin"];
$dt_user = mysql_exec("SELECT * FROM admin WHERE id_user = ?",['s', $id]);
$dt_user = $dt_user->get_result()->fetch_assoc();
?>
<div style="margin:20px;">
    <h2>Edit profile</h2>
    <form action="edit/profile_admin.php" method="post" class="row" enctype="multipart/form-data">
        <div class="col-md-4">
            <h5>File gambar (akan update setelah di upload) : <br><input type="file" name="gambar" /></h5>
            <img src="../assets/pfp/<?= $dt_user['foto'] ?>" width="256" height="256">
        </div>
        <div class="col-md-8">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Nama</td>
                        <td><input style="border-radius: 0;" name="nama" value="<?= $dt_user['nama'] ?>" placeholder="Masukan nama"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input style="border-radius: 0;" name="email" value="<?= $dt_user['email'] ?>" placeholder="Masukan email"></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input style="border-radius: 0;" name="username" value="<?= $dt_user['username'] ?>" placeholder="Masukan username"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><textarea name="alamat" rows="4" cols="50" placeholder="Masukan alamat"><?= $dt_user['alamat'] ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>
                            <select name="gender">
                                <option value="<?= $dt_user['gender'] ?>" selected><?= $dt_user['gender'] ?></option>
                                <option value="L">L</option>
                                <option value="P">P</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal lahir</td>
                        <td><input type="date" name="tanggal" value="<?= $dt_user['tanggal_lahir'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" /></td>
                    </tr>
                    <tr>
                        <input type="hidden" name="token" value="<?= generatetoken('update_profile'); ?>" />
                        <td colspan="2"><input class="btn btn-success" type="submit" value="Update profile"></td>
                    </tr>
                </thead>
            </table>
        </div>
    </form>
</div>
<?php
include "../lib/footer.php";
?>