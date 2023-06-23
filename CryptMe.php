<?php
class CryptMe{
    private $api = "https://api.ineo-team.ir/CryptMe.php";
	public function encode($input, $password = null){
		$cURL = curl_init($this->api);
		curl_setopt_array($cURL, [
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_POSTFIELDS => ['action' => "encode", 'input' => $input, 'password' => $password],
			CURLOPT_CUSTOMREQUEST => 'POST',
		]);
		$output = json_decode(curl_exec($cURL),true);
		curl_close($cURL);
		return $output['result']['output'];
	}
	public function decode($input, $password = null){
		$cURL = curl_init($this->api);
		curl_setopt_array($cURL, [
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_POSTFIELDS => ['action' => "decode", 'input' => $input, 'password' => $password],
			CURLOPT_CUSTOMREQUEST => 'POST',
		]);
		$output = json_decode(curl_exec($cURL),true);
		curl_close($cURL);
		return $output['result']['output'];
	}
}
