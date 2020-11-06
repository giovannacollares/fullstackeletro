<?php

include('../includes/conexaodb.php');

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['mensagem'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT into contato (nome, email, telefone, mensagem) values ('$nome', '$email', $telefone, '$mensagem');";
    $result = $conexao->query($sql);

    if ($result){
        echo "<script>alert('Obrigada por nos contatar!');</script>";
        echo "Redirecionando para a página principal...";
        header("Refresh:1;../../index.php");
    }
    else {
        echo ("<script>alert('Houve um erro ao salvar sua mensagem. Tente novamente mais tarde.');</script>");
        echo "Atualizando a página. Aguarde...";
        header("Refresh:0.50;../../contato.php");
    }
    };
?>