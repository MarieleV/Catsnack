<?php
// Add error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connect_catsnack.php");

var_dump($pdo);

$nome = $_POST["NM_USUARIO"];
$email = $_POST["EMAIL_USUARIO"];
$senha = MD5($_POST["SENHA"]);

$comando = $pdo->prepare("INSERT INTO usuario(NM_USUARIO,EMAIL_USUARIO,SENHA)
                                 VALUES(:NM_USUARIO,:EMAIL_USUARIO,:SENHA)");
$comando->bindValue(":NM_USUARIO", $nome);
$comando->bindValue(":EMAIL_USUARIO", $email);
$comando->bindValue(":SENHA", $senha);

$comando->execute();

header("Location:telalogin.html");
?>