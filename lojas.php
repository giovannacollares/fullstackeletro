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
    <link rel="stylesheet" href="./css/lojas.css">
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

<!--mapa-->
<div id="map" class="map"></div>
    <script type="text/javascript">
      var map = new ol.Map({
        target: 'map',
        layers: [
          new ol.layer.Tile({
            source: new ol.source.OSM()
          })
        ],
        view: new ol.View({
          center: ol.proj.fromLonLat([-45.30, -23.30]),
          zoom: 8
        })
      });
    </script>

<!--sessão de endereços-->
    <section class="lojas">
        <table>
          <tr>
            <td>
              <h3>Rio de Janeiro</h3>
              <p>Avenida das Américas, 2987</p>
              <p>16 Andar, Sala 9</p>
              <p>Barra da Tijuca</p>
              <p>Telefone: (21) 5555-5555</p>
            </td>
            <td>
              <h3>São Paulo</h3>
              <p>Avenida Eng. Armando de Arruda Pereira, 707</p>
              <p>Sala 7</p>
              <p>Jabaquara</p>
              <p>Telefone: (21) 5555-5555</p>
            </td>
            <td>
              <h3>Santos</h3>
              <p>Avenida Ana Costa, 1034</p>
              <p>7 Andar, Sala 9</p>
              <p>Gonzaga</p>
              <p>Telefone: (21) 5555-5555</p>
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