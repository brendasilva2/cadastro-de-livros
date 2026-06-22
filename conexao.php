<?php 
$servidor = "localhost";
$usuario = "root";
$senha = '';
$bd = "livraria";

$conexao = new mysqli($servidor, $usuario, $senha, $bd);

if ($conexao -> connect_error) {
    echo "Ocorreu um erro!";
}
?>