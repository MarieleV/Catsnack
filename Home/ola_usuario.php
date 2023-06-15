<?php
// Verifica se o usuário está logado (isso pode variar dependendo da sua implementação de autenticação)
if (isset($_SESSION['CD_USUARIO'])) {
    // Obtém o nome do usuário logado a partir do banco de dados
    $idUsuario = $_SESSION['CD_USUARIO'];
    $conexao = new PDO("mysql:host=localhost;dbname=catsnack", "root", "");
    $consulta = $conexao->prepare("SELECT NM_USUARIO FROM usuario WHERE CD_USUARIO = :id");
    $consulta->bindParam(':id', $idUsuario);
    $consulta->execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    $nomeUsuario = $resultado['NM_USUARIO'];

    // Exibe o nome do usuário na tela
    echo "Bem-vindo, " . $nomeUsuario;
} else {
    echo "Usuário não está logado.";
}
?>
