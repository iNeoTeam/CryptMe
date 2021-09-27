<?php
error_reporting(0);
include 'CryptMe.php';
$crypt = new CryptMe();

// EnCode:
echo $crypt->encode("iNeoTeam");

// DeCode:
echo $crypt->decode("UUl5K0h3aFBWM1Z4ZzRhVk0xeFJXUT09");
?>
