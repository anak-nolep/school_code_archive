<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_toko";
$mysqli = new mysqli($host, $user, $pass, $db); //Terpaksa OOP moment

if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}
