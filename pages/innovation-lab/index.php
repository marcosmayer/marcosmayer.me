<!doctype html>
<html lang="pt-br">

<?php
$pageTitle = 'Innovation Lab | Marcos Mayer';
$pageDescription = 'O Innovation Lab é a melhor forma que uma organização tem de implementar um programa de inovação, de criar um ambiente propício à inovação e de desenvolver uma cultura de inovação. Conheça o Innovation Lab do Marcos Mayer.';
include '../../components/head.php';
?>

<body>
	<?php include '../../components/nav.php'; ?>
	<!-- // ! Innovation Lab -->
	<div class="i-lab">
		<div class="i-lab__text">
			<h1>Innovation Lab — Implantando a inovação como parte da cultura</h1>
			<p>Uma consultoria de inovação como deve ser: prática e experiencial. A forma definitiva de implementar um programa de inovação na sua empresa ou organização.</p>
		</div>
	</div>
	<!-- // ! O desafio da inovação -->
	<div class="desafio-inovacao">
		<div class="desafio-inovacao__text">
			<h2>Por que é tão difícil inserir a inovação como parte fundamental da cultura de uma empresa?</h2>
			<h3>O Desafio da Inovação Interna</h3>
			<p>Muitas empresas enfrentam um grande desafio quando se trata de iniciar um processo de inovação que realmente transforme sua cultura organizacional. Encontrar dentro da própria equipe a força, a motivação e a capacidade necessárias para começar essa mudança pode ser extremamente difícil. A rotina diária, a resistência a mudanças e a falta de uma visão clara sobre como inovar são barreiras comuns que impedem o progresso.</p>
			<h3>A Solução: Consultoria de Inovação Externa</h3>
			<p>Para superar esses obstáculos, contar com uma consultoria de inovação externa pode ser a chave. Uma força externa traz uma nova perspectiva, métodos comprovados e a expertise necessária para impulsionar o início de um programa de inovação. Nossa consultoria de inovação oferece quatro workshops intensivos com uma equipe multidisciplinar da sua própria empresa, funcionando como um kick-off para o seu programa de inovação.</p>
			<h3>Transformando a Cultura da Empresa</h3>
			<p>Esses workshops não apenas introduzem conceitos e práticas inovadoras, mas também capacitam sua equipe para continuar esse processo de transformação internamente. Ao final dos quatro encontros, sua empresa estará pronta para integrar a inovação em sua cultura de forma sustentável, garantindo que a inovação se torne uma parte central e contínua da sua estratégia empresarial.</p>
		</div>
	</div>
	<!-- // ! INNOVATION LAB -->
	<div class="innovation-lab">
		<div class="innovation-lab__innovation-lab">
			<div class="innovation-lab__title">
				<h3>Innovation Lab</h3>
			</div>
			<div class="innovation-lab__tagline">
				<h4>Muito mais do que workshops — Uma verdadeira experiência de inovação</h4>
			</div>
			<div class="innovation-lab__description">
				<div class="innovation-lab__image"></div>
				<div class="innovation-lab__text">
					<p class="fw-4">O Innovation Lab é uma consultoria prática e dinâmica dedicada à implantação de um programa de inovação dentro da sua organização. Nosso objetivo é transformar a cultura da sua empresa, incorporando a inovação como um elemento essencial do dia a dia.</p>
					<p>Durante quatro encontros interativos, nossa equipe de especialistas guiará um grupo multidisciplinar de profissionais da sua empresa através de um processo estruturado e focado em resultados. Você aprenderá técnicas e ferramentas essenciais para identificar oportunidades, desenvolver projetos inovadores e garantir a sustentabilidade do programa de inovação.</p>
					<p>Ao final desses encontros, sua equipe estará equipada para continuar o programa de inovação de forma autônoma, promovendo um ambiente de criatividade, colaboração e transformação contínua.</p>
					<div class="innovation-lab__divider"></div>
					<h5>Transformação individual:</h5>
					<ul class="ul__innovation-lab">
						<li>Desenvolvimento da capacidade de identificar oportunidades de inovação.</li>
						<li>Aprimoramento das habilidades de trabalho em equipe e colaboração.</li>
						<li>Capacitação em técnicas de ideação e desenvolvimento de projetos.</li>
						<li>Confiança para liderar iniciativas de inovação.</li>
						<li>Compreensão da importância da inovação contínua.</li>
					</ul>
					<div class="innovation-lab__divider"></div>
					<h5>Transformação organizacional:</h5>
					<p></p>
					<ul class="ul__innovation-lab">
						<li>Implantação de uma cultura de inovação sustentável.</li>
						<li>Capacidade de desenvolver e implementar projetos inovadores.</li>
						<li>Fortalecimento da competitividade no mercado.</li>
						<li>Aumento do engajamento e satisfação dos colaboradores.</li>
						<li>Melhoria contínua e evolução da empresa.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
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
	<script src="/assets/scripts/nav.js"></script>
	<script src="/assets/scripts/scripts.js"></script>
	<script src="/assets/scripts/masksInnovationLab.js"></script>
</body>

</html>