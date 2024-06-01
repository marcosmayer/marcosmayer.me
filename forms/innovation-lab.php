<?php

$nomeCompletoErr = $emailErr = $celularErr = $empresaErr = $mensagemErr = "";
$origemMensagem = $nomeCompleto = $email = $celular = $empresa = $dataInnovationLab = $participantes = $mensagem = "";
$noGo = $successProposta = "";

?>

<div class="form-innovation-lab">
	<div class="form-innovation-lab__container">
		<div class="form-innovation-lab__title">Posso te mandar mais informações?</div>
		<form name="propostaInnovationLab" id="propostaInnovationLab" class="form-innovation-lab__form" method="post" action="../../forms/process_form_innovation-lab.php">
			<input type="hidden" name="formProposta" value="yes">
			<input type="hidden" id="origemMensagem" name="origemMensagem" value="Página de solicitação de proposta do domínio marcosmayer.com.br">
			<input type="text" name="address" id="address" style="display:none">
			<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
			<ul class="form-innovation-lab__ul">
				<fieldset class="form-innovation-lab__fieldset">
					<legend class="form-innovation-lab__legend">Dados de contato</legend>
					<li>
						<label for="nomeCompleto">Nome completo *</label>
						<input type="text" name="nomeCompleto" id="nomeCompleto" placeholder="Nome completo">
						<span class="error-message form-innovation-lab__error"><?php echo $nomeCompletoErr; ?></span>
					</li>
					<li>
						<label for="email">E-mail *</label>
						<input type="email" name="email" id="email" placeholder="Seu e-mail">
						<span class="error-message form-innovation-lab__error"><?php echo $emailErr; ?></span>
					</li>
					<li>
						<label for="telefone">Celular *</label>
						<input type="text" name="celular" id="celular" placeholder="(__) _____-_____">
						<span class="error-message form-innovation-lab__error"><?php echo $celularErr; ?></span>
					</li>
					<li>
						<label for="empresa">Empresa | Organização *</label>
						<input type="text" name="empresa" id="empresa" placeholder="Sua empresa ou organização">
						<span class="error-message form-innovation-lab__error"><?php echo $empresaErr; ?></span>
					</li>
				</fieldset>
				<fieldset class="form-innovation-lab__fieldset">
					<legend class="form-innovation-lab__legend">Dados do Innovation Lab</legend>
					<li>
						<label for="dataInnovationLab">Já tem uma data aproximada prevista?</label>
						<input type="text" name="dataInnovationLab" id="dataInnovationLab" placeholder="__/__/____">
					</li>
					<li>
						<label for="participantes">Já tem uma previsão do número de participantes?</label>
						<input type="text" name="participantes" id="participantes">
					</li>
					<li>
						<label for="mensagem">Mensagem *</label>
						<textarea id="mensagem" name="mensagem"></textarea>
						<span class="error-message form-innovation-lab__error"><?php echo $mensagemErr; ?></span>
					</li>
				</fieldset>
			</ul>
			<div class="form-innovation-lab__button">
				<button type="submit">Enviar</button>
			</div>
		</form>
	</div>
</div>