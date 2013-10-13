<!--Msonhajiakbar-->
<html>
<head><title>Loop for</title></head>
<body>
<?php
function greeting($j) {
echo "<br/>";
if ($j > ("00:00:00") and $j < ("10:00:00")) {
echo "Selamat Pagi";
}
elseif ($j > ("10:00:01") and $j < ("14:00:00")) {
echo "Selamat Siang";
}
elseif ($j > ("14:00:01") and $j < ("17:00:00")) {
echo "Selamat Sore";
}
elseif ($j > ("17:00:01") and $j < ("23:59:59")) {
echo "Selamat Malam";
}
else {
echo "Wrong!!";
}
}
$jam = date("H:i:s");
echo $jam;
greeting($jam);
?>
</body>
</html>