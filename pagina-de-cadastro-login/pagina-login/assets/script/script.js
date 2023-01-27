function abrirMenu() {
    var menu = document.getElementById("menu_aberto");
    menu.setAttribute("style", "right:0px;");
    
    if(menu.style.right == "0px") {
        var criarOnclick = document.getElementById("menu");
        criarOnclick.setAttribute("onclick", "fecharMenu()");
    }
}

function fecharMenu() {
    var menu = document.getElementById("menu_aberto");
    menu.setAttribute("style", "right:-120px;");

    if(menu.style.right == "-120px"){
        var criarOnclick = document.getElementById("menu");
        criarOnclick.setAttribute("onclick", "abrirMenu()");
    }
}
function mostrarSenha() {
    const password = document.getElementById("mostrar_senha");
    const olho = document.getElementById("olho");
    const olho2 = document.getElementById("olho2");

    if(password.type === "password") {
        password.setAttribute("type", "text");
        olho.setAttribute("style", "display:none;");
        olho2.setAttribute("style", "display:block;");
    } else{
        password.setAttribute("type", "password");
        olho.setAttribute("style", "display:block;");
        olho2.setAttribute("style", "display:none;");
    }
}