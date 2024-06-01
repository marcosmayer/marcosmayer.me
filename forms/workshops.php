<?php

$nomeCompletoErr = $emailErr = $celularErr = $empresaErr = $mensagemErr = "";
$origemMensagem = $nomeCompleto = $email = $celular = $empresa = $dataworkshop = $local = $publico = $orcamento = $mensagem = "";
$noGo = $successProposta = "";

?>

<div class="form-workshops">
	<div class="form-workshops__container">
		<div class="form-workshops__title">Posso te mandar mais informações?</div>
		<form name="propostaWorkshop" id="propostaWorkshop" class="form-workshops__form" method="post" action="../../forms/process_form_workshops.php">
			<input type="hidden" name="formProposta" value="yes">
			<input type="hidden" id="origemMensagem" name="origemMensagem" value="Página de solicitação de proposta do domínio marcosmayer.com.br">
			<input type="text" name="address" id="address" style="display:none">
			<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
			<ul class="form-workshops__ul">
				<fieldset class="form-workshops__fieldset">
					<legend class="form-workshops__legend">Dados de contato</legend>
					<li>
						<label for="nomeCompleto">Nome completo *</label>
						<input type="text" name="nomeCompleto" id="nomeCompleto" placeholder="Nome completo">
						<span class="error-message form-workshops__error"><?php echo $nomeCompletoErr; ?></span>
					</li>
					<li>
						<label for="email">E-mail *</label>
						<input type="email" name="email" id="email" placeholder="Seu e-mail">
						<span class="error-message form-workshops__error"><?php echo $emailErr; ?></span>
					</li>
					<li>
						<label for="telefone">Celular *</label>
						<input type="text" name="celular" id="celular" placeholder="(__) _____-_____">
						<span class="error-message form-workshops__error"><?php echo $celularErr; ?></span>
					</li>
					<li>
						<label for="empresa">Empresa | Organização *</label>
						<input type="text" name="empresa" id="empresa" placeholder="Sua empresa ou organização">
						<span class="error-message form-workshops__error"><?php echo $empresaErr; ?></span>
					</li>
				</fieldset>
				<fieldset class="form-workshops__fieldset">
					<legend class="form-workshops__legend">Dados do workshop</legend>
					<li>
						<label>Em qual(is) workshop(s) tem interesse?</label>
						<div class="form-workshops__checkbox-area">
							<input type="checkbox" name="workshopSelecionado[]" id="comunicacao" value="Conversas que Contam">
							<label for="case">Conversas que Contam</label>
						</div>
						<div class="form-workshops__checkbox-area">
							<input type="checkbox" name="workshopSelecionado[]" id="design-thinking" value="Design Thinking Experience">
							<label for="inovacao">Design Thinking Experience</label>
						</div>
					</li>
					<li>
						<label for="dataWorkshop">Já tem uma data prevista?</label>
						<input type="text" name="dataWorkshop" id="dataWorkshop" placeholder="__/__/____">
					</li>
					<li>
						<label for="local">Já tem um local definido?</label>
						<input type="text" name="local" id="local">
					</li>
					<li>
						<label for="participantes">Já tem uma previsão do número de participantes?</label>
						<input type="text" name="participantes" id="participantes">
					</li>
					<li>
						<label for="orcamento">Tem um orçamento estimado?</label>
						<input type="text" name="orcamento" id="orcamento">
					</li>
					<li>
						<label for="mensagem">Mensagem *</label>
						<textarea id="mensagem" name="mensagem"></textarea>
						<span class="error-message form-workshops__error"><?php echo $mensagemErr; ?></span>
					</li>
				</fieldset>
			</ul>
			<div class="form-workshops__button">
				<button type="submit">Enviar</button>
			</div>
		</form>
	</div>
</div>