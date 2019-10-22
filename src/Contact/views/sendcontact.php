<?php
	$doc_ROOT = 'DOCUMENT_ROOT';
	include_once($_SERVER[$doc_ROOT].'/portFolio_GUYOT/src/Contact/views/class.pdoContact.inc.php');
$pdo = PdoContact::getPdoContact();
	if(isset($_POST) && is_array($_POST) ){
		$nom = $_POST['contact_nom'];
		$email = $_POST['contact_email'];
		$comment = $_POST['contact_comment'];

		$pdo->newContact($nom, $email, $comment);

		$msg=1;
	
	}else{
		$msg=0;
	}

	header('Location: /portFolio_GUYOT/ContactMe/'.$msg);
?>