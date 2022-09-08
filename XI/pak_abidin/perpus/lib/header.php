<!DOCTYPE html>
<html>
<?php
include "checklogin.php"; ?>

<head>
  <link href="/pak_abidin/perpus/lib/bootstrap-5.2.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="/pak_abidin/perpus/lib/bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
  <title>Perpus onlen</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px;">
    <div class="container-fluid">
      <a class="navbar-brand" href="/pak_abidin/perpus/home.php">PERPUS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/pak_abidin/perpus/home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/pak_abidin/perpus/buku.php">Buku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/pak_abidin/perpus/transaksi/keranjang.php">Keranjang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/pak_abidin/perpus/transaksi/history.php">Transaksi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/pak_abidin/perpus/logout.php">logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container bg-light rounded" style="margin-top:10px">
  </div>
</body>

</html>