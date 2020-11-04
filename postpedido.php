<?php
include "conexaodb.php";

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
        echo "<script>alert('Pedido enviado com sucesso!');</script>";
        header("Location: produtos.php");
    }
    else {
        echo "<script>alert('Houve um erro ao salvar...');</script>";
    }
    };

?>
