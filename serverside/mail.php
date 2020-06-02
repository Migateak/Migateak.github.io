<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
<?php
	error_reporting(-1);
	ini_set('display_errors', 'On');
	set_error_handler("var_dump");

	$header = array("From: from@example.com", "Reply-To: replyto@example.com", "X-Mailer: PHP/" . PHP_VERSION);
	$header = implode("\r\n", $header);

	$message = $_POST['user_message'];

	$retour = mail("coronacollec.request@gmail.com","un sujet", $message,$header);

 	// mail('coronacollec.request@gmail.com',$_POST['user_sujet'],$message,$header);

    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }
    else{
    	echo "matter mother fucker";
    } 
?>
</body>
</html>
