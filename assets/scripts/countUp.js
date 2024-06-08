function animateCount(id, target) {
	let count = 0;
	const speed = 10; // Ajuste a velocidade conforme necessário
	const increment = target / 100; // Número de incrementos

	function updateCount() {
		count += increment;
		if (count < target) {
			document.getElementById(id).innerText = Math.ceil(count);
			setTimeout(updateCount, speed);
		} else {
			document.getElementById(id).innerText = target;
		}
	}

	updateCount();
}

// Chamar a função de animação para cada contagem
animateCount("contagem-palavras", contagemPalavras);
animateCount("contagem-caracteres-com-espacos", contagemCaracteresComEspacos);
animateCount("contagem-caracteres-sem-espacos", contagemCaracteresSemEspacos);
