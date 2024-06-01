<!doctype html>
<html lang="pt-br">

<?php
$pageTitle = 'Sobre o Marcos Mayer: Palestrante, Consultor, Escritor e Empreendedor';
$pageDescription = 'Coheça o Marcos Mayer, um dos maiores especialistas em criatividade do Brasil. Palestrante, consultor, escritor e empreendedor, ele ajuda pessoas e empresas a desbloquearem a criatividade e alcançarem o máximo potencial.';
include '../../components/head.php';
?>

<body>
	<?php include '../../components/nav.php'; ?>
	<div class="f-bg-img-r-ttk-txt f-bg-img-r-ttk-txt--palestras">
		<div class="f-bg-img-r-ttk-txt__text f-bg-img-r-ttk-txt__text--palestras">
			<h1>Palestras que provocam uma metanoia criativa</h1>
			<p>"A ação de mudar de ideia ou pensamento". Colocar essa ação em movimento é o objetivo de cada palestra. Apresentar os efeitos práticos e efetivos do desenvolvimento da criatividade e da inovação nos indivíduos e na organização.</p>
		</div>
	</div>
	<div class="ttl-txt">
		<div class="ttl-txt__text">
			<h2>Líderes e organizações que não priorizarem a criatividade e inovação não <mark>vão ficar</mark> para trás. <mark>Já ficaram</mark>.</h2>
			<p>O que diferencia as grandes empresas, aquelas que estão preparadas para o futuro, de todas as outras é a forma como encaram a criatividade e a inovação.</p>
			<p>A criatividade e a inovação não podem ser ações isoladas ou iniciativas pontuais de grande visibilidade. Elas precisam ser parte de um sistema.</p>
			<p>A esse sistema damos o nome de cultura. O modo de operação. Muitos dizem "está no DNA".</p>
			<p>Então antes de tentar implementar projetos de inovação, líderes e organizações precisam tornar-se o tipo de líder e de organização que absolutamente não consegue enxergar o futuro sem ela.</p>
		</div>
	</div>
	<?php include '../../modules/palestras.php'; ?>
	<?php include '../../forms/palestras.php'; ?>
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
				document.getElementById('propostaPalestra').appendChild(input);
			});
		});
	</script>
	<script src="/assets/scripts/formValidation.js"></script>
	<script src="/assets/scripts/scripts.js"></script>
	<script src="/assets/scripts/masks.js"></script>
</body>

</html>