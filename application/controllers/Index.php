<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['username'])){
header ("location:Login.php");
}
?>
Berhasil Login, <a href="logout.php">Logout</a>