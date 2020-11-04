<?php

$servername ='localhost';
$username = 'root';
$password = '';
$database = 'fseletro';

$conexao = mysqli_connect("localhost", "root", "", "fseletro", 3306);


// verificando a conexão
if ($conexao == false) {
    die("A conexão falhou" . mysqli_connect_error());
    var_dump($conexao);
}



?>

