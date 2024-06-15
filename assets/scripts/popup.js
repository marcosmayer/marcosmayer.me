// script.js
document.addEventListener("DOMContentLoaded", () => {
	const openPopupBtn = document.getElementById("openPopupBtn");
	const popup = document.getElementById("popup");
	const closeBtn = document.querySelector(".close");
	const contactForm = document.getElementById("contactForm");
	const successMessage = document.getElementById("successMessage");

	openPopupBtn.addEventListener("click", () => {
		popup.style.display = "flex";
	});

	closeBtn.addEventListener("click", () => {
		popup.style.display = "none";
	});

	window.addEventListener("click", (event) => {
		if (event.target === popup) {
			popup.style.display = "none";
		}
	});

	contactForm.addEventListener("submit", (event) => {
		event.preventDefault();

		// Simulate form submission
		fetch(contactForm.action, {
			method: "POST",
			body: new FormData(contactForm),
		})
			.then((response) => response.text())
			.then((data) => {
				console.log("Server response:", data); // Debugging line
				if (data === "success") {
					contactForm.style.display = "none";
					successMessage.classList.remove("hidden");
				} else {
					alert(data); // Show the error message from the server
				}
			})
			.catch((error) => {
				console.error("Fetch error:", error); // Debugging line
				alert("Erro ao enviar o formulário");
			});
	});
});
