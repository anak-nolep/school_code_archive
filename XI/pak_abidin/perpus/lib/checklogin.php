<?php
  session_start();
  if (!($_SESSION['status_login'])) {
    header('location: /pak_abidin/perpus/login.php');
  }
