document.addEventListener("scroll", function () {
	let elements = document.querySelectorAll("mark");
	elements.forEach(function (element) {
		let rect = element.getBoundingClientRect();
		if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
			element.classList.add("iniciar-animacao");
		}
	});
});

$(document).ready(function () {
	$(".menu-icon").click(function () {
		$(this).toggleClass("icon-active");
		$(".mobile-menu").toggleClass("menu-active");
	});

	// Header scroll class
	var header = $(".header");

	$(window).scroll(function () {
		if ($(window).scrollTop() > 0) {
			header.addClass("header--scrolled");
		} else {
			header.removeClass("header--scrolled");
		}
	});
});

AOS.init();
