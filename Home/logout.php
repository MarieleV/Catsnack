<?php
session_start();
session_destroy();
header('Location:../logincadastro/cadastro.html');
exit;
?>