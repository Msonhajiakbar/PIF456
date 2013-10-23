<!--
Msonhajiakbar ! 110533430512
-->

<?php
defined('_VALID') or die ('not allowed');
//Pemanggilan session
session_start();
function init_login(){
    //Simulasi data account nama dan password
    $nama = 'son';
    $pass = 'son';  

    if (isset($_POST['nama']) && isset ($_POST['pass'])){
        $n = trim($_POST['nama']);
        $p = trim($_POST['pass']);

        if(($n===$nama) && ($p ===$pass)){          

            if(!isset($_SESSION['nlogin']) || !isset($_SESSION['time'])){
                $_SESSION['nlogin'] = $n;
                $_SESSION['time'] = time();
            } 
            ?>
            <script type="text/javascript">
            document.location.href="./";
            </script>
            <?php
            } 
            else {
                echo "Invalid username atau password";
                return false;
            }
        }
    }

function validate(){
    if(!isset($_SESSION['nlogin']) || !isset($_SESSION['time'])){?>
            <style type="text/css">
<!--
.style1 {color: #0000000}
-->
            </style>
            
    <div class="inner">
    <form action="" method="post">
    <table border=0 cellpadding=2>
    <tr>
            <td colspan="2" bgcolor="orange"><div align="center" class="style1" style="font-family:Century Gothic"><h1>LOGIN </h1></div></td>
      </tr>
	<td></td>
        <tr>
            <td style="font-family:Century Gothic">username</td>
            <td><input type="text" name="nama" /></td>
        </tr>
        <tr>
            <td style="font-family:Century Gothic">password</td>
            <td><input type="password" name="pass" /></td>
        </tr>
        <tr>
            <td></td>
            <td><center><input type="submit" value="                Login           " /></td>
        </tr>
        <tr>
            
      </tr>
    </table>
    </form>
    </div>

    <?php
    exit;
    }
    if(isset($_GET['m']) && $_GET['m'] == 'logout'){
    //hapus session
    if(isset($_SESSION['nlogin'])){
        unset($_SESSION['nlogin']);
        }
    if(isset($_SESSION['time'])){
        unset($_SESSION['time']);
        }
    //redireksi halaman
    ?>
    <script type="text/javascript">
    document.location.href="./";
    </script>
    <?php
    }
}
?>