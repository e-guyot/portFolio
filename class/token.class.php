<?php 

class Token{
	public function __construct() {
       if(!session_id()) {
			session_start();
        }
    }
	function generateToken() {
		return md5(uniqid(microtime(),true).time());
	}
	function verifyToken($token) {//check if a session is started and a token is transmitted, if not return an error
			$tokensession = $this->getToken();
			return $tokensession;
			if(!isset($tokensession)) {return false;}//check if the form is sent with token in it
			if(!isset($token)) {return false;}//compare the tokens against each other if they are still the same
			if($tokensession!==$token) {return false;}return true;
	}
	function SessionStart() {
		if(!isset($_SESSION['tokenID'])){
			$_SESSION['tokenID']=$this->generateToken();
			return $_SESSION['tokenID'];
		}else{
			return $_SESSION['tokenID'];
		}
	}
	function getToken() {
		if(array_key_exists('tokenID',$_SESSION)){
			return $_SESSION['tokenID'];
		}else{
			return '';
		}
		
	}
	function SessionStop() {
		if(isset($_SESSION['tokenID'])) {unset($_SESSION['tokenID']);}
	}
}