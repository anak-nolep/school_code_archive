<?php
$salt = "|swosk"; //idk

@session_start();
function generatetoken($tokenname)
{
    $token = isset($_SESSION[$tokenname]) ? $_SESSION[$tokenname] : "";
    if (!$token) {
        $token = hash('sha256', uniqid() . $GLOBALS["salt"]);
        $_SESSION[$tokenname] = $token;
    }
    return $token;
}

function tokenvalid($tokenname, $token_sample)
{
    $token = isset($_SESSION[$tokenname]) ? $_SESSION[$tokenname] : "";
    if ($token_sample != $token) {
        return false;
    }
    unset($_SESSION[$tokenname]);
    return true;
}
