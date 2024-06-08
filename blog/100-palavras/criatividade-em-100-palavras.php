<?php

// Texto fornecido
$texto_html = "A melhor definição de criatividade que já vi vem de Sir Ken Robinson. Segundo ele, criatividade é “o processo de ter ideias originais que tenham valor”. A capacidade dele de condensar tantos conceitos nessa frase é incrível. É um processo. Não acontece de repente, como se uma lâmpada acendesse. É sobre ter ideias originais. Tem que ter o elemento da novidade. E tem que ter valor. Ter ideias estapafúrdias, por mais diferentes que sejam, não é criatividade, a não ser que tenham valor, que tenham a capacidade de mudar a vida das pessoas. Isso é criatividade, na sua melhor forma.";

// Remover tags HTML para obter apenas o texto
$texto_limpo = strip_tags($texto_html);

// Contar palavras
$palavras = array_filter(explode(' ', $texto_limpo), function ($palavra) {
	return strlen(trim($palavra)) > 0;
});
$contagem_palavras = count($palavras);

// Contar caracteres com e sem espaços
$contagem_caracteres_com_espacos = strlen($texto_limpo);
$contagem_caracteres_sem_espacos = strlen(str_replace(' ', '', $texto_limpo));

$pageTitle = 'Marcos Mayer: Palestrante, Consultor, Escritor e Empreendedor';
$pageDescription = 'Cada pessoa tem um potencial infinito. Cada um de nós pode ser o seu próprio case. O programa de desenvolvimento humano chamado Seja o Seu C.A.S.E. apresenta as etapas importantes dessa transformação.';
include '../../components/head.php';

?>

<!doctype html>
<html lang="pt-br">

<body>
	<?php include '../../components/nav.php'; ?>
	<div class="blog-post">
		<div class="blog-post__container">
			<div class="blog-post__header">
				<div class="blog-post__date">4 de junho de 2024</div>
				<h2>100 Palavras</h2>
				<h1>Criatividade em 100 Palavras</h1>
			</div>
			<div class="blog-post__area">
				<div class="blog-post__content">
					<p><?php echo $texto_html; ?></p>
					<div class="blog-post__words-counter">
						<div class="blog-post__contagem">
							<p>Caracteres:</p>
							<p><span class="fw-5" id="contagem-caracteres-com-espacos">0</span></p>
						</div>
						<div class="blog-post__contagem">
							<p>Caracteres sem os espaços:</p>
							<p><span class="fw-5" id="contagem-caracteres-sem-espacos">0</span></p>
						</div>
						<div class="blog-post__contagem">
							<p>Palavras:</p>
							<p><span class="fw-6" id="contagem-palavras">0</span></p>
						</div>
					</div>
				</div>
				<div class="blog-post__extras">
				</div>
			</div>
		</div>
	</div>
	<?php include '../../components/footer.php'; ?>
	<script src="../../assets/scripts/scripts.js"></script>
	<script>
		// Passar os valores do PHP para o JavaScript
		var contagemPalavras = <?php echo $contagem_palavras; ?>;
		var contagemCaracteresComEspacos = <?php echo $contagem_caracteres_com_espacos; ?>;
		var contagemCaracteresSemEspacos = <?php echo $contagem_caracteres_sem_espacos; ?>;
	</script>
	<script src="../../assets/scripts/countUp.js"></script>
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>

</html>