<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 

<head> 
	<title>LOGIN</title>
<style type="text/css">

</style>	
</head>

<body bgcolor="green" onLoad="document.formlogin.user.focus();">
<form name="formlogin" align="center" action="<?php $_SERVER['php_self'];?>" method="post" onsubmit="return cek(this)">
<div id="kotak">
<h1 align="center">LOGIN</h1>
<hr width="270px" color="black">
<br/>
<table border=0 align="center">
<tr>
<td>username :</td>
</tr>
<tr>
<td><input name="user" onKeyPress="return cekHuruf(event)" type="text" value="" autocomplete="off"/>
</td>
</tr>
<td>password :</td>
</tr>
<tr>
<td><input name="password" onKeyPress="return cekHuruf(event)" type="password" value=""/>
</td>
</tr>  
<tr>
<td align="center" height="50px">
<input type="submit" name="ok" value="LOGIN">
</td>
</tr>
</table>
</div>
</form>

<script language="JavaScript" type="text/javascript">
function cek(){
    if(formlogin.user.value == ""){
        alert('Ketikkan username');
        return false;
    }
    else if(formlogin.password.value==""){    
        alert('Ketikkan Password !');
        return false;
    }    
return true;
}
function cekHuruf(e){
    e = (e) ? e : window.event
    var charCode = (e.which) ? e.which : e.keyCode
    if ((charCode > 31 && charCode < 65) || (charCode > 90 && charCode < 97) || charCode > 122) {
        alert('username dan password harus Huruf !');
        return false;
    }
    return true;
}
</script>

<?php
if(is_string($_POST['user']) AND ($_POST['password'])){    
    if (($_POST['user']=='son')AND($_POST['password']=='haji')){
        echo 'Anda berhasil Login <br/>';
        echo 'Selamat datang ' . $_POST['user'] ;
        require_once './admin.php';
        exit();
    }
    else{
        echo "<script>alert ('username atau password salah !');</script>";
    }
}
?>
</body>
</html>