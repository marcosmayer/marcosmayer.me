<?php
// Inicialize variáveis de erro
$nomeCompletoErr = $emailErr = $celularErr = $empresaErr = $mensagemErr = "";
$isValid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$address = $_POST['address'];
	if (!empty($address)) {
		die("Erro de validação.");
	}

	// Validação do reCAPTCHA v3
	$secretKey = "6Ldw9-spAAAAAMfx2lZm9IHOJZAen9gwc0qvQ3V8";
	$token = $_POST["g-recaptcha-response"];
	$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$token";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	curl_close($ch);

	$result = json_decode($result, true);
	//var_dump($result);

	if ($result["success"] && $result["score"] >= 0.5 && $result["action"] == "submit") {
		// reCAPTCHA válido, continue com o processamento do formulário

		// Função para limpar e validar os dados de entrada
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

		// Validação do celular
		if (empty($_POST["celular"])) {
			$celularErr = "Celular é obrigatório";
			$isValid = false;
		} else {
			$celular = test_input($_POST["celular"]);
			if (!preg_match("/^(\+55\s?)?(?:\((\d{2})\)|\d{2})[-.\s]?(\d{4,5}[-.\s]?\d{4})$/", $celular)) {
				$celularErr = "Formato de celular inválido";
				$isValid = false;
			}
		}

		// Validação da empresa
		if (empty($_POST["empresa"])) {
			$empresaErr = "Empresa é obrigatória";
			$isValid = false;
		} else {
			$empresa = test_input($_POST["empresa"]);
		}

		// Validação da mensagem
		if (empty($_POST["mensagem"])) {
			$mensagemErr = "Mensagem é obrigatória";
			$isValid = false;
		} else {
			$mensagem = test_input($_POST["mensagem"]);
		}

		$dataInnovationLab = test_input($_POST["dataInnovationLab"]);
		$participantes = test_input($_POST["participantes"]);

		// Se todos os campos são válidos, envie o e-mail
		if ($isValid) {
			$to = "marcos@marcosmayer.me";
			$subject = "Nova solicitação de innovation-lab";
			$body = "Nome: $nomeCompleto\nEmail: $email\nCelular: $celular\nEmpresa: $empresa\nData prevista: $dataInnovationLab\nPúblico previsto: $participantes\nMensagem: $mensagem\n";
			$headers = "From: webmaster@marcosmayer.me\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/plain; charset=UTF-8\r\n";

			if (mail($to, $subject, $body, $headers)) {
				header("Location: ../pages/innovation-lab/sucesso.php");
				exit();
			} else {
				echo "Erro ao enviar e-mail.";
			}
		}
	} else {
		echo 'Falha na verificação do reCAPTCHA, por favor tente novamente.';
	}
}
