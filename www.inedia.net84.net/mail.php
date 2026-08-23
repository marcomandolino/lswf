

     <?php
     // L'INDIRIZZO DEL DESTINATARIO DELLA MAIL
     $to = "marcomandolino@gmail.com";
     
     // IL SOGGETTO DELLA MAIL
     $subject = "Modulo proveniente da LSWF - IL LIBRO";
     
     // COSTRUZIONE DEL CORPO DEL MESSAGGIO
     $body = "Contenuto del modulo:\n\n";
     
     $body .= "DATI PERSONALI:
Nome: " . trim(stripslashes($_POST["nome"])) . "\n";
     $body .= "Cognome: " . trim(stripslashes($_POST["cognome"])) . "\n";
     $body .= "Oggetto: " . trim(stripslashes($_POST["oggetto"])) . "\n";
     $body .= "Testo: " . trim(stripslashes($_POST["testo"])) . "\n";
     $body .= "Mail: " . trim(stripslashes($_POST["mail"])) . "\n";
     
     // INTESTAZIONI SUPPLEMENTARI
     $headers = "From: Modulo utenti<INDIRIZZO-COME-SOPRA>";
     
     // INVIO DELLA MAIL
     if(@mail($to, $subject, $body, $headers)) { // SE L'INOLTRO E' ANDATO A BUON FINE...
	 echo "La mail è stata inoltrata con successo.\n"; 
 
     } else {// ALTRIMENTI...
     echo "Si sono verificati dei problemi nell'invio della mail.";
     
     }
	 header("location:http://www.inedia.net84.net/contatti_grazie.html");
	 exit;
     ?>
     