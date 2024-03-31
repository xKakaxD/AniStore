function toggleMenu() {
    var sidebar = document.getElementById("sidebar");
    var sidebarLeft = window.getComputedStyle(sidebar).getPropertyValue("left");
    var body = document.body;//tentando fazer a tela nao mover quando aberta a barra

    if (sidebarLeft === "-300px") {
        sidebar.style.left = "0"; // Mostra o menu lateral
        body.classList.add("sidebar-open");
        body.classList.remove("sidebar-closed");
    } else {
        sidebar.style.left = "-300px"; // Esconde o menu lateral
        body.classList.add("sidebar-closed");
        body.classList.remove("sidebar-open");
    }
}
