<?php
		
require_once '../model/Token.php';

class TokenTest {
	
	public static function invalidEmailTest($email){
		
		$jsonObj = self::testTokenObject($email);
		
		echo 'TEST 1 <br />';
		echo 'EMAIL ADDRESS TEST<br />';
		echo 'Email is : ' . $email . '<br />';
		echo $jsonObj->message  . '<br /><br />';;
	}
	
	public static function checkToken($email){
		
		$jsonObj = self::testTokenObject($email);
		
		echo 'TEST 2 <br />';
		echo 'CHECK TOKEN<br />';
		echo 'Email is : ' . $email . '<br />';
		echo $jsonObj->message . '<br />';
		echo $jsonObj->token;
	}
	
	public static function testTokenObject($email){
		$gToken = new Token($email);
		$response = $gToken->generateToken($gToken->getEmail());
		$jsonObj = json_decode($response);
		return $jsonObj;
	}
}

TokenTest::invalidEmailTest('jo@se@example.com');
TokenTest::checkToken('john@example.com');