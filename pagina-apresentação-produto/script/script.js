function abrirMenu() {
    var menu = document.getElementById("menu_aberto");
    menu.setAttribute("style", "display:flex;");

    if(menu.style.display == "flex") {
        var outro = document.getElementById("menu");
        outro.setAttribute("onclick", "fecharMenu()");
    }
}
function fecharMenu() {
    var menu = document.getElementById("menu_aberto");
    menu.setAttribute("style", "display:none;");

    if(menu.style.display == "none") {
        var outro = document.getElementById("menu");
        outro.setAttribute("onclick", "abrirMenu()");
    }
}