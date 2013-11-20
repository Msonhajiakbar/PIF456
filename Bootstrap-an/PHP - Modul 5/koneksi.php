<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "myweb";
$cnn = mysql_connect($host, $user,$pass);
if ($cnn) {

}
$db = mysql_select_db($database, $cnn);
if($db) {
echo '<br/>';
}
?>