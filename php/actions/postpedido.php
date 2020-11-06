<?php
include('../includes/conexaodb.php');

if(isset($_POST['nomecompleto']) && isset($_POST['endereco']) && isset($_POST['complemento']) 
&& isset($_POST['telefone']) && isset($_POST['descricaopedido']) && isset($_POST['quantidade'])){
    $nomecompleto = $_POST['nomecompleto'];
    $endereco = $_POST['endereco'];
    $complemento = $_POST['complemento'];
    $telefone = $_POST['telefone'];
    $descricaopedido = $_POST['descricaopedido'];
    $quantidade = $_POST['quantidade'];
    

    $sql = "INSERT into pedidos (nomecompleto, endereco, complemento, telefone, descricaopedido, quantidade) 
    values ('$nomecompleto', '$endereco', '$complemento', $telefone, '$descricaopedido', $quantidade);";
    $result = $conexao->query($sql);

    if ($result){
        echo "<script>alert('Pedido feito com sucesso!');</script>";
        echo "Redirecionando para a página principal...";
        header("Refresh:1;../../index.php");
    }
    else {
        echo ("<script>alert('Houve um erro ao processar seu pedido. Tente novamente mais tarde.');</script>");
        echo "Atualizando a página. Aguarde...";
        header("Refresh:0.50;../../produtos.php");
    }
    };

?>
