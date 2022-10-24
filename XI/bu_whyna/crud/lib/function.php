<?php
$salt = "|swosk"; //idk

@session_start();
function generatetoken($tokenname)
{
    $token=@$_SESSION[$tokenname];
    if (!$token) {
        $token = hash('sha256', uniqid() . $GLOBALS["salt"]);
        $_SESSION[$tokenname] = $token;
    }
    return $token;
}

function tokenvalid($tokenname, $token_sample)
{
    if ($token_sample != @$_SESSION[$tokenname]) {
        return false;
    }
    unset($_SESSION[$tokenname]);
    return true;
}
