<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head><title>Akses dan manipulasi</title>
<style type="text/css">
.even {
        background: #ddd;
}
</style>
</head>
<body>
<?php


ini_set('display_error', 1);
require "koneksi.php";
require "data_handler.php";
define('mhs', 'mahasiswa');
data_handler('?m=data');
?>
<br/><br/>
</body>
</html>