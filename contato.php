<?php

include('conexaodb.php');

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['mensagem'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $sql = "insert into contato (nome, email, mensagem) values ('$nome', '$email', $telefone, '$mensagem');";
    $result = $conexao->query($sql);

    if ($result){
        echo "Inserido com sucesso!";
        //header("Refresh:5;conexaodb.php");
    }
    else {
        echo "Houve um erro ao salvar...";
    }
    };
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Contato</title>
        <link rel="stylesheet" href="./CSS/contato.css">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>

        <body>
            <!--Menu Inicial-->            
            <?php 
            include('menu.html');
            ?>


            <!--Fim do Menu Inicial-->
            <br><br><br><br><br><br><br>
            <!--Formulário de Contato-->
                <section class="contactSec">
                <div class="contact-image"><img src="./Imagens/Contato/bannercontato.gif" alt="Fale Conosco e Tire suas Dúvidas" ></div>
                <div class="contact-form">
                <form method="post" action="">
                    <label for="name">Nome</label>
                    <br>
                    <input type="text" name="nome">
                    <br><br>
                    <label for="email">E-mail</label>
                    <br>
                    <input type="text" name="email">
                    <br><br>
                    <label for="phonenumber">Telefone</label>
                    <br>
                    <input type="number" name="telefone">
                    <br><br>
                    <label for="message">Deixe sua mensagem</label>
                    <br>
                    <textarea type="text" name="mensagem"></textarea>
                    <br><br>
                    <input type="submit" name="submit" value="Enviar">
                    <br><br>
                    </div>
                    <hr>
                    <br>
                </form>
                </section>
            <!--Fim de Formulário de Contato-->       

            <!--Informações de Contato-->
                <section class="contactInfo">
                <table>
                    <tr>
                        <td>
                            <img src="./Imagens/Contato/whatsappicon.svg">
                            <p>(21) 9 4444-4444</p>
                        </td>
                        <td>
                            <img src="./Imagens/Contato/emailicon.svg" width="80px">
                            <p>contato@fseletro.com.br</p>
                        </td>
                    </tr>
                </table>
                <hr>
                </section>
            <!--Fim de Informações de Contato-->
                <br> <br> <br> <br> <br>  <br> 
            <!--Formas de Pagamento-->
            <section class="payment">
                <h4>Formas de Pagamento:</h4>
                <img src="./Imagens/pagamento.png" alt="Formas de Pagamento">
            </section>
            <!--Fim de Formas de Pagamento-->

            <br> <br> <br>

            <!--Copyright-->
            <footer>
            <h5>&copy RecodePro</h5> 
            </footer>
            <!--Fim do Copyright-->
            
        </body>
</html>