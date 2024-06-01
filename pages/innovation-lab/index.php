<!doctype html>
<html lang="pt-br">

<?php
$pageTitle = 'Innovation Lab | Marcos Mayer';
$pageDescription = 'O Innovation Lab é a melhor forma que uma organização tem de implementar um programa de inovação, de criar um ambiente propício à inovação e de desenvolver uma cultura de inovação. Conheça o Innovation Lab do Marcos Mayer.';
include '../../components/head.php';
?>

<body>
	<?php include '../../components/nav.php'; ?>
	<div class="f-bg-img-r-ttk-txt f-bg-img-r-ttk-txt--innovation-lab">
		<div class="f-bg-img-r-ttk-txt__text f-bg-img-r-ttk-txt__text--innovation-lab">
			<h1>Innovation Lab — Implantando a inovação como parte da cultura</h1>
			<p>Uma consultoria de inovação como deve ser: prática e experiencial. A forma definitiva de implementar um programa de inovação na sua empresa ou organização.</p>
		</div>
	</div>
	<div class="ttl-txt">
		<div class="ttl-txt__text">
			<h2>Por que é tão difícil inserir a inovação como parte fundamental da cultura de uma empresa?</h2>
			<h3>O Desafio da Inovação Interna</h3>
			<p>Muitas empresas enfrentam um grande desafio quando se trata de iniciar um processo de inovação que realmente transforme sua cultura organizacional. Encontrar dentro da própria equipe a força, a motivação e a capacidade necessárias para começar essa mudança pode ser extremamente difícil. A rotina diária, a resistência a mudanças e a falta de uma visão clara sobre como inovar são barreiras comuns que impedem o progresso.</p>
			<h3>A Solução: Consultoria de Inovação Externa</h3>
			<p>Para superar esses obstáculos, contar com uma consultoria de inovação externa pode ser a chave. Uma força externa traz uma nova perspectiva, métodos comprovados e a expertise necessária para impulsionar o início de um programa de inovação. Nossa consultoria de inovação oferece quatro workshops intensivos com uma equipe multidisciplinar da sua própria empresa, funcionando como um kick-off para o seu programa de inovação.</p>
			<h3>Transformando a Cultura da Empresa</h3>
			<p>Esses workshops não apenas introduzem conceitos e práticas inovadoras, mas também capacitam sua equipe para continuar esse processo de transformação internamente. Ao final dos quatro encontros, sua empresa estará pronta para integrar a inovação em sua cultura de forma sustentável, garantindo que a inovação se torne uma parte central e contínua da sua estratégia empresarial.</p>
		</div>
	</div>
	<?php include '../../modules/innovation-lab.php'; ?>
	<?php include '../../forms/innovation-lab.php'; ?>
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
				document.getElementById('propostaInnovationLab').appendChild(input);
			});
		});
	</script>
	<script src="/assets/scripts/formValidationInnovationLab.js"></script>
	<script src="/assets/scripts/scripts.js"></script>
	<script src="/assets/scripts/masksInnovationLab.js"></script>
</body>

</html>