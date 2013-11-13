<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Test Koneksi</title>
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
Nama<input type="text" name="nama" size=40 />
<input type="submit" value="CARI"/>
$res=my
</form>

<?php
if (isset($_GET['nama'])){
require_once './koneksi.php';

//Kata kunci pencarian
$key = $_GET['nama'];

//Variabel $sql berisi pernyataan SQL pencarian
$sql="SELECT * FROM mahasiswa
WHERE nama = '$key'";