<?php
require_once '../config/constants.php';
?>

<!doctype html>

<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login - Cursos On-Demand - Masters of Business</title>
	<meta name="description" content="Plataforma LMS dos cursos on-demand da Masters of Business.">
	<meta name="author" content="Marcos Mayer">

	<meta name="robots" content="noindex">

	<link rel="icon" href="/favicon.ico">
	<link rel="icon" href="/favicon.svg" type="image/svg+xml">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">

	<link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/estilo.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Flex:opsz,wght@8..144,100..1000&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

</head>

<body>
	<div class="master-content">
		<div class="login">
			<div class="login__logo">
				<img src="<?= BASE_URL ?>assets/images/logo-masters-of-business.svg" alt="Masters of Business">
			</div>
			<div class="login__container">
				<div class="login__title">Login</div>
				<form class="login__form" id="emailCheckForm">
					<input type="hidden" name="csrf-token" value="<?php echo $_SESSION['csrf_token']; ?>">
					<input type="hidden" name="redirect_url" value="<?php echo isset($_GET['redirect']) ? htmlspecialchars($_GET['redirect']) : ''; ?>">
					<div class="login__block">
						<div class="login__label">Meu e-mail é</div>
						<input type="email" name="email" id="email" class="login__input" required autofocus placeholder="Insira seu e-mail" />
						<div id="emailError" class="error" style="display:none;"></div>
					</div>
					<div class="login__block" id="passwordBlock" style="display: none;">
						<div class="login__label">Minha senha é</div>
						<input type="password" name="password" id="password" class="login__input" required placeholder="Digite sua senha" />
						<span class="material-symbols-outlined password-toggle" onclick="togglePasswordVisibility()">visibility</span>
					</div>
					<div class="login__functions">
						<div class="login__remember">
							<input class="login__checkbox--hide" type="checkbox" name="lembrar" id="lembrar">
							<label class="login__checkbox" for="lembrar"><span class="login__checkbox-label"> Permanecer conectado</span></label>
						</div>
						<div class="login__forgot">
							<a href="forgot_password.php">Esqueci minha senha</a>
						</div>
					</div>
					<div id="feedback"></div>
					<div class="login__send">
						<button type="button" class="login__button" id="checkEmail">Entrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php include '../components/footer.php'; ?>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<script src="../assets/scripts/firstAccess.js"></script>
	<script src="../assets/scripts/scripts.js"></script>
</body>

</html>