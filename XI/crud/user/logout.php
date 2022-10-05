<?php
session_start();
session_destroy();
$root=dirname(str_replace($_SERVER['DOCUMENT_ROOT'],"",str_replace("\\", "/", dirname(__FILE__))));
header("location: $root/user/login.php");
