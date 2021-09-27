<?php
class CryptMe{
	private $api = "https://api.ineo-team.ir/CryptMe.php";
	public function encode($input){
		$cURL = curl_init($this->api);
		curl_setopt_array($cURL, [
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_POSTFIELDS => ['action' => "encode", 'input' => $input],
			CURLOPT_CUSTOMREQUEST => 'POST',
		]);
		$output = json_decode(curl_exec($cURL),true);
		$R = $output['result']['output'];
		if($R == ""){ $R = "fail"; }
		return $R;
	}
	public function decode($input){
		$cURL = curl_init($this->api);
		curl_setopt_array($cURL, [
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_POSTFIELDS => ['action' => "decode", 'input' => $input],
			CURLOPT_CUSTOMREQUEST => 'POST',
		]);
		$output = json_decode(curl_exec($cURL),true);
		$R = $output['result']['output'];
		if($R == ""){ $R = "fail"; }
		return $R;
	}
}
