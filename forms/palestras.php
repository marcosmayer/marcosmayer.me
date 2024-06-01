<?php

$nomeCompletoErr = $emailErr = $celularErr = $empresaErr = $mensagemErr = "";
$origemMensagem = $nomeCompleto = $email = $celular = $empresa = $dataPalestra = $local = $publico = $orcamento = $mensagem = "";
$noGo = $successProposta = "";

?>

<div class="form-palestras">
	<div class="form-palestras__container">
		<div class="form-palestras__title">Posso te mandar mais informações?</div>
		<form name="propostaPalestra" id="propostaPalestra" class="form-palestras__form" method="post" action="../../forms/process_form.php">
			<input type="hidden" name="formProposta" value="yes">
			<input type="hidden" id="origemMensagem" name="origemMensagem" value="Página de solicitação de proposta do domínio marcosmayer.com.br">
			<input type="text" name="address" id="address" style="display:none">
			<ul class="form-palestras__ul">
				<fieldset class="form-palestras__fieldset">
					<legend class="form-palestras__legend">Dados de contato</legend>
					<li>
						<label for="nomeCompleto">Nome completo *</label>
						<input type="text" name="nomeCompleto" id="nomeCompleto" placeholder="Nome completo">
						<span class="error-message form-palestras__error"><?php echo $nomeCompletoErr; ?></span>
					</li>
					<li>
						<label for="email">E-mail *</label>
						<input type="email" name="email" id="email" placeholder="Seu e-mail">
						<span class="error-message form-palestras__error"><?php echo $emailErr; ?></span>
					</li>
					<li>
						<label for="telefone">Celular *</label>
						<input type="text" name="celular" id="celular" placeholder="(__) _____-_____">
						<span class="error-message form-palestras__error"><?php echo $celularErr; ?></span>
					</li>
					<li>
						<label for="empresa">Empresa | Organização *</label>
						<input type="text" name="empresa" id="empresa" placeholder="Sua empresa ou organização">
						<span class="error-message form-palestras__error"><?php echo $empresaErr; ?></span>
					</li>
				</fieldset>
				<fieldset class="form-palestras__fieldset">
					<legend class="form-palestras__legend">Dados da palestra</legend>
					<li>
						<label>Em qual(is) palestra(s) tem interesse?</label>
						<div class="form-palestras__checkbox-area">
							<input type="checkbox" name="palestraSelecionada[]" id="case" value="Seja o Seu CASE">
							<label for="case">Seja o Seu C.A.S.E.</label>
						</div>
						<div class="form-palestras__checkbox-area">
							<input type="checkbox" name="palestraSelecionada[]" id="inovacao" value="Inovação Estratégica: Liderando o Futuro, Quebrando Paradigmas">
							<label for="inovacao">Inovação Estratégica: Liderando o Futuro, Quebrando Paradigmas</label>
						</div>
						<div class="form-palestras__checkbox-area">
							<input type="checkbox" name="palestraSelecionada[]" id="futuro" value="Futuro e Tendências: Cocriando a Realidade em um Mundo em Transformação">
							<label for="futuro">Futuro e Tendências: Cocriando a Realidade em um Mundo em Transformação</label>
						</div>
					</li>
					<li>
						<label for="dataPalestra">Já tem uma data prevista?</label>
						<input type="text" name="dataPalestra" id="dataPalestra" placeholder="__/__/____">
					</li>
					<li>
						<label for="local">Já tem um local definido?</label>
						<input type="text" name="local" id="local">
					</li>
					<li>
						<label for="publico">Já tem uma previsão de público?</label>
						<input type="text" name="publico" id="publico">
					</li>
					<li>
						<label for="orcamento">Tem um orçamento estimado?</label>
						<input type="text" name="orcamento" id="orcamento">
					</li>
					<li>
						<label for="mensagem">Mensagem *</label>
						<textarea id="mensagem" name="mensagem"></textarea>
						<span class="error-message form-palestras__error"><?php echo $mensagemErr; ?></span>
					</li>
				</fieldset>
			</ul>
			<div class="form-palestras__button">
				<button type="submit">Enviar</button>
			</div>
		</form>
	</div>
</div>