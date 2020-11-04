-- MySQL dump 10.13  Distrib 8.0.21, for Linux (x86_64)
--
-- Host: localhost    Database: fseletro
-- ------------------------------------------------------
-- Server version	8.0.21-0ubuntu0.20.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedidos` (
  `idpedido` int NOT NULL AUTO_INCREMENT,
  `nomecompleto` varchar(45) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `telefone` bigint DEFAULT NULL,
  `produto` int DEFAULT NULL,
  `descricaopedido` varchar(150) NOT NULL,
  `quantidade` int NOT NULL,
  `valorunitario` decimal(8,2) NOT NULL,
  `valortotal` decimal(8,2) NOT NULL,
  PRIMARY KEY (`idpedido`),
  KEY `produto` (`produto`),
  CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`produto`) REFERENCES `produtos` (`idproduto`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` VALUES (1,'Maria Rafaela Mendes da Costa','Rua João Silverio, 245','Casa de fundos',1197867543,9,'Microondas Panasonic Digital com Funcao Kids 29L',2,369.89,739.78),(2,'Igor Carrão da Silva Albuquerque','Rua do Campinho, 27','',21980764532,5,'Fogao Electrolux Eletrico Digital com 5 Bocas 110V',1,5199.99,5199.99),(3,'Jesuel Almeida de Andrade','Rua Oscar Freire, 1876','apto 71',11965123111,3,'Geladeira Samsung Automatica Duplex 384L',2,2239.99,4479.98),(4,'Daniella Schwartz Machado','Avenida da Fundição, 1345','apartamento 302 bloco B',21997127234,8,'Lava Roupas Brastemp 9kg com Ciclo Tira Manchas 110V',3,2899.89,8699.67),(5,'Victor Heleno Brito Silva de Souza','Avenida das Margaridas, 762','Casa 4 Portaria 3',21965432009,7,'Lava Loucas Electrolux com 10 Servicos 110V',1,2899.99,2899.99);
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produtos` (
  `idproduto` int NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `preco` decimal(8,2) DEFAULT NULL,
  `precofinal` decimal(8,2) DEFAULT NULL,
  `imagens` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idproduto`),
  UNIQUE KEY `imagens` (`imagens`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'geladeira','Geladeira Consul Frost Free com Dispenser 540L',3499.99,2899.99,'/Imagens/Produtos/geladeiraconsul.png'),(2,'geladeira','Geladeira Refrigerador Electrolux Cycle Defrost 362L',2399.99,1560.90,'/Imagens/Produtos/geladeiraeletrolux.png'),(3,'geladeira','Geladeira Samsung Automatica Duplex 384L',3450.90,2239.99,'/Imagens/Produtos/geladeirasamsung.png'),(4,'fogao','Fogao Bosch Inox com 5 Bocas 110V ',1199.99,879.99,'/Imagens/Produtos/fogaobosch.png'),(5,'fogao','Fogao Electrolux Eletrico Digital com 5 Bocas 110V',6499.99,5199.99,'/Imagens/Produtos/fogaoelectrolux.png'),(6,'lavaloucas','Lava Loucas Brastemp Inox com Ciclo Pesado 110V',3259.99,2189.99,'/Imagens/Produtos/lavaloucasbrastemp.png'),(7,'lavaloucas','Lava Loucas Electrolux com 10 Servicos 110V',3289.99,2899.99,'/Imagens/Produtos/lavaloucaselectrolux.png'),(8,'lavaroupas','Lava Roupas Brastemp 9kg com Ciclo Tira Manchas 110V',3789.99,2899.89,'/Imagens/Produtos/lavaroupasbrastemp.png'),(9,'microondas','Microondas Panasonic Digital com Funcao Kids 29L',449.90,369.89,'./Imagens/Produtos/microondaspanasonic.png');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-24 16:02:59
