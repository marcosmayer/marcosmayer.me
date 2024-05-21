<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['formContato'])) {
		$nomeErr = $emailErr = $telefoneErr = $empresaErr = $mensagemErr = "";
		$origemMensagem = $nome = $email = $telefone = $empresa = $mensagem = "";
		$noGo = $successContato = "";
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		if (empty($_POST["nome"])) {
			$nomeErr = "Você precisa inserir o seu nome";
			$noGo = "Error";
		} else {
			$nome = test_input($_POST["nome"]);
			if (!preg_match("/^[A-Za-zÀ-ú ]*$/",$nome)) {
				$nomeErr = "O nome pode conter apenas letras e espaços";
				$noGo = "Error";
			}
		}
		if (empty($_POST["email"])) {
			$emailErr = "Você precisa inserir o seu e-mail";
			$noGo = "Error";
		} else {
			$email = test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Formato de e-mail inválido";
				$noGo = "Error";
			}
		}
		if (empty($_POST["telefone"])) {
			$telefoneErr = "Você precisa inserir o número do seu telefone";
			$noGo = "Error";
		} else {
			$telefone = $_POST["telefone"];
		}
		if (empty($_POST["empresa"])) {
			$empresaErr = "Você precisa inserir o nome da sua empresa ou organização";
			$noGo = "Error";
		} else {
			$empresa = test_input($_POST["empresa"]);
		}
		if (empty($_POST["mensagem"])) {
			$mensagemErr = "Você precisa inserir uma mensagem";
			$noGo = "Error";
		} else {
			$mensagem = test_input($_POST["mensagem"]);
		}

		$tz = 'America/Sao_Paulo';
		$timestamp = time();
		$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
		$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
		$data = $dt->format('d/m/Y - H:i');
		$origem = $_POST["origemMensagem"];
		$para = "marcos@marcosmayer.com.br";
		$assunto = "Mensagem enviada por " . $nome;
		$header = "
		<b>Nome:</b> $nome<br>
		<b>Telefone:</b> $telefone<br>
		<b>E-mail:</b> $email<br>
		<b>Empresa:</b> $empresa<br>
		<br><br>
		<b>Mensagem:</b><br>
		$mensagem
		<br><br>
		<b>Origem da mensagem:</b> $origem
		<br><br>
		==============================================<br>
			$data <br>
		==============================================<br>
		";
		// Função HTML :)
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html;charset=utf-8\r\n";
		$headers .= "From: mm@marcosmayer.com.br\r\n";
		// Envia para você
		if (empty($noGo)) {
			mail($para, $assunto, $header, $headers);
			$successContato = "Ok";
			$origemMensagem = $nome = $email = $telefone = $empresa = $mensagem = "";
		}
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['formProposta'])) {
		$nomeErr = $emailErr = $telefoneErr = $empresaErr = $mensagemErr = "";
		$origemMensagem = $nome = $email = $telefone = $empresa = $dataPalestra = $local = $publico = $orcamento = $mensagem = "";
		$noGo = $successProposta = "";
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		if (empty($_POST["nome"])) {
			$nomeErr = "Você precisa inserir o seu nome";
			$noGo = "Error";
		} else {
			$nome = test_input($_POST["nome"]);
			if (!preg_match("/^[A-Za-zÀ-ú ]*$/",$nome)) {
				$nomeErr = "O nome pode conter apenas letras e espaços";
				$noGo = "Error";
			}
		}
		if (empty($_POST["email"])) {
			$emailErr = "Você precisa inserir o seu e-mail";
			$noGo = "Error";
		} else {
			$email = test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Formato de e-mail inválido";
				$noGo = "Error";
			}
		}
		if (empty($_POST["telefone"])) {
			$telefoneErr = "Você precisa inserir o número do seu telefone";
			$noGo = "Error";
		} else {
			$telefone = $_POST["telefone"];
		}
		if (empty($_POST["empresa"])) {
			$empresaErr = "Você precisa inserir o nome da sua empresa ou organização";
			$noGo = "Error";
		} else {
			$empresa = test_input($_POST["empresa"]);
		}
        $palestrasSelecionadas = test_input(implode(' | ', $_POST['palestraSelecionada']));
		$dataPalestra = test_input($_POST["dataPalestra"]);
		$local = test_input($_POST["local"]);
		$publico = test_input($_POST["publico"]);
		$orcamento = test_input($_POST["orcamento"]);
		if (empty($_POST["mensagem"])) {
			$mensagemErr = "Você precisa inserir uma mensagem";
			$noGo = "Error";
		} else {
			$mensagem = test_input($_POST["mensagem"]);
		}
		$tz = 'America/Sao_Paulo';
		$timestamp = time();
		$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
		$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
		$data = $dt->format('d/m/Y - H:i');
		$origem = $_POST["origemMensagem"];
		$para = "marcos@marcosmayer.com.br";
		$assunto = "Mensagem enviada por " . $nome;
		$header = "
		<b>Nome:</b> $nome<br>
		<b>Telefone:</b> $telefone<br>
		<b>E-mail:</b> $email<br>
		<b>Empresa:</b> $empresa<br>
		<br><br>
		<b>Palestras selecionadas:</b><br>
		$palestrasSelecionadas<br><br>
		<b>Data prevista:</b> $dataPalestra<br>
		<b>Local:</b> $local<br>
		<b>Público previsto:</b> $publico<br>
		<b>Orçamento estimado:</b> $orcamento<br>
		<b>Mensagem:</b><br>
		$mensagem
		<br><br>
		<b>Origem da mensagem:</b> $origem
		<br><br>
		==============================================<br>
			$data <br>
		==============================================<br>
		";
		// Função HTML :)
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html;charset=utf-8\r\n";
        $headers .= "From: mm@marcosmayer.com.br\r\n";
		// Envia para você
		if (empty($noGo)) {
			mail($para, $assunto, $header, $headers);
			$successProposta = "Ok";
			$origemMensagem = $nome = $email = $telefone = $empresa = $palestrasSelecionadas = $dataPalestra = $local = $publico = $orcamento = $mensagem = "";
		}
	}
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
		<title>Entre em contato</title>
		<meta name="description" content="Entre em contato com Marcos Mayer e descubra como ele pode ajudar a sua carreira ou o seu negócio.">
		<link rel="stylesheet" type="text/css" href="/css/estilo-2.css">
		<link rel="icon" type="image/png" href="https://www.marcosmayer.com.br/mm.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Oswald:300,500|Ubuntu:300,700|Unica+One" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="canonical" href="https://www.marcosmayer.com.br/contato/" />
		<script type="text/javascript">
			(function(c,l,a,r,i,t,y){
				c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
				t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
				y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
			})(window, document, "clarity", "script", "k5xq23y7c6");
		</script>
	</head>
	<body>
        <?php if(!empty($successContato)) : ?>
        <div class="resultado">Sua mensagem foi enviada com sucesso.</div>
        <?php endif; ?>
        <?php if(!empty($successProposta)) : ?>
        <div class="resultado">Sua proposta foi solicitada com sucesso.</div>
        <?php endif; ?>
		<div class="topnav" id="myTopnav">
			<a href="#"></a>
			<a href="/marcos-mayer/">Conheça</a>
			<a href="/palestras/">Palestras</a>
			<a href="/treinamento/">Treinamento</a>
			<a href="/blog/">Blog</a>
			<a href="/videos/">Vídeos</a>
			<a class="selected" href="#">Contato</a>
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
					<li><a class="selected" href="#">Contato</a></li>
				</ul>
			</nav>
			<div class="social">
				<a href="https://www.youtube.com/@marcosmayer" title="YouTube" target="_blank"><img src="/images/social-icon-youtube.png" alt="YouTube Marcos Mayer"></a>
				<a href="https://www.linkedin.com/in/marcosmayer/" title="LinkedIn" target="_blank"><img src="/images/social-icon-linkedin.png" alt="LinkedIn Marcos Mayer Palestrante"></a>
			</div>
		</div>
		<div class="top-area contato-top">
			<div class="top-area-foto contato-top-foto"></div>
			<div class="top-area-texto contato-top-texto">
				<h1>Entre em contato</h1>
				<p>Descubra como Marcos Mayer pode ajudar na sua carreira ou no seu negócio, com a criatividade e a inovação.</p>
			</div>
		</div>
		<div class="text-block-light">
			<div class="text-block">
				<h2><span>Entre em contato com Marcos Mayer</span></h2>
				<p>Envie a sua mensagem para o Marcos. Certamente, existe algo que pode ser feito para desenvolver a criatividade e a inovação na sua carreira ou na sua empresa. E o melhor jeito de descobrir o que é, é conversando. Aqui você pode enviar uma mensagem ou já pode solicitar uma proposta para uma palestra. Escolha o seu formulário e entre em contato agora mesmo.</p>
			</div>
		</div>
		<?php if(empty($successContato)) : ?>
        <div class="form-container dark-form-container">
			<div class="contato dark-contato">
					<div class="contato-chamada dark-contato-chamada">Envie sua Mensagem</div>
					<form name="contactform" method="post" action="/contato/">
					<input type="hidden" name="formContato" value="yes">
					<ul class="contato-form dark-contato-form">
						<fieldset class="dark-fieldset">
							<legend class="dark-legend">Preencha todos os campos</legend>
							<li>
								<input type="hidden" id="origemMensagem" name="origemMensagem" value="Página de contato do domínio marcosmayer.com.br">
								<label for="nome">Nome completo *</label>
								<input type="text" name="nome" id="nome" value="<?php echo $nome;?>">
								<span class="error"><?php echo $nomeErr;?></span>
							</li>
							<li>
								<label for="email">E-mail *</label>
								<input type="email" name="email" id="email" value="<?php echo $email;?>">
								<span class="error"><?php echo $emailErr;?></span>
							</li>
							<li>
								<label for="telefone">Telefone *</label>
								<input type="text" name="telefone" id="telefone" value="<?php echo $telefone;?>">
								<span class="error"><?php echo $telefoneErr;?></span>
							</li>
							<li>
								<label for="empresa">Empresa | Organização *</label>
								<input type="text" name="empresa" id="empresa" value="<?php echo $empresa;?>">
								<span class="error"><?php echo $empresaErr;?></span>
							</li>
							<li>
								<label for="mensagem">Mensagem *</label>
								<textarea id="mensagem" name="mensagem" rows="14"><?php echo $mensagem;?></textarea>
								<span class="error"><?php echo $mensagemErr;?></span>
							</li>
						</fieldset>
					</ul>
					<div class="form-button"><button type="submit" class="bouton-contact">ENVIAR</button></div>
				</form>
			</div>
		</div>
		<?php endif; ?>
        <?php if(empty($successProposta)) : ?>
		<div class="form-container">
			<div class="contato">
				<div class="contato-chamada">Solicite uma Proposta</div>
                <form name="contactform" method="post" action="/contato/">
                    <input type="hidden" name="formProposta" value="yes">
                    <ul class="contato-form">
                        <fieldset>
                            <legend>Dados de Contato</legend>
                            <li>
                                <input type="hidden" id="origemMensagem" name="origemMensagem" value="Página de solicitação de proposta do domínio marcosmayer.com.br">
                                <label for="nome">Nome completo *</label>
                                <input type="text" name="nome" id="nome" value="<?php echo $nome;?>">
                                <span class="error"><?php echo $nomeErr;?></span>
                            </li>
                            <li>
                                <label for="email">E-mail *</label>
                                <input type="email" name="email" id="email" value="<?php echo $email;?>">
                                <span class="error"><?php echo $emailErr;?></span>
                            </li>
                            <li>
                                <label for="telefone">Telefone *</label>
                                <input type="text" name="telefone" id="telefone" value="<?php echo $telefone;?>">
                                <span class="error"><?php echo $telefoneErr;?></span>
                            </li>
                            <li>
                                <label for="empresa">Empresa | Organização *</label>
                                <input type="text" name="empresa" id="empresa" value="<?php echo $empresa;?>">
                                <span class="error"><?php echo $empresaErr;?></span>
                            </li>
                        </fieldset>
                        <fieldset>
                            <legend>Dados da Palestra</legend>
                            <li>
                                <label>Em qual(is) palestra(s) tem interesse?</label>
                                <div class="checkboxArea">
                                    <input type="checkbox" name="palestraSelecionada[]" id="case" value="Seja o Seu CASE">
                                    <label for="lideranca">Seja o Seu CASE</label>
                                </div>
                                <div class="checkboxArea">
                                    <input type="checkbox" name="palestraSelecionada[]" id="criatividade" value="Criatividade: o Super Poder Profissional">
                                    <label for="futuro">Criatividade: o Super Poder Profissional</label>
                                </div>
                                <div class="checkboxArea">
                                    <input type="checkbox" name="palestraSelecionada[]" id="inovacao" value="Inovação e a Invenção do Futuro">
                                    <label for="teoriadosjogos">Inovação e a Invenção do Futuro</label>
                                </div>
                                <div class="checkboxArea">
                                    <input type="checkbox" name="palestraSelecionada[]" id="futuro" value="O Futuro, o Trabalho e a Criatividade">
                                    <label for="marketing">O Futuro, o Trabalho e a Criatividade</label>
                                </div>
                                <div class="checkboxArea">
                                    <input type="checkbox" name="palestraSelecionada[]" id="personalizada" value="Quero um palestra com tema personalizado">
                                    <label for="personalizada">Quero um palestra com tema personalizado</label>
                                </div>
                            </li>
                            <li>
                                <label for="dataPalestra">Data prevista</label>
                                <input type="text" name="dataPalestra" id="dataPalestra" value="<?php echo $dataPalestra;?>">
                            </li>
                            <li>
                                <label for="local">Local</label>
                                <input type="text" name="local" id="local" value="<?php echo $local;?>">
                            </li>
                            <li>
                                <label for="publico">Público previsto</label>
                                <input type="text" name="publico" id="publico" value="<?php echo $publico;?>">
                            </li>
                            <li>
                                <label for="orcamento">Orçamento estimado</label>
                                <input type="text" name="orcamento" id="orcamento" value="<?php echo $orcamento;?>">
                            </li>
                            <li>
                                <label for="mensagem">Mensagem *</label>
                                <textarea id="mensagem" name="mensagem" rows="14"><?php echo $mensagem;?></textarea>
                                <span class="error"><?php echo $mensagemErr;?></span>
                            </li>
                        </fieldset>
                    </ul>
                    <div class="form-button"><button type="submit" class="bouton-contact">ENVIAR</button></div>
				</form>
			</div>
		</div>
        <?php endif; ?>
		<div class="footer">
			<span class="footer-1">&copy; <?php echo date("Y"); ?> Marcos Mayer</span><span class="footer-2">&nbsp;-&nbsp;</span><span class="footer-3">Todos os direitos reservados</span>
		</div>
		<script src="/js/modernizr.custom.js"></script>
		<script src="/js/nav.js"></script>
		<script src="https://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
	</body>
</html>
