document.addEventListener("DOMContentLoaded", function () {
	const celular = document.getElementById("celular");
	const dataWorkshop = document.getElementById("dataWorkshop");

	// Máscara para celular
	Inputmask({
		mask: "(99) 99999-9999",
	}).mask(celular);

	// Máscara para data de dataWorkshop
	Inputmask({
		mask: "99/99/9999",
	}).mask(dataWorkshop);
});
