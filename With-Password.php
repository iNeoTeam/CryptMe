<?php
error_reporting(0);
if(!file_exists("CryptMe.php")){
	copy("https://raw.githubusercontent.com/iNeoTeam/CryptMe/main/CryptMe.php", "CryptMe.php");
}
include "CryptMe.php";
$crypt = new CryptMe();

$password = "TestPassword";
$forEncode = "iNeoTeam";
$forDecode = "U0M0cnpPSlNnVFFpc2UxdUZ5OVl5QT09";

// EnCode:
echo $crypt->encode($forEncode, $password);
// DeCode:
echo $crypt->decode($forDecode, $password);
?>
