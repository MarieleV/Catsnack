<?php
include("connect_catsnack.php");

$email = $_POST["EMAIL_USUARIO"];
$set_senha = $_POST["SENHA"];

$comando = $pdo->prepare("SELECT CD_USUARIO, SENHA FROM usuario WHERE EMAIL_USUARIO = :EMAIL_USUARIO");

$comando->bindValue(":EMAIL_USUARIO", $email);

$comando->execute();


if ($comando->rowCount() == 1) {
    $resultado = $comando->fetch();

    if ($resultado['SENHA'] == MD5($set_senha)) {
        session_start();
        $_SESSION['CD_USUARIO'] = $resultado['CD_USUARIO'];
        $_SESSION['loggedin'] = true;

        header("location:../Home/home.html");

    } else {
        echo "<script>alert('Email ou senha incorretos'); window.location='telalogin.html';</script>";
        exit();
    }
} else {
    echo "<script>alert('Email ou senha incorretos'); window.location='telalogin.html';</script>";
    exit();
}

unset($comando);
unset($pdo);

?>
