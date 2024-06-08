<?php

$nomeCompletoErr = $emailErr = $celularErr = $empresaErr = $mensagemErr = "";
$origemMensagem = $nomeCompleto = $email = $celular = $empresa = $mensagem = "";
$noGo = $successProposta = "";

?>

<div class="form-contato">
	<div class="form-contato__container">
		<div class="form-contato__title">Inicie uma conversa</div>
		<div class="form-contato__text">
			<p>Vamos dar um novo significado à palavra <mark>parceria</mark>?</p>
			<p>O que me move a fazer o que faço é o <mark>desenvolvimento humano</mark>. E a melhor forma de fazermos isso juntos, na sua organização, é com uma parceria.</p>
			<p>Quando trabalharmos juntos, você terá o meu <mark>compromisso com o resultado</mark> de transformação que nos propusermos a promover.</p>
			<p>Hoje se fala muito em experiência do cliente. Sabe qual é a experiência que eu proporciono aos meus clientes? Eles são <mark>reconhecidos e valorizados</mark> por term encontrado um parceiro, no verdadeiro sentido da palavra.</p>
		</div>
		<form name="contato" id="contato" class="form-contato__form" method="post" action="../../forms/process_form_contato.php">
			<input type="hidden" name="formProposta" value="yes">
			<input type="hidden" id="origemMensagem" name="origemMensagem" value="Página de contato do domínio marcosmayer.com.br">
			<input type="text" name="address" id="address" style="display:none">
			<ul class="form-contato__ul">
				<fieldset class="form-contato__fieldset">
					<legend class="form-contato__legend">Dados de contato</legend>
					<li>
						<label for="nomeCompleto">Nome completo *</label>
						<input type="text" name="nomeCompleto" id="nomeCompleto" placeholder="Nome completo">
						<span class="error-message form-contato__error"><?php echo $nomeCompletoErr; ?></span>
					</li>
					<li>
						<label for="email">E-mail *</label>
						<input type="email" name="email" id="email" placeholder="Seu e-mail">
						<span class="error-message form-contato__error"><?php echo $emailErr; ?></span>
					</li>
					<li>
						<label for="telefone">Celular *</label>
						<input type="text" name="celular" id="celular" placeholder="(__) _____-_____">
						<span class="error-message form-contato__error"><?php echo $celularErr; ?></span>
					</li>
					<li>
						<label for="empresa">Empresa | Organização *</label>
						<input type="text" name="empresa" id="empresa" placeholder="Sua empresa ou organização">
						<span class="error-message form-contato__error"><?php echo $empresaErr; ?></span>
					</li>
					<li>
						<label for="mensagem">Mensagem *</label>
						<textarea id="mensagem" name="mensagem"></textarea>
						<span class="error-message form-contato__error"><?php echo $mensagemErr; ?></span>
					</li>
				</fieldset>
			</ul>
			<div class="form-contato__button">
				<button type="submit">Enviar</button>
			</div>
		</form>
	</div>
</div>