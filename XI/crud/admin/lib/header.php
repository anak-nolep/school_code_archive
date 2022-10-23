<?php
include "checklogin.php"; 
?>
<!DOCTYPE html>
<html>
<head>
  <link href="/lib/bootstrap-5.2.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="/lib/bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
  <title>TITLE PLACEHOLDER</title>
</head>

<body style="background-color: #669BC8;">
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px;">
    <div class="container-fluid">
    <h3 class="col-md-2">Brand Placeholder</h3>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?=$root?>/admin/dashboard.php">Admin dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?=$root?>/admin/data/produk.php">Daftar Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?=$root?>/admin/data/user.php">Daftar User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?=$root?>/admin/data/history.php">Daftar Histori Pembelian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?=$root?>/admin/logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container bg-light rounded" style="margin-top:10px">
  </div>
</body>

</html>