<?php
// Add error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connect_catsnack.php");

$nome = $_POST["NM_USUARIO"];
$email = $_POST["EMAIL_USUARIO"];
$senha = MD5($_POST["SENHA"]);

// Verificar se o email já está cadastrado
$comando_verificar = $pdo->prepare("SELECT COUNT(*) FROM usuario WHERE EMAIL_USUARIO = :EMAIL_USUARIO");
$comando_verificar->bindValue(":EMAIL_USUARIO", $email);
$comando_verificar->execute();
$resultado = $comando_verificar->fetchColumn();

if ($resultado > 0) {
    // O email já está cadastrado, exibir alerta
    echo '<script>alert("O email já foi cadastrado. Por favor, tente novamente com outro email.");</script>';
    echo '<script>window.location.href = "cadastro.html";</script>';
} else {
    // O email não está cadastrado, realizar a inserção
    $comando = $pdo->prepare("INSERT INTO usuario(NM_USUARIO, EMAIL_USUARIO, SENHA)
                             VALUES(:NM_USUARIO, :EMAIL_USUARIO, :SENHA)");
    $comando->bindValue(":NM_USUARIO", $nome);
    $comando->bindValue(":EMAIL_USUARIO", $email);
    $comando->bindValue(":SENHA", $senha);

    $comando->execute();

    header("Location: telalogin.html");
}
?>
