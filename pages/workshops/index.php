<!doctype html>
<html lang="pt-br">

<?php
$pageTitle = 'Workshops | Marcos Mayer';
$pageDescription = 'Workshops são oficinas. E o que a gente faz em uma oficina? Conversa sobre como as coisas podem ser feitas? Não! A gente faz! A gente coloca a mão na massa! A gente experimenta! A gente erra! A gente acerta! A gente aprende! A gente se diverte! A gente se transforma!';
include '../../components/head.php';
?>

<body>
	<?php include '../../components/nav.php'; ?>
	<div class="f-bg-img-r-ttk-txt f-bg-img-r-ttk-txt--workshops">
		<div class="f-bg-img-r-ttk-txt__text f-bg-img-r-ttk-txt__text--workshops">
			<h1>Workshop é uma oficina — O que a gente faz em uma oficina?</h1>
			<p>Pouca teoria e muito engajamento. É assim que um workshop deve ser: prático, interativo e orientado à transformação de quem participa. E é isso que você pode esperar dos nossos workshops.</p>
		</div>
	</div>
	<div class="ttl-txt">
		<div class="ttl-txt__text">
			<h2>O conhecimento e os conceitos <mark>são fundamentais</mark>. Mas nunca, na história, <mark>alguém mudou algo</mark> apenas por saber como fazer.</h2>
			<p>Executar. Esse é <mark>o único jeito de realizar algo</mark>, de alcançar um objetivo.</p>
			<p>Só para deixar claro: <mark>sou um grande defensor da importância do conhecimento</mark>. Livros, vídeos, podcasts e artigos são fontes incríveis de conhecimento para a geração de insights.</p>
			<p>Mas chega uma hora em que <mark>é preciso parar de saber como fazer e começar a fazer</mark>. É isso que diferencia a maior parte das pessoas e organizações de sucesso daquelas que apenas sabem, mas não fazem.</p>
			<p>Se a sua organização tem objetivos a atingir e está em busca de resultados, <mark>nossos workshops são exatamente o que você precisa</mark>.</p>
		</div>
	</div>
	<?php include '../../modules/workshops.php'; ?>
	<?php include '../../forms/workshops.php'; ?>
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
				document.getElementById('g-recaptcha-response').value = token;
				var input = document.createElement('input');
				input.setAttribute('type', 'hidden');
				input.setAttribute('name', 'g-recaptcha-response');
				input.setAttribute('value', token);
				document.getElementById('propostaWorkshop').appendChild(input);
			});
		});
	</script>
	<script src="/assets/scripts/formValidationWorkshops.js"></script>
	<script src="/assets/scripts/scripts.js"></script>
	<script src="/assets/scripts/masksWorkshops.js"></script>
</body>

</html>