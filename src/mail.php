	<?php

	$msg = "";

	$idform = "Новая заявка";
	foreach($_POST  as $name => $key){ 

		if ($name=="name"){
			$name = "Имя: ";
		}else  if ($name=="phone"){
			$name = "Телефон: ";
		} else {
			$name = "";
			$key = "";
		}
		$msg  .= $name.$key. "<br />";
	}


	header('Content-Type: text/html; charset=utf-8'); 
	mb_internal_encoding('UTF-8');  
	$to = 'nanoasfalt@gmail.com';    
	$subject = $idform; 
	$subject = mb_encode_mimeheader($subject, "UTF-8", "Q");   
	$message =$msg;
	$headers = 'MIME-Version: 1.0' . "\r\n"; 
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 
	$headers .= 'From: <http://НаноАсфальт.рф>'; 
	mail($to, $subject, $message, $headers);   
	$rezult = "тада";
	echo $rezult;
