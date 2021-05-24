const menuIcon = document.querySelector(".mobile-menu-icon");
const menu = document.querySelector(".site-navigation-mobile");
const main = document.getElementById("main");

menuIcon.addEventListener("click", () => {
	menu.classList.toggle("site-navigation-mobile--is-active");
});

main.addEventListener("click", function (event) {
	let menuOpen = document.querySelector(".site-navigation-mobile--is-active");
	if (event.target != menuOpen) {
		menu.classList.remove("site-navigation-mobile--is-active");
	}
});