<?php 

$host = "localhost";
$user = "root";
$password = "aluno123";
$database = "aula_php";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn) {
    die("Erro de conexão");
}

?>