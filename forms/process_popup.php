<?php
// Inicialize variáveis de erro
$nomeCompletoErr = $emailErr = "";
$isValid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	// Validação do nome
	if (empty($_POST["nomeCompleto"])) {
		$nomeCompletoErr = "Nome é obrigatório";
		$isValid = false;
	} else {
		$nomeCompleto = test_input($_POST["nomeCompleto"]);
		if (!preg_match("/^[a-zA-ZÀ-ú\s]+$/", $nomeCompleto)) {
			$nomeCompletoErr = "Apenas letras e espaços são permitidos";
			$isValid = false;
		}
	}

	// Validação do email
	if (empty($_POST["email"])) {
		$emailErr = "E-mail é obrigatório";
		$isValid = false;
	} else {
		$email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Formato de e-mail inválido";
			$isValid = false;
		}
	}

	// Se todos os campos são válidos, envie o e-mail
	if ($isValid) {
		$to = "marcos@marcosmayer.me";
		$subject = "Quer saber quando o livro vai chegar";
		$body = "Nome: $nomeCompleto\nEmail: $email\n";
		$headers = "From: webmaster@marcosmayer.me\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/plain; charset=UTF-8\r\n";

		if (mail($to, $subject, $body, $headers)) {
			echo 'success';
		} else {
			echo "Erro ao enviar e-mail.";
		}
	} else {
		echo "Erro de validação.";
	}
}
