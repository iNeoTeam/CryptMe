<?php
// EnCode and DeCode without Password
error_reporting(0);
if(!file_exists("CryptMe.php")){
	copy("https://raw.githubusercontent.com/iNeoTeam/CryptMe/main/CryptMe.php", "CryptMe.php");
}
include "CryptMe.php";
$crypt = new CryptMe();

$forEncode = "iNeoTeam-wopass";
$forDecode = "ZGZKYVcrVjFHSXpyczNZVWVsQ0VTdz09";

// EnCode:
echo "<b>EnCode:</b> <code>".$crypt->encode($forEncode)."</code>";

echo "<br><br>";

// DeCode:
echo "<b>DeCode:</b> <code>".$crypt->decode($forDecode)."</code>";
?>
