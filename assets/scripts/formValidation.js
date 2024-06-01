document.addEventListener("DOMContentLoaded", function () {
	const fields = [
		{
			id: "nomeCompleto",
			regex: /^[a-zA-ZÀ-ú\s]+$/,
			errorMessage: "Insira um nome válido.",
		},
		{
			id: "email",
			regex: /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,10})+$/,
			errorMessage: "Insira um e-mail válido.",
		},
		{
			id: "celular",
			regex: /^(\+55\s?)?(?:\((\d{2})\)|\d{2})[-.\s]?(\d{4,5}[-.\s]?\d{4})$/,
			errorMessage: "Insira um número de celular válido.",
		},
		{
			id: "dataPalestra",
			regex: /^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/(19[0-9]{2}|20[0-9]{2})$/,
			errorMessage: "Insira uma data prevista válida.",
		},
		{
			id: "empresa",
			regex: /^.{1,}$/,
			errorMessage: "Este campo não pode estar vazio.",
		},
		{
			id: "mensagem",
			regex: /^.{1,}$/,
			errorMessage: "Este campo não pode estar vazio.",
		},
	];

	fields.forEach((field) => {
		const inputElement = document.getElementById(field.id);
		const errorMessageElement = inputElement.nextElementSibling;

		inputElement.addEventListener("blur", function () {
			if (!field.regex.test(inputElement.value)) {
				errorMessageElement.textContent = field.errorMessage;
				inputElement.style.border = "1px solid red";
				return; // Termina a execução do manipulador de eventos para este campo
			}

			// Se chegamos até aqui, o campo é válido
			errorMessageElement.textContent = "";
			inputElement.style.border = "1px solid #c4b898"; // ou qualquer estilo que você queira para um campo válido
		});
	});

	const form = document.getElementById("propostaPalestra");

	form.addEventListener("submit", function (event) {
		let isValid = true; // Supomos inicialmente que todos os campos são válidos

		fields.forEach((field) => {
			const inputElement = document.getElementById(field.id);
			const errorMessageElement = inputElement.nextElementSibling;

			// Executar todas as validações aqui, assim como você fez no evento "blur"
			if (!field.regex.test(inputElement.value)) {
				errorMessageElement.textContent = field.errorMessage;
				inputElement.style.border = "1px solid red";
				isValid = false; // Invalida o formulário
			}
		});

		if (!isValid) {
			event.preventDefault(); // Previne o envio do formulário se houver erros
		}
	});
});
