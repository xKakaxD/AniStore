function toggleMenu() {
    var sidebar = document.getElementById("sidebar");
    var sidebarLeft = window.getComputedStyle(sidebar).getPropertyValue("left");

    if (sidebarLeft === "-301px") {
        sidebar.style.left = "0"; // Mostra o menu lateral
    } else {
        sidebar.style.left = "-301px"; // Esconde o menu lateral
    }
}
