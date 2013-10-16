<!--Msonhajiakbar-->

<?php
// aktifkan fungsi session
session_start();
// definisi nama dan sandi
$username = 'son';
$password = 'son';
// logika jika user mengeklik tombol login
if (isset($_POST['username'])) {
// cek komponen input
if (($_POST['username'] == $username) && ($_POST['password'] == $password)) {
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

//set definisi baru
$user = $_SESSION['username'];
$pass = $_SESSION['password'];

// user telah login .
echo " <fieldset><legend>Akunmu :</legend>";
echo " <p>Username = $user </p>"; 
echo " <p>Password = $pass </p>";
// logout
echo " <a href='TUPRAK2.php'> <<< Logout </a></fieldset>";
}
// logika kesalahan
else {
echo " isikan data dengan benar :) <br /> ";
echo " <a href='TUPRAK.php'> <<< BACK </a>";
}
}
else {

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>LOGIN</title>
</head>

<body>
<fieldset>
<center>
<legend><font face="Century Gothic" size="16" color="#FF0000">LOGIN</font></legend>
<form action="TUPRAK.php" method="post" name="login" id="login">
<p><font face="Century Gothic" size="4" color="#F00001">username</font>
<input name="username" type="text" id="username">
</p>
<p><font face="Century Gothic" size="4" color="#F00001">password </font>
<input type="password" name="password" type="text" id="password">
</p>
<p>
<input type="submit" name="Submit" value="Login">
</p>
</form>
</fieldset>
</center>
</body>
</html>
<?php
}
?>