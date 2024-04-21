<!doctype html>

<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Marcos Mayer - Palestrante</title>
	<meta name="description" content="Marcos Mayer acredita que cada pessoa tem um potencial infinito. Cada um de nós pode ser o seu próprio case. Marcos criou um programa de desenvolvimento humano chamado Seja o Seu C.A.S.E., com etapas importantes dessa transformação.">
	<meta name="author" content="Marcos Mayer">

	<meta property="og:title" content="Marcos Mayer - Palestrante">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.marcosmayer.me">
	<meta property="og:description" content="Marcos Mayer acredita que cada pessoa tem um potencial infinito. Cada um de nós pode ser o seu próprio case. Marcos criou um programa de desenvolvimento humano chamado Seja o Seu C.A.S.E., com etapas importantes dessa transformação.">
	<!-- <meta property="og:image" content="image.png"> -->

	<meta name="robots" content="noindex">

	<link rel="icon" href="/favicon.ico">
	<link rel="icon" href="/favicon.svg" type="image/svg+xml">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">

	<link rel="stylesheet" href="/styles/estilo.css?v=0.1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
	<link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.3.1/dist/aos.css" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

	<!-- // = Base em PRODUÇÃO -->
	<base href="http://localhost:3000/">

</head>

<body>
	<!--
		// - -> SEÇÃO COM A NAVEGAÇÃO DO SITE 
		// ? Arquivo de CSS: _header.css
	-->
	<section class="nav">
		<!--
			// - Menu mobile -> 
		-->
		<div class="header--mobile">
			<div class="header__logo--mobile">
				<img src="/images/marcos-mayer.svg" alt="Marcos Mayer - Palestrante">
			</div>
			<div class="menu-icon">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<nav class="mobile-menu">
				<ul>
					<li><a href="/marcosmayer/">Conheça o Marcos</a></li>
					<li><a href="/palestras/">Palestras</a></li>
					<li><a href="/case/">Seja o Seu C.A.S.E.</a></li>
					<li><a href="/blog/">Blog</a></li>
					<li><a href="/recursos/">Recursos gratuitos</a></li>
					<li><a href="/contato/">Contato</a></li>
				</ul>
			</nav>
		</div>
		<!--
			// - <- Menu mobile 
			// - -> Botão de reserva de data mobile 
		-->
		<div class="header__button--mobile">
			<a class="link--button" href="/reserva/">Reserve sua data</a>
		</div>
		<!--
			// - <- Botão de reserva de data mobile 
			// - -> Header com o menu desktop 
		-->
		<div class="header">
			<div class="branding__logo">
				<img src="images/marcos-mayer.svg" alt="Marcos Mayer - Palestrante">
			</div>
			<nav class="header__nav">
				<ul class="header__menu">
					<li class="header__menu-item"><a class="link--menu" href="/marcos-mayer/" title="Conheça o Marcos">Conheça o Marcos</a></li>
					<li class="header__menu-item"><a class="link--menu" href="/palestras/" title="Palestras">Palestras</a></li>
					<li class="header__menu-item"><a class="link--menu" href="/seja-o-seu-case/" title="Seja o Seu C.A.S.E.">Seja o Seu C.A.S.E.</a></li>
					<li class="header__menu-item"><a class="link--menu" href="/blog/" title="Blog">Blog</a></li>
					<li class="header__menu-item"><a class="link--menu" href="/recursos/" title="Recursos gratuitos">Recursos gratuitos</a></li>
					<li class="header__menu-item"><a class="link--menu" href="/contato/" title="Contato">Contato</a></li>
				</ul>
			</nav>
			<div class="header__button">
				<a class="link--button" href="/reserva/">Reserve sua data</a>
			</div>
		</div>
		<!--
			// - <- Header com o menu desktop
		-->
	</section>
	<!--
		// - <- SEÇÃO COM A NAVEGAÇÃO DO SITE 
		// - -> SEÇÃO HELLO 
		// ? Arquivo de CSS: _hello.css
	-->
	<section class="hello">
		<div class="hello__left">
			<h1>Olá, eu sou o Marcos.</h1>
			<p class="p--destacado">Desde muito pequeno, eu tive a sorte de conviver com amigos que eram melhores do que eu.</p>
			<p>Não pense que estou me colocando como vítima. São apenas fatos. Eles eram mais inteligentes, tinham uma condição de vida muito superior e estudavam, juntos, em um dos melhores colégios do Brasil.</p>
			<p>Como um menino criado em um sítio, no interior de São Paulo, eu tive que encontrar alguma maneira de me relacionar com eles.</p>
			<p>Sem saber disso, então, eu acabei desenvolvendo uma habilidade extra: a criatividade.</p>
		</div>
		<div class="hello__right">
			<img src="images/mm-capa-sobre.png" alt="Marcos Mayer">
		</div>
	</section>
	<!--
		// - <- SEÇÃO HELLO 
		// - -> SEÇÃO TEXT + IMAGE 
		// ? Arquivo de CSS: _text-image.css
	-->
	<section class="text-image">
		<div class="text-image__left">
			<h1>Despertar e aguçar a minha criatividade desde muito cedo fez toda a diferença.</h1>
			<p>Meu convívio com esses amigos — e alguns são meus amigos até hoje — acabou sendo muito bom. Eu sempre era desafiado a encontrar formas de me relacionar com eles. Sempre inventava algo diferente, criava algum tipo de atividade que pudesse servir como vitrine para o que eu sabia fazer, que era ser criativo.</p>
			<p>A criatividade acabou sendo definitiva na minha carreira, na minha mentalidade e na minha prática.</p>
		</div>
		<div class="text-image__right">
			<img src="images/mm-multiple.png" alt="Marcos Mayer">
		</div>
	</section>
	<!--
		// - <- SEÇÃO TEXT + IMAGE 
		// - -> SEÇÃO IMAGE + TEXT 
		// ? Arquivo de CSS: _image-text.css
	-->
	<section class="image-text">
		<div class="image-text__left">
			<img src="images/mm-standing.png" alt="Marcos Mayer">
		</div>
		<div class="image-text__right">
			<h1>Assim como você, eu enfrento desafios todos os dias.</h1>
			<p>Mas com a ajuda de um framework comprovadamente eficaz, eu transformo cada desafio em uma oportunidade de me tornar o meu próprio C.A.S.E.</p>
		</div>
	</section>
	<!--
		// - <- SEÇÃO IMAGE + TEXT 
		// - -> SEÇÃO TEXT + IMAGE 
		// ? Arquivo de CSS: _text-image-2.css
	-->
	<section class="text-image-2">
		<div class="text-image-2__left">
			<h2>Tenho uma missão e um compromisso com você:</h2>
			<p>Quero te ajudar a transformar o teu potencial, que é virtualmente infinito, em potência, de modo que você se torne a pessoa que mais admira no mundo.</p>
			<div class="text-image-2__destaque">A partir daí, o que pode acontecer só dependerá de você.</div>
		</div>
		<div class="text-image-2__right">
			<img src="images/mm-explosion.png" alt="Marcos Mayer">
		</div>
	</section>
	<!--
		// - <- SEÇÃO TEXT + IMAGE 
		// - -> SEÇÃO IMAGE + TEXT 2 
		// ? Arquivo de CSS: _image-text.css
	-->
	<section class="image-text-2">
		<div class="image-text-2__left">
			<img src="images/mm-mob.jpg" alt="Marcos Mayer">
		</div>
		<div class="image-text-2__right">
			<p>Hoje, sou sócio e cofundador da escola de negócios <span class="bold">Masters of Business</span>, que nasceu para mudar a forma como o conhecimento de negócios é compartilhado.</p>
			<p>Como responsável por marketing e inovação, estou sempre buscando novas maneiras de chegar até os profissionais que precisam se um “empurrãozinho” para dar o próximo passo.</p>
			<p>Assim como na minha atuação como palestrante e consultor, o privilário de atuar na área da educação — que poderia ser chamada de área da transformação — é um grande privilégio, pelo qual sou grato todo os dias.</p>
		</div>
	</section>
	<!--
		// - <- SEÇÃO IMAGE + TEXT 2 
		// - -> CÓDIGO DE CONDUTA 
		// ? Arquivo de CSS: _conduta.css
	-->
	<section class="conduta">
		<h1>Meu código de conduta</h1>
		<h2>Um código é sagrado. Não é negociável. E orienta tudo o que eu faço.</h2>
		<div class="conduta__modules">
			<div class="conduta__module">
				<img src="images/conduta-1.png" alt="1">
				<h3>Esteja por inteiro aonde quer que vá e no que quer que faça.</h3>
			</div>
			<div class="conduta__module">
				<img src="images/conduta-2.png" alt="2">
				<h3>Acredite na sua capacidade de ser capaz.</h3>
			</div>
			<div class="conduta__module">
				<img src="images/conduta-3.png" alt="3">
				<h3>Seja sempre você mesmo, custe o que custar.</h3>
			</div>
			<div class="conduta__module">
				<img src="images/conduta-4.png" alt="4">
				<h3>Nunca deixe de imaginar.</h3>
			</div>
			<div class="conduta__module">
				<img src="images/conduta-5.png" alt="5">
				<h3>Aprenda sempre, em todas as oportunidades.</h3>
			</div>
			<div class="conduta__module">
				<img src="images/conduta-6.png" alt="6">
				<h3>O que quer que esteja vivenciando, lembre-se de que vai passar.</h3>
			</div>
			<div class="conduta__module">
				<img src="images/conduta-7.png" alt="7">
				<h3>Busque a felicidade e expresse felicidade, tanta quanto seja contagiosa.</h3>
			</div>
			<div class="conduta__module">
				<img src="images/conduta-8.png" alt="8">
				<h3>Viva com intensidade, aproveitando tudo que vivenciar.</h3>
			</div>
			<div class="conduta__module">
				<img src="images/conduta-9.png" alt="9">
				<h3>Tome decisões e assuma posições.</h3>
			</div>
			<div class="conduta__module">
				<img src="images/conduta-10.png" alt="10">
				<h3>Tenha um plano para a sua vida, antes que alguém faça isso por você.</h3>
			</div>
		</div>
	</section>
	<!--
		// - <- CÓDIGO DE CONDUTA 
		// - -> RODAPÉ 
		// ? Arquivo de CSS: _footer.css
	-->
	<section class="footer">
		<ul class="footer__menu">
			<li class="footer__menu-item"><a class="footer__menu-link" href="/" title="Conheça o Marcos">Início</a></li>
			<li class="footer__menu-item"><a class="footer__menu-link" href="/marcos-mayer/" title="Conheça o Marcos">Conheça o Marcos</a></li>
			<li class="footer__menu-item"><a class="footer__menu-link" href="/palestras/" title="Palestras">Palestras</a></li>
			<li class="footer__menu-item"><a class="footer__menu-link" href="/seja-o-seu-case/" title="Seja o Seu C.A.S.E.">Seja o Seu C.A.S.E.</a></li>
			<li class="footer__menu-item"><a class="footer__menu-link" href="/blog/" title="Blog">Blog</a></li>
			<li class="footer__menu-item"><a class="footer__menu-link" href="/recursos/" title="Recursos gratuitos">Recursos gratuitos</a></li>
			<li class="footer__menu-item"><a class="footer__menu-link" href="/contato/" title="Contato">Contato</a></li>
		</ul>
		<div class="branding__logo branding__logo--footer">
			<img src="images/marcos-mayer.svg" alt="Marcos Mayer - Palestrante">
		</div>
		<div class="footer__social">
			<a class="footer__social-link" href="https://www.linkedin.com/in/marcosmayer/" title="LinkedIn" target="_blank" rel="noopener noreferrer">
				<img src="images/icone-linkedin.svg" alt="LinkedIn">
			</a>
			<a class="footer__social-link" href="https://www.instagram.com/omarcosmayer/" title="Instagram" target="_blank" rel="noopener noreferrer">
				<img src="images/icone-instagram.svg" alt="Instagram">
			</a>
			<!-- <a class="footer__social-link" href="https://www.youtube.com/channel/UC9Q6J9Z9Q9Z9Q9Z9Q9Z9Q9Q" title="YouTube" target="_blank" rel="noopener noreferrer">
				<img src="images/youtube.svg" alt="YouTube">
			</a> -->
		</div>
		<div class="footer__copyright">
			<?php
			$currentYear = date("Y");
			?>
			© <?= $currentYear ?> Marcos Mayer - Todos os Direitos Reservados
		</div>
	</section>
	<!--
		// - <- RODAPÉ
	-->
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.3.1/dist/aos.js"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<script src="/scripts/scripts.js"></script>
	<script>
		AOS.init();
	</script>
</body>

</html>