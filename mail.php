<?php
// the message
$name = $_POST['name'];

// use wordwrap() if lines are longer than 70 characters
$msg = stripslashes( nl2br( $_POST['message'] ) );

// send email
mail("robsbq@gmail.com","Casamento Ana e Robson - Messagem de: ".$name, $msg);

		?>
		<script>
			alert('Mensagem enviada com sucesso.');
		</script>
<?php
	
?>
