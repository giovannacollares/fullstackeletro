<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Eletro</title>

    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!--css-->
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/produto.css">
    <!--fontes-->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <!--scripts-->
    <script src="./js/funcoes.js"></script>
    <!--icones-->
    <script src="https://kit.fontawesome.com/0d3f1f7bd2.js" crossorigin="anonymous"></script>
</head>
<body>

<!--barra de navegação-->
<?php 
include "./php/includes/nav.html";
?>

<!--sessão de categorias-->
<section class="productsList">
                        <div class="categorias" >
                            <ul>
                                <li onclick="exibir_todos('todos')">Todas Categorias (9)</li>
                                <li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
                                <li onclick="exibir_categoria('fogao')">Fogões (2)</li>
                                <li onclick="exibir_categoria('lavaroupas')">Lava-Roupas (1)</li>
                                <li onclick="exibir_categoria('microondas')">Micro-ondas (1)</li>
                                <li onclick="exibir_categoria('lavaloucas')">Lava-Louças (2)</li>
                            </ul>
                        </div>
                        <div class="order">
                        <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formulariopedido">
                            Faça seu pedido!
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="formulariopedido" tabindex="-1" role="dialog" aria-labelledby="formulário de pedidos" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tformulariopedido">Faça seu pedido:</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm">
                                    <div class="modal-body">
                                    <form method="post" action="./php/actions/postpedido.php">
                                    <label>Nome Completo:</label><br>
                                    <input type="text" name="nomecompleto"><br>
                                    <label>Endereço:</label><br>
                                    <input type="text" name="endereco"><br>
                                    <label>Complemento:</label><br>
                                    <input type="text" name="complemento"><br>
                                    <label>Telefone:</label><br>
                                    <input type="number" name="telefone"><br>
                                </div>
                                </div>
                                <div class="col-sm ml-auto">
                                <br>
                                <label>Escolha seu produto:</label>
                                <select name="descricaopedido" class="custom-select">
                                    <option selected>Produtos</option>
                                    <option value="Geladeira Consul Frost Free com Dispenser 540L">Geladeira Consul Frost Free com Dispenser 540L</option>
                                    <option value="Geladeira Refrigerador Electrolux Cycle Defrost 362L">Geladeira Refrigerador Electrolux Cycle Defrost 362L</option>
                                    <option value="Geladeira Samsung Automatica Duplex 384L">Geladeira Samsung Automatica Duplex 384L</option>
                                    <option value="Fogao Bosch Inox com 5 Bocas 110V">Fogão Bosch Inox com 5 Bocas 110V</option>
                                    <option value="Fogao Electrolux Eletrico Digital com 5 Bocas 110V">Fogão Electrolux Eletrico Digital com 5 Bocas 110V</option>
                                    <option value="Lava Loucas Brastemp Inox com Ciclo Pesado 110V">Lava Louças Brastemp Inox com Ciclo Pesado 110V</option>
                                    <option value="Lava Loucas Electrolux com 10 Servicos 110V">Lava Louças Electrolux com 10 Servicos 110V</option>
                                    <option value="Lava Roupas Brastemp 9kg com Ciclo Tira Manchas 110V">Lava Roupas Brastemp 9kg com Ciclo Tira Manchas 110V</option>
                                    <option value="Microondas Panasonic Digital com Funcao Kids 29L">Microondas Panasonic Digital com Funcao Kids 29L</option>
                                </select>

                                <label>Selecione a quantidade:</label>
                                <select name="quantidade" class="custom-select">
                                    <option selected>Quantidade</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                                    <button type="submit" name="submit" class="btn btn-primary">Enviar pedido</button>
                                </form>
                                </div>
                                </div>
                            </div>
                            </div>
                            </div>
                        </div>
                </section>

            <!--Produtos Disponíveis-->
                    <section class="products">

                        <?php

                            include "./php/includes/conexaodb.php";

                            $sql = "select * from produtos";
                            $result = $conexao->query($sql);
                            
                            if($result->num_rows > 0){
                                while($rows = $result->fetch_assoc()){
                        
                        ?>

                            <div class="products-box" id="<?php echo $rows['categoria'];?>">
                            <img src="<?php echo $rows['imagens'];?>" alt="<?php echo $rows['descricao'];?>" width="120" onclick="destaque(this)">
                            <div class="description"><?php echo $rows['descricao'];?></div>
                            <hr>
                            <div class="description"><strike>R$<?php echo $rows['preco'];?></strike></div>
                            <div class="price">R$<?php echo $rows['precofinal'];?><br></div>
                            </div>
                        
                        <?php
                                    }
                                } else {
                                    echo "Nenhum produto cadastrado!";
                                
                                }
                        ?>
                        </section>
    <!--footer-->

    <?php 
    include "./php/includes/footer.html";
    ?>
</body>

</html>
