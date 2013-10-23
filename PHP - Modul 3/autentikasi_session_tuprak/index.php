<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Autentikasi Halaman</title>
<style type="text/css">
.inner{
margin:200px auto; padding:20px; width:240px; border:3px solid #103;}
</style>
</head>
<body>
<p>
  <?php
ini_set('display_errors', 1);
define('_VALID', 1);
//include file eksternal
require_once('./auth.php');
init_login();
validate();
?>
</p>
<br/>
<h2 align="center" style="font-family:Century Gothic">ADMIN AREA</h3>
<p align="center" style="font-family:Century Gothic">Menu-menu admin ada di sini
<p align="center" style="font-family:Arial"><a href="?m=logout"><input type="submit" value="Logout" /></a></p>
<a href="?m=logout"></a>
<p align="center" style="font-family:Century Gothic">
</body>
</html>