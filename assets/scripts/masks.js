document.addEventListener("DOMContentLoaded", function () {
	const celular = document.getElementById("celular");
	const dataPalestra = document.getElementById("dataPalestra");
	const cpf = document.getElementById("cpf");
	const cep = document.getElementById("cep");
	const estado = document.getElementById("estado");

	// Máscara para celular
	Inputmask({
		mask: "(99) 99999-9999",
	}).mask(celular);

	// Máscara para data de dataPalestra
	Inputmask({
		mask: "99/99/9999",
	}).mask(dataPalestra);

	// Máscara para CPF
	Inputmask({
		mask: "999.999.999-99",
	}).mask(cpf);

	// Máscara para CEP
	Inputmask({
		mask: "99999-999",
	}).mask(cep);

	// Máscara para estado
	Inputmask({
		mask: "AA",
	}).mask(estado);

	// Convertendo para maiúsculas
	document.getElementById("estado").addEventListener("input", function () {
		this.value = this.value.toUpperCase();
	});
});
