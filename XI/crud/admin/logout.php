<?php
session_start();
session_destroy();
header('location: /pak_abidin/crud/admin/login.php');
