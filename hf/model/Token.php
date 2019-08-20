<?php

/**
 * This class generates Token object. It has one method which generates a token.
 */
class Token {
	
	/**
	 * @var
	 */
	private $email = null;
	private $token = null;
	
	public function __construct($email){
		$this->email = $email;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	/**
	 * This method generates token.
	 * 
	 * @param string email
	 * @return string json
	 * 
	 */
	public function generateToken($email){
		if(empty($email)){
			return json_encode(array('message'=>'Error. Enter valid email address.', 'email'=>$email, 'token'=>''));
		}else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$token = base64_encode(random_bytes(64));
			return json_encode(array('message'=>'Success', 'email'=>$email, 'token'=>$token));
		} else {
			return json_encode(array('message'=>'Error. This is not a valid email address.', 'email'=>$email, 'token'=>''));
		}
	}
}