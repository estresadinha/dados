<?php
 
$host = "localhost";
$user = "root";
$password = "";
$database = "sala";
 
$conexao = new PDO ("mysql:host=" . $host . ";dbname=". $database, $user, $password );
 
$select = "SELECT * FROM alunos";
 
$resultado = $conexao->query($select);
 
$dados = $resultado->fetchAll();
 
echo"<pre>";
var_dump($dados);
 
 
?>