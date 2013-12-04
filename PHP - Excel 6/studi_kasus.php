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
    <title>Studi Kasus</title>
</head>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
<body> 

<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="">mSoninfo</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost/phpmodul5/studi_kasus.php">Studi Kasus</a></li>
      <li><a href="https://twitter.com/msonhajiakbar">@Msonhajiakbar</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="http://localhost/phpmodul5/pencarian_data.php">Pencarian Data</a></li>
          <li><a href="http://localhost/phpmodul5/limitasi_data.php">Limitasi Data</a></li>
          <li><a href="http://localhost/phpmodul5/paging_data.php">Paging data</a></li>
          <li class="divider"></li>
          <li><a href="http://localhost/phpmodul5/tuprak.php">Tuprak</a></li>
          <li class="divider"></li>
          <li><a href="https://twitter.com/msonhajiakbar"></a>@Msonhajiakbar</li>
        </ul>
      </li>
    </ul>
    <!--<form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>-->
  </div><!-- /.navbar-collapse -->
</nav>
             
<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    $rec_limit = 5;
        if(! $conn )
            {
                die('Could not connect: ' . mysql_error());
            }
       mysql_select_db('myweb');
       $sql = "SELECT count(nim) FROM mahasiswa ";
       $res = mysql_query( $sql, $conn );
       if(! $res )
                        {
                die('Could not get data: ' . mysql_error());
                        }
                        
        $row = mysql_fetch_array($res, MYSQL_NUM );
        $rec_count = $row[0];
    if( isset($_GET{'page'} ) )
                {
                        $page = $_GET{'page'} + 1;
                        $offset = $rec_limit * $page;
        }
    else
       {
                        $page = 0;
                        $offset = 0;
                }
                
        $left_rec = $rec_count - ($page * $rec_limit);
        
        $sql = "SELECT nim, nama, alamat FROM mahasiswa LIMIT $offset, $rec_limit";

        $res = mysql_query( $sql, $conn );
        if(! $res )
                {
                        die('Could not get data: ' . mysql_error());
                }
?>

<!--<table border=1 cellspacing=1 callpadding=5>
<tr>
<th width=100>NIM</th>
<th width=150>Nama</th>
<th>Alamat</th>
</tr>-->

<center><div class="container">
        <div class="row clearfix">
                <div class="col-md-5 column">
                        <h3 style="font-family:Century Gothic">Studi Kasus</h3>
<table class="table table-bordered">
<thead>
<tr>
        <th >NIM</th>
        <th >Nama</th>
        <th>Alamat</th>
</tr> </thead> 
<tbody>
             
<?php
        while($row = mysql_fetch_array($res, MYSQL_ASSOC))
        {
?>
        <tr>
                <td>
                        <?php echo $row['nim']; ?>
                </td>
                <td>
                        <?php echo $row['nama']; ?>
                </td>
                <td>
                        <?php echo $row['alamat']; ?>
                </td>
        </tr>
<?php
                     }
?>
</table>
<?php
        if( $page > 0 )
                {
            $last = $page - 2;
            echo "<a href=\"?page=$last\">Prev Records</a> |";
            echo "<a href=\"?page=$page\">Next Records</a>";
        }
     else if( $page == 0 )
        {
            echo "<a href=\"?page=$page\">Next Records</a>";
        }
        else if( $left_rec < $rec_limit )
                {
            $last = $page - 2;
            echo "<a href=\"?page=$last\">Prev Records</a>";
        }
    mysql_close($conn);
?>