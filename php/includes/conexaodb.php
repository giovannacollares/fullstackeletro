<?php

$servername ='localhost';
$username = 'root';
$password = 'recodepro2020';
$database = 'fseletro';

$conexao = mysqli_connect("localhost", "root", "recodepro2020", "fseletro", 3306);


// verificando a conexão
if ($conexao == false) {
    die("A conexão falhou" . mysqli_connect_error());
    var_dump($conexao);
}



?>

