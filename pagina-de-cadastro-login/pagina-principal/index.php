<?php
session_start();

if(isset($_SESSION['id']) && empty($_SESSION) == false) {
    echo "Área acessada";
}else {
    header("Location: ../pagina-login/index.html");
}
?>