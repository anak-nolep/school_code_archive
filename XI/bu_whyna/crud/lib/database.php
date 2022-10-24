<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_buwhyna";
$mysqli = new mysqli($host, $user, $pass, $db); //Terpaksa OOP moment

if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}

/* Di singkat aja karena gw udah muak liat OOP */
function mysql_exec($command, $argument=[]){
  global $mysqli;
  $search = $mysqli->prepare($command);
  @call_user_func_array(array($search, 'bind_param'), $argument);
  $search->execute();
  return $search;
}