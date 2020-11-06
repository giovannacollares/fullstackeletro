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
    <link rel="stylesheet" href="./css/contato.css">
    <!--fontes-->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <!--api mapa-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/css/ol.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/build/ol.js"></script>
    <!--icones-->
    <script src="https://kit.fontawesome.com/0d3f1f7bd2.js" crossorigin="anonymous"></script>
</head>
<body>

<!--barra de navegação-->
<?php
include "./php/includes/nav.html";
?>
<!--formulário de contato-->
    <section class="contato">
        <div class="contatoimg"><img src="./imagens/contato/bannercontato.gif" alt="Fale Conosco e Tire suas Dúvidas" ></div>
        <div class="contatoform">
        <form method="post" action="./php/actions/postcontato.php">
            <div class="form-group">
                <label for="name">Nome</label><br>
                <input type="text" name="nome">
            </div>
            <div class="form-group">
            <label for="email">E-mail</label><br>
            <input type="text" name="email">
            </div>
            <div class="form-group">
            <label for="phonenumber">Telefone</label><br>
            <input type="number" name="telefone">
            </div>
            <div class="form-group">
            <label for="message">Deixe sua mensagem</label><br>
            <textarea type="text" name="mensagem"></textarea>
            </div>
            <input type="submit" name="submit" value="Enviar">
            </div>
        </form>
        </section>
    

<!--informações de contato-->
        <section class="contatoinfo">
        <table>
            <tr>
                <td>
                    <img src="./imagens/contato/whatsappicon.svg">
                    <p>(21) 9 4444-4444</p>
                </td>
                <td>
                    <img src="./imagens/contato/emailicon.svg" width="80px">
                    <p>contato@fseletro.com.br</p>
                </td>
            </tr>
        </table>
        </section>
<!--footer-->
<?php
include "./php/includes/footer.html";
?>

</body>
</html>
