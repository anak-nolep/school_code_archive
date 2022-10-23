<?php
include "../lib/header.php";
include "../../lib/database.php";
include "../../lib/function.php";

$id = (int)@$_GET["id"];
$dt_user = mysql_exec("SELECT * FROM user WHERE id_user = ?", ['s', $id]);
$dt_user = $dt_user->get_result();
$dt_user = $dt_user->fetch_assoc();
if (empty($dt_user)) {
    header("../dashboard.php");
}
?>
<div style="margin:20px;">
    <h2>Edit user</h2>
    <form action="update_user.php" method="post" class="row" enctype="multipart/form-data">
        <div class="col-md-4">
            <img src="../../assets/pfp/<?= $dt_user['foto'] ?>" width="256" height="256">
        </div>
        <div class="col-md-8">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                        <td>Nama</td>
                        <td><input style="border-radius: 0;" name="nama" value="<?= $dt_user['nama'] ?>" placeholder="Masukan nama"></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input style="border-radius: 0;" name="username" value="<?= $dt_user['username'] ?>" placeholder="Masukan username"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password"/></td>
                    </tr>
                    <tr>
                        <input type="hidden" name="token" value="<?= generatetoken('update_user'); ?>" />
                        <td colspan="2"><input class="btn btn-success" type="submit" value="Update user"></td>
                    </tr>
                </thead>
            </table>
        </div>
    </form>
</div>
<?php
include "../../lib/footer.php";
?>