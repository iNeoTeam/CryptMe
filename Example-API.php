<?php
/*	Examples:

	EnCode:		cryptMe.php?method=encode&input=iNeoTeam
	DeCode:		cryptMe.php?method=decode&input=UUl5K0h3aFBWM1Z4ZzRhVk0xeFJXUT09
*/
error_reporting(0);
include 'CryptMe.php';
$crypt = new CryptMe();
if($_GET['method'] == "encode"){
	echo "Result: ".$crypt->encode($_GET['input']);
}elseif($_GET['method'] == "decode"){
	echo "Result: ".$crypt->decode($_GET['input']);
}else{
	echo "Method [".$_GET['method']."] not found.";
}
unlink("error_log");
?>
