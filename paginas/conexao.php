<?php

require_once("config.php");

$conexao = mysqli_connect($host, $usuario, $senha, $nome);

if (!$conexao) {
    echo ("Conexão com o banco de dados falhou!!". mysqli_connect_error());
} else echo ("Conectado com sucesso!");

?>