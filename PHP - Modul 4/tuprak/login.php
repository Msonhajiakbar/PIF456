<?php
session_start();

$username = 'sonhaji';
$password = 'akbar';

if (isset($_POST['username'])) {

if (($_POST['username'] == $username) && ($_POST['password'] == $password)) {
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

$user = $_SESSION['username'];
$pass = $_SESSION['password'];

header ("Location: index.php");

echo " <a href='logout.php'>  Logout  </a></fieldset>";
}
else {
echo " Kesalahan saat login <br /> ";
echo " <a href='login.php'> << Back </a>";
}
}
else {
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
<title>Login | Tugas Praktikum</title>
</head>

<body>

<div id="form">
<table align="center" cellpadding="5" >
<tr> <h1 style="color:skyblue" align="center" > LOGIN | TUPRAKSON</h1> </tr>
<tr> <hr style="border:single;" align="center" width="400"/> </tr>
<form action="login.php" method="post" ">
<tr> <td style="font-family:Century Gothic"> Username </td> <td> : </td> <td> <input type="text" name="username"></td></tr>
<tr> <td style="font-family:Century Gothic"> Password </td> <td> : </td> <td> <input type="password" name="password"></td></tr>
<tr> <td colspan=3 align="right"> <input type="submit" name="Submit" value="Login"></td></tr>
</table>
</form>
</div>
</body>
</html>
<?php
}
?>