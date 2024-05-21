<?php

require_once "../includes/classes/Database.php";
require_once "../includes/classes/User.php";

session_start();

$database = new Database();
$db = $database->getConnection();
$user = new User($db);

/* if (isset($_COOKIE['auth_token'])) {
	// Tentativa de autenticação com base no token
	$token = $_COOKIE['auth_token'];
	if ($user->validateToken($token)) {
		// Se o token for válido, configure a sessão como logada
		$_SESSION['loggedin'] = true;
		$_SESSION['email'] = $user->email; // Garanta que a classe User define isso quando valida o token

		// Redirecionar para a página desejada após o login bem-sucedido
		header('Location: /index.php');
		exit;
	}
} */

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$email = $_POST['email'];
	$password = $_POST['password'];

	if ($user->login($email, $password)) {
		$_SESSION['loggedin'] = true;
		/* if (isset($_POST['lembrar'])) {
			$token = bin2hex(random_bytes(64));
			setcookie('auth_token', $token, time() + (86400 * 30), "/", ".mastersofbusiness.com.br", true, true);
			$user->saveKeepToken($email, $token);
		} */
		$_SESSION['csrf_token'] = $_SESSION['csrf_token'] ?? bin2hex(random_bytes(32));

		$redirectUrl = '../index.php';
		header('Location: ' . $redirectUrl);
		exit;
	} else {
		echo "Os dados não estão corretos.";
	}
}
