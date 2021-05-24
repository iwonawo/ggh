const openHook = document.getElementById("news-events");
const modal = document.querySelector(".site-header__modal");
const mainContent = document.getElementById("main");

openHook.addEventListener("click", () => {
	modal.classList.toggle("site-header__modal--is-active");
  openHook.classList.toggle("nav-item--is-active");
});

mainContent.addEventListener("click", function (event) {
	let modalOpen = document.querySelector(".site-header__modal--is-active");
	if (event.target != modalOpen) {
		modal.classList.remove("site-header__modal--is-active");
    openHook.classList.remove("nav-item--is-active");
	}
});