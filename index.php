<!doctype html>
<html lang="pt-br">

<?php
$pageTitle = 'Marcos Mayer: Palestrante, Consultor, Escritor e Empreendedor';
$pageDescription = 'Cada pessoa tem um potencial infinito. Cada um de nós pode ser o seu próprio case. O programa de desenvolvimento humano chamado Seja o Seu C.A.S.E. apresenta as etapas importantes dessa transformação.';
include 'components/head.php';
?>

<body>
	<?php include 'components/nav.php'; ?>
	<?php
	$image = 'assets/images/mm-capa.png';
	$alt = 'Marcos Mayer - Palestrante';
	$image2 = 'assets/images/logo-seja-o-seu-case.svg';
	$alt2 = 'Seja o Seu C.A.S.E.';
	$text = 'Por meio de um framework de desbloqueio da criatividade, cada pessoa pode se aproximar, <mark>infinitamente</mark>, do seu máximo potencial.';
	$icon = 'assets/images/icon-play.svg';
	$cta = 'Assista ao vídeo';
	include 'modules/l-img-r-img-txt-btn.php';
	?>
	<?php include 'modules/estatisticas.php'; ?>
	<?php include 'modules/two-stripes.php'; ?>
	<?php
	$title = 'Olá, eu sou o Marcos';
	$text = '<p>Não me recordo de algum momento na minha vida em que eu não estava criando algo. Esse ímpeto sempre fez parte de quem eu sou, e continua mais forte do que nunca.</p><p>Em mais de 30 anos de carreira, fui executivo de marketing e também fui diretor de criação. Criei empresas e transformei negócios de outros. Em 2023, criei mais uma empresa com sócios com os quais eu aprendo todos os dias. E estou certo de que muita coisa ainda virá pela frente.</p><p>Mas o que mais me atrai hoje, algo que tenho como meu propósito, é entender como as pessoas podem viver uma vida mais completa e mais produtiva, no âmbito pessoal e profissional. Em suma, como elas podem ser mais felizes e realizadas.</p><p>Depois de décadas estudando — e vivenciando — o tema da criatividade, posso afirmar, com absoluta certeza, de que essa transformação passa pela criatividade e por todos os benefícios que seu desenvolvimento traz consigo.</p>';
	include 'modules/l-ttl-txt-r-img.php';
	?>
	<?php include 'modules/v-items.php'; ?>
	<?php include 'modules/b-your-case.php'; ?>
	<?php include 'modules/ttl-3-box.php'; ?>
	<?php include 'modules/txt-btn.php'; ?>
	<?php include 'modules/ttl-l-img-r-txt-btn.php'; ?>
	<?php include 'modules/clientes.php'; ?>
	<?php include 'components/footer.php'; ?>
	<script src="/assets/scripts/scripts.js"></script>
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>

</html>