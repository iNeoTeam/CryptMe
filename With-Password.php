<?php
// EnCode and DeCode with Password
error_reporting(0);
if(!file_exists("CryptMe.php")){
	copy("https://raw.githubusercontent.com/iNeoTeam/CryptMe/main/CryptMe.php", "CryptMe.php");
}
include "CryptMe.php";
$crypt = new CryptMe();

$password = "TestPassword";
$forEncode = "iNeoTeam-wpass";
$forDecode = "U0M0cnpPSlNnVFFpc2UxdUZ5OVl5QT09";

// EnCode:
echo "<b>EnCode:</b> <code>".$crypt->encode($forEncode, $password)."</code>";

echo "<br><br>";

// DeCode:
echo "<b>DeCode:</b> <code>".$crypt->decode($forDecode, $password)."</code>";
?>
