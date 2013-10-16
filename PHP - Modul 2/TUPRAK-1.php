<!DOCTYPE html>
<head> <title> LOGIN </title> 
<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
</head>

<body bgcolor="#377efd">

<script language="JavaScript" type="text/javascript">

function checkuser(input) {
	re = /^\D{4,}$/;
	return re.test(input);
}

function checkpass(input) {
	re = /^\D{4,}$/;
	return re.test(input);
}

function checkform(form) {
	if(!checkuser(form.user.value)) {
	alert("Maaf, username tidak valid");
	form.user.focus();
	return false; 
	}
	
	if(!checkpass(form.pass.value)) {
	alert("Maaf, password tidak valid");
	form.pass.focus();
	return false;
	}
return true;
}
</script>

<div id="form">
<table align="center" cellpadding="5">
<tr> <h1 align="center"> LOGIN </h1> </tr>
<tr> <hr style="border:double;" align="center" width="300"/> </tr>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post" onSubmit="return checkform(this)">
<tr> <td> Username </td> <td> : </td> <td> <input type="text" name="user"></td></tr>
<tr> <td> Password </td> <td> : </td> <td> <input type="password" name="pass"></td></tr>
<tr> <td colspan=3 align="right"> <input type="submit" name ="login" value="Login"></td></tr>
</table>
</form>
</div>

<?php
if(isset($_POST["login"])) {
	$user = $_POST['user'];	
	$pass = $_POST['pass'];
	if($user == "sonhaji" && $pass == "akbar") {
		echo '<center><h2>Login berhasil. WELCOME '.$user .'</h2></center>';}
	else { echo '<center><h2> Login gagal </h2></center>';}
}
?>

</body>

</html>