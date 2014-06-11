<?php
	$name = $_REQUEST['ime'];
	$email = $_REQUEST['email'];
	$subject = $_POST['naslov'];
	$telephone = $_POST['tel'];
	$date = $_POST['datum'];
	$message = $_REQUEST['poruka'];
	
	$to = "iznajmljivanje.batler@gmail.com";
	$email_body = "Primili ste poruku od korisnika ".$name."\n".
				"Poruka glasi:\n".$message."\n\n".
				"Broj telefona: ". $telephone."\n".
				"Datum najma je: ". $date."\n";

	mail($to,$subject,$email_body,"Odgovoriti na: \"$name\" <$email>\r\n" );
	header( "Location: kontakt.html" );
 ?>