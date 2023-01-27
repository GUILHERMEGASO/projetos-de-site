<?php 
session_start();
$dsn = "mysql:dbname=projeto_001;host:127.0.0.1";
$dbname = "root";
$dbpass = "";

if(isset($_POST['senha'] ) && empty($_POST['senha']) == false) {
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $pdo = new PDO($dsn, $dbname, $dbpass);
    $sql = $pdo->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

    if($sql->rowCount() > 0) {
        $dado = $sql->fetch();

        $_SESSION['id'] = $dado['id'];

        header("Location: ../../../pagina-principal/index.php");
    }else {
        header("Location: ../../index.html");
    }
}else {
    header("Location: ../../index.html");
}

?>