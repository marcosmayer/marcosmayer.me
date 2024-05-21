<?php
require_once '../config/constants.php';

if (session_status() !== PHP_SESSION_ACTIVE) @session_start();

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

require_once '../includes/classes/User.php';
require_once '../includes/classes/Database.php';

include_once '../includes/functions/sentDate.php';

$dbInstance = new Database();
$db = $dbInstance->getConnection();

$email = $_SESSION['email'] ?? '';

?>

<!doctype html>

<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Crie seu perfil - Cursos On-Demand - Masters of Business</title>
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
		<div class="profile">
			<div class="profile__logo">
				<img src="<?= BASE_URL ?>assets/images/logo-masters-of-business.svg" alt="Masters of Business">
			</div>
			<div class="profile__container">
				<div class="login__title">Cadastre-se</div>
				<form action="<?= BASE_URL ?>forms/createProfile.php" method="post" class="profile__form">
					<div class="profile__block">
						<div class="profile__label">Seu nome</div>
						<input type="text" name="name" id="name" class="profile__input" required>
					</div>
					<div class="profile__block">
						<div class="profile__label">Como quer ser chamado</div>
						<input type="text" name="apelido" id="apelido" class="profile__input" required>
					</div>
					<div class="profile__block">
						<div class="profile__label">Seu e-mail</div>
						<input type="text" name="email" id="email" class="profile__input profile__input--readonly" value="<?php echo htmlspecialchars($email); ?>" required readonly>
					</div>
					<div class="profile__block">
						<div class="profile__label">Senha</div>
						<input type="password" name="password" id="password" class="profile__input" required>
					</div>
					<button type="submit" class="login__button" id="checkEmail"><span class="button__text">Salvar&nbsp;perfil</span><span class="button__line"></span><span class="button__arrow"></span></button>
				</form>
			</div>
		</div>
	</div>
	<?php include '../components/footer.php'; ?>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<script src="<?= BASE_URL ?>assets/scripts/showImagePreview.js"></script>
	<script src="<?= BASE_URL ?>assets/scripts/scripts.js"></script>
</body>

</html>