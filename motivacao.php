<?php
	$dateOfBirthArtur = "22-08-2010";
	$dateOfBirthOliver = "30-10-2014";
	$today = date("Y-m-d");
	$diffArtur = date_diff(date_create($dateOfBirthArtur), date_create($today));
	$idadeArtur = $diffArtur->format('%y');
	$diffOliver = date_diff(date_create($dateOfBirthOliver), date_create($today));
	$idadeOliver = $diffOliver->format('%y');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-NQ5WV78GR8"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-NQ5WV78GR8');
		</script>
		<meta charset="UTF-8">
		<title>O que me move</title>
		<meta name="description" content="Descubra o que me move, qual é a minha filosofia e meu credo.">
		<link rel="stylesheet" type="text/css" href="/css/estilo-2.css">
		<link rel="stylesheet" type="text/css" href="/css/jssor.css">
		<link rel="icon" type="image/png" href="https://www.marcosmayer.com.br/mm.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700|Unica+One|Oswald:300,500" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="canonical" href="https://www.marcosmayer.com.br/motivacao/" />
		<script type="text/javascript">
			(function(c,l,a,r,i,t,y){
				c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
				t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
				y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
			})(window, document, "clarity", "script", "k5xq23y7c6");
		</script>
	</head>
	<body>
		<!-- Google Tag Manager (noscript) -->
			<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFSDBSM"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<div class="topnav" id="myTopnav">
			<a href="#"></a>
			<a href="/marcos-mayer/">Conheça</a>
			<a href="/palestras/">Palestras</a>
			<a href="/treinamento/">Treinamento</a>
			<a class="/selected" href="#">Blog</a>
			<a href="/videos/">Vídeos</a>
			<a href="/contato/">Contato</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
		</div>
		<div class="header">
			<div class="logo"><a href="/"><img src="/images/logo-marcos-mayer.png" alt="Marcos Mayer - Criatividade e Inovação"></a></div>
			<nav>
				<ul class="menu">
					<li><a href="/marcos-mayer/">Conheça</a></li>
					<li><a href="/palestras/">Palestras</a></li>
					<li><a href="/treinamento/">Treinamento</a></li>
					<li><a href="/blog/">Blog</a></li>
					<li><a href="/videos/">Vídeos</a></li>
					<li><a href="/contato/">Contato</a></li>
				</ul>
			</nav>
			<div class="social">
				<a href="https://www.youtube.com/@marcosmayer" title="YouTube" target="_blank"><img src="/images/social-icon-youtube.png" alt="YouTube Marcos Mayer"></a>
				<a href="https://www.linkedin.com/in/marcosmayer/" title="LinkedIn" target="_blank"><img src="/images/social-icon-linkedin.png" alt="LinkedIn Marcos Mayer Palestrante"></a>
			</div>
		</div>
		<div class="top-area motivacao-top">
			<div class="top-area-foto motivacao-top-foto"></div>
			<div class="top-area-texto motivacao-top-texto">
				<h1>Aquilo que me move...</h1>
				<p>O que me move? O que me faz levantar todas as manhãs, acreditando que ganhei mais uma oportunidade de mudar o mundo?</p>
			</div>
		</div>
		<div class="text-block-light">
			<div class="text-block">
				<h2><span>O que realmente importa</span></h2>
				<p>Esta é a minha credencial mais significativa: sou pai do Artur, <?php echo $idadeArtur; ?> anos, e do Oliver, <?php echo $idadeOliver; ?> anos. Quando tinha 6 anos, o Artur chegou em casa, vindo da casa da avó, e eu vi dois textos que ele havia escrito. O meu coração se encheu de um misto de orgulho e felicidade, e os meus olhos se encheram de lágrimas. Vou compartilhar com você o que ele escreveu (com autorização dele, claro). É algo extremamente pessoal e cheio de significado, que vale a compartilhar.</p>
			</div>
		</div>
		<div class="block-artur">
			<div class="block-artur-imagem"><img src="images/texto-artur-1.jpg" alt="Eu quero melhorar o mundo - Artur Dressler Mayer"></div>
			<div class="block-artur-texto"><p>“Eu quero melhorar o mundo, e vocês podem me ajudar, por favor? Porque a vida importa muito pra mim e eu quero deixar a vida melhor. Por favor! Porque a vida depende de nós.”</p></div>
		</div>
		<div class="block-artur">
			<div class="block-artur-imagem"><img src="images/texto-artur-2.jpg" alt="Eu quero muito melhorar a vida - Artur Dressler Mayer"></div>
			<div class="block-artur-texto"><p>“Conhecem a música ‘Depende de Nós’? É a minha música predileta. Sabem por quê? Porque ela é sobre ajudar a vida, e eu quero muito melhorar a vida.”</p></div>
		</div>
		<div class="text-block-dark">
			<div class="text-block">
				<h2><span>Meu propósito pessoal</span></h2>
				<p>Pra que você possa entender por que a minha reação foi tão intensa, veja qual foi a minha definição de propósito pessoal, que eu havia escrito poucas semanas antes:</p>
				<p class="quote">“Ajudar as pessoas a terem condições de viver plenamente, com o máximo aproveitamento de seu potencial, dependendo apenas de sua própria decisão para serem felizes.”</p>
				<p>Eu creio que os nossos filhos são um reflexo do que nós, seus pais, somos. Então, não há nada que eu possa falar a meu respeito que diga mais sobre mim do que essa história do Artur.</p>
				<p>“Eu também quero muito melhorar a vida, meu filho. Vamos nos ajudar a fazer isso? Eu sei que você já me ajudou, muito mais do que você pode imaginar.”</p>
			</div>
		</div>
		<div class="text-block-light">
			<div class="text-block">
				<h2><span>Minha filosofia de vida</span></h2>
				<p>A seguinte frase apresenta a minha filosofia de vida:</p>
				<p class="quote quote-dark">São os momentos de felicidade que fazem a vida valer a pena.</p>
				<p>Acredito muito nisso. Veja que eu falo em momentos de felicidade, porque ninguém <span class="bold">é</span> feliz ou infeliz o tempo todo. Mas os momentos felizes precisam pesar mais, precisam ter um impacto maior sobre quem somos e como vivemos a vida.</p>
				<p>Por isso é que eu sou obcecado em ajudar as pessoas a transformarem seu potencial em potência, para que elas possam ter muitos momentos felizes. Evidentemente, se elas viverão dessa forma, ou não, depende das decisões que cada um precisa tomar. Mas eu preciso que todos saibam que têm, dentro de si, tudo o que precisam para viver uma vida que vale a pena.</p>
			</div>
		</div>
		<div class="text-block-image text-block-image-06">
			<div class="text-block">
				<h2><span>Um manifesto</span></h2>
				<p>Estas são algumas das minhas principais crenças, que orientam muitas das decisões que eu tomo:</p>
				<ul class="credo">
					<li><span>1. O potencial de cada pessoa é virtualmente ilimitado e qualquer pessoa pode transformar esse potencial em realidade. Essa transformação sempre começa com uma decisão.</span></li>
					<li><span>2. Confiar em você mesmo e acreditar que você é capaz é essencial e é o começo de toda transformação efetiva. A autoconfiança não é garantia de sucesso, mas a falta dela é garantia de fracasso.</span></li>
					<li><span>3. A criatividade é um estilo de vida, não uma ferramenta que usamos de vez em quando. Ela é para todos, sem exceção, e faz toda a diferença na forma como enxergamos e interagimos com o ambiente no qual estamos inseridos.</span></li>
					<li><span>4. A vida pode ser muito melhor do que é, para cada indivíduo, comunidade ou para a sociedade como um todo. Mas para que isso se torne uma realidade, é preciso mudar a nossa cultura e a forma como lidamos com a vida, e isso sempre começa pela mudança pessoal.</span></li>
					<li><span>5. O único meio de promover uma mudança efetiva na nossa sociedade é por meio da educação. Orientar uma criança é muito mais fácil e muito mais eficaz na busca por uma vida melhor. As crianças acreditam que são capazes e que podem transformar o mundo. E estão certas.</span></li>
				</ul>
			</div>
		</div>
		<div class="footer">
			<span class="footer-1">&copy; <?php echo date("Y"); ?> Marcos Mayer</span><span class="footer-2">&nbsp;-&nbsp;</span><span class="footer-3">Todos os direitos reservados</span>
		</div>
		<script src="/js/modernizr.custom.js"></script>
		<script src="/js/nav.js"></script>
		<script src="https://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
	</body>
</html>
