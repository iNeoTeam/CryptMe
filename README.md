# CryptMe Project

A Mini Class for EnCode and DeCode (Exclusive Algorithm) with Password:


## Usage

### Sample PHP Code Example:
```php
<?php
	error_reporting(0);
	if(!file_exists("CryptMe.php")){
		copy("https://raw.githubusercontent.com/iNeoTeam/CryptMe/main/CryptMe.php", "CryptMe.php");
	}
	include 'CryptMe.php';
	$crypt = new CryptMe();
	
	// EnCode:
	echo $crypt->encode("iNeoTeam");
	
	// DeCode:
	echo $crypt->decode("UUl5K0h3aFBWM1Z4ZzRhVk0xeFJXUT09");
?>
```

## Contact us: 
	• EnCode & DeCode By: @CrossXss
	• Telegram: T.me/iNeoTeam
	• WebSite: https://iNeo-Team.ir

