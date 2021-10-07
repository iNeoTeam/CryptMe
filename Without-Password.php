<?php
error_reporting(0);
if(!file_exists("CryptMe.php")){
	copy("https://raw.githubusercontent.com/iNeoTeam/CryptMe/main/CryptMe.php", "CryptMe.php");
}
include "CryptMe.php";
$crypt = new CryptMe();

$forEncode = "iNeoTeam";
$forDecode = "ZGZKYVcrVjFHSXpyczNZVWVsQ0VTdz09";

// EnCode:
echo $crypt->encode($forEncode);
// DeCode:
echo $crypt->decode($forDecode);
?>
