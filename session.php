<?php

session_start();
include_once 'dbcon.php';
$db = new Conn();
$db->getConnection();
if (!isset($_SESSION['Id']) || ($_SESSION['Id'] == '')) {
} else {
    $now = time(); 
    if ($now > $_SESSION['expire']) {
        header("location: logout.php");
        exit();
    }
}
