<?php

require_once '../model/Token.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';

$gToken = new Token($email);
$response = $gToken->generateToken($gToken->getEmail());
$jsonObj = json_decode($response);

if($action == 'getToken'){
	if($jsonObj->message != 'Success'){
		echo $jsonObj->message;
	} else {
		echo $jsonObj->token;
	}
} else {
	echo 'This is not a valid request.';
}