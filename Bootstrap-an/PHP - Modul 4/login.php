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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<title>Login | Tugas Praktikum</title>
</head>

<body>

<!--<div id="form">
<table align="center" cellpadding="5" >
<tr> <h1 style="color:skyblue" align="center" > LOGIN | TUPRAKSON</h1> </tr>
<tr> <hr style="border:single;" align="center" width="400"/> </tr>
<form action="login.php" method="post" ">
<tr> <td style="font-family:Century Gothic"> Username </td> <td> : </td> <td> <input type="text" name="username"></td></tr>
<tr> <td style="font-family:Century Gothic"> Password </td> <td> : </td> <td> <input type="password" name="password"></td></tr>
<tr> <td colspan=3 align="right"> <input type="submit" name="Submit" value="Login"></td></tr>
</table>
</form>
</div>-->

<!--<div class="container">
<h1 style="font-family:Century Gothic"> LOGIN</h1>
	<div class="row clearfix">
		<div class="col-md-5 column">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					 <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="username" />
					</div>
				</div>
				<div class="form-group">
					 <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="password" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						 <button type="submit" class="btn btn-default">Kusam</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>-->

<div class="container">
	<h1 style="font-family:Century Gothic"> LOGIN</h1>
	<div class="row clearfix">
		<div class="col-md-4 column">
			<form role="form" action="login.php" method="post">
				<div class="form-group">
					 <label for="exampleInputEmail1">username</label><input type="text" class="form-control" name="username" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Password</label><input type="password" class="form-control" name="password" />
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
</div>

</body>
</html>
<?php
}
?>