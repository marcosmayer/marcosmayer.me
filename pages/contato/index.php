<!doctype html>
<html lang="pt-br">

<?php
$pageTitle = 'Entre em contato';
$pageDescription = 'Entre em contato comigo para falar sobre palestras, workshops e o Innovation Lab. Temas como criatividade e inovação de um jeito que você nunca viu.';
include '../../components/head.php';
?>

<body>
	<?php include '../../components/nav.php'; ?>

	<?php include '../../forms/contato.php'; ?>
	<?php include '../../components/footer.php'; ?>
	<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?render=6Ldw9-spAAAAADQ6Ze5kZlVVGI6PE6H3jc_xJA1O"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"></script>
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
	<script>
		grecaptcha.ready(function() {
			grecaptcha.execute('6Ldw9-spAAAAADQ6Ze5kZlVVGI6PE6H3jc_xJA1O', {
				action: 'submit'
			}).then(function(token) {
				// Adicione o token ao seu formulário
				var input = document.createElement('input');
				input.setAttribute('type', 'hidden');
				input.setAttribute('name', 'g-recaptcha-response');
				input.setAttribute('value', token);
				document.getElementById('contato').appendChild(input);
			});
		});
	</script>
	<script src="/assets/scripts/formValidationContato.js"></script>
	<script src="/assets/scripts/scripts.js"></script>
	<script src="/assets/scripts/masks.js"></script>
</body>

</html>