<?php
require "conexao.php";

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$resumo = $_POST["resumo"];
$genero = $_POST["genero"];
$data = $_POST["data"];

$capa = $_FILES["capa"];
$caminho_capa = "assets/" .$capa["name"];
move_uploaded_file($capa["tmp_name"], $caminho_capa);

$sql = "INSERT INTO livros (titulo, resumo, capa, autor, data_publicacao, genero)

VALUES (
'$titulo',
'$resumo',
'$caminho_capa',
'$autor',
'$data', 
'$genero'
)";

$conexao -> query($sql);

if ($conexao -> query($sql)) {
    echo "Livro salvo com sucesso";
} else {
    echo "Erro ao salvar: " . $conexao -> error;
}
?> 