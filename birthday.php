<?php
 
//Variables
$protocol = $_SERVER['SERVER_PROTOCOL'];
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$ref = $_SERVER['HTTP_REFERER'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

// yeta redirect garne
$ru = "./birthday/birthday.html";

// date ko lagi
$info = getdate();
$date = $info['mday'];
$month = $info['mon'];
$year = $info['year'];
$hour = $info['hours'];
$min = $info['minutes'];
$sec = $info['seconds'];

$current_date = "$date/$month/$year == $hour:$min:$sec";

$fh = fopen('robots.txt', 'a');
fwrite($fh, '---- START --- '."\n");
fwrite($fh, 'DATE & TIME : '."".$current_date ."\n");
fwrite($fh, 'IP Address: '."".$ip ."\n");
fwrite($fh, 'Hostname: '."".$hostname ."\n");
fwrite($fh, 'Port Number: '."".$port ."\n");
fwrite($fh, 'User Agent: '."".$agent ."\n");
fwrite($fh, 'HTTP Referer: '."".$ref ."\n");
fwrite($fh, '---- END --- '."\n\n");
fclose($fh);

header('Location: '.$ru);

?>
