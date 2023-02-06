// GET THE CLASS
const btn = document.querySelector('button.navbar-menu-button');
const menu = document.querySelector('.navbar-menu');

// ADD EVENT LISTENER
btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
});
