<?php
	$doc_ROOT = 'DOCUMENT_ROOT';
	include_once($_SERVER[$doc_ROOT].'/portFolio_GUYOT/class/token.class.php');
	$token = new Token;
	var_dump($token->getToken());

	if(isset($_POST) && is_array($_POST) && isset($_POST['_csrf_token']) && $token->verifyToken($token)){
		//Email information
		/*$admin_email = "alexmonti@hotmail.fr";
		$email =  "alexmonti@hotmail.fr";
		$subject = 'My Subject';
		$comment = 'test';

		//send email
		mail($admin_email, $subject, $comment, 'From: '. $email);

		//Email response
		*/
		$msg=1;
	}else{
		$msg=0;
	}

	$token->SessionStop();	
	header('Location: /portFolio_GUYOT/ContactMe/'.$msg);
?>