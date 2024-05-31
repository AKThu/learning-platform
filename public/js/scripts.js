const userMenuToggle = document.querySelector("#user-menu-toggle")
const userMenu = document.querySelector("#user-menu")

userMenuToggle.addEventListener('click', handleToggle);

let shown = false;

function handleToggle() {
    userMenu.classList.toggle("hidden")
}