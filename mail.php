<?php
	
	if( empty( $_POST['token'] ) ){
		echo '<span class="notice">Error!</span>';
		exit;
	}
	if( $_POST['token'] != 'FsWga4&@f6aw' ){
		echo '<span class="notice">Error!</span>';
		exit;
	}
	
	$name = $_POST['name'];
	$from = $_POST['email'];
	$phone = $_POST['phone'];
	$subject = stripslashes( nl2br( $_POST['subject'] ) );
	$message = stripslashes( nl2br( $_POST['message'] ) );
	
	$headers ="From: Form Contact <$from>\n";
	$headers.="MIME-Version: 1.0\n";
	$headers.="Content-type: text/html; charset=iso 8859-1";
	
	ob_start();
	?>
		Olá Camila!<br /><br />
		<?php echo ucfirst( $name ); ?>  Você recebeu um email de contato de RSVP de Ana Cristina e Robson
		<br /><br />
		
		Nome: <?php echo ucfirst( $name ); ?><br />
		Email: <?php echo $from; ?><br />
		Eventos: <?php echo $subject; ?><br />
        Convidados: <?php echo $phone; ?><br />
		Messagem: <br /><br />
		<?php echo $message; ?>
		<br />
		<br />
		============================================================
	<?php
	$body = ob_get_contents();
	ob_end_clean();
	
	$to = 'robsbq@gmail.com';

	$s = mail($to,$subject,$body,$headers);

	if( $s == 1 ){
		echo '<div class="success"><i class="fa fa-check-circle"></i><h3>Thank You!</h3>Your message has been sent successfully.</div>';
	}else{
		echo '<div>Your message sending failed!</div>';
	}

	
?>
