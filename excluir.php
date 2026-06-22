<?php
require "conexao.php";

$id = $_POST["id"];
$sql = "DELETE FROM livros WHERE id = $id";
$conexao -> query($sql);
?>