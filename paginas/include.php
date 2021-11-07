<?php

require_once("conexao.php");

$nome = $_GET['nome'];
$curso = $_GET['curso'];
$tipo_conteudo = $_GET['tipo_conteudo'];
$conteudo = $_GET['conteudo'];



$conulta = "INSERT INTO `formulario` (`nome`, `curso`, `tipo_conteudo`, `conteudo`) VALUES ('$nome', '$curso', '$tipo_conteudo', '$conteudo')";

$retorno = mysqli_query($conexao, $conulta);

if($retorno) {
    echo ("Registro realizado com sucesso!!!");
}

?>