<?php
session_start();
$dsn = "mysql:dbname=projeto_001;host:127.0.0.1";
$dbname = "root";
$dbpass = "";

if(isset($_POST['senha']) && empty($_POST['senha']) == false){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $pdo = new PDO($dsn, $dbname, $dbpass);
    $sql = $pdo->query("SELECT * FROM usuarios WHERE email = '$email';");

    if($sql->rowCount() == 0) {
        $pdo->query("INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')");
        header("Location: ../../../pagina-principal/index.php");
    }else {
        header("Location: ../../index.html");
    }

    
}else {
    header("Location: ../../index.html");
}
?>