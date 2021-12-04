-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db01
-- ------------------------------------------------------
-- Server version	5.7.31

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
-- Table structure for table `tb_noticias`
--

DROP TABLE IF EXISTS `tb_noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_noticias` (
  `idnoticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(256) NOT NULL,
  `desnoticia` varchar(2500) NOT NULL,
  `imagem` mediumblob NOT NULL,
  `dtcadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idnoticia`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_noticias`
--

LOCK TABLES `tb_noticias` WRITE;
/*!40000 ALTER TABLE `tb_noticias` DISABLE KEYS */;
INSERT INTO `tb_noticias` VALUES (1,'Novo Snapdragon ultrapassa 1 milhÃ£o de pontos no AnTuTu','Na competiÃ§Ã£o pelo tÃ­tulo de smartphone com o SoC mais rÃ¡pido, certamente alguns flagships da prÃ³xima geraÃ§Ã£o Android que chegarem ao mercado em 2022 virÃ£o com pontuaÃ§Ãµes superiores a um milhÃ£o na ferramenta de benchmarking AnTuTu. Um dos responsÃ¡veis por essa performance â€“ o chipset Snapdragon 8 Gen 1 da Qualcomm â€“ ultrapassou essa marca, segundo um conhecido vazador.\r\n                Divulgado no Weibo, na quarta-feira (24), pelo blogueiro chinÃªs Technology at 8 oâ€™clock, o Snapdragon 8 Gen 1, que jÃ¡ foi chamado de Snapdragon 898, conseguiu impressionantes 1.035.020 pontos nos testes da ferramenta, ou seja, mais de 200 mil do que a geraÃ§Ã£o anterior da Qualcomm, que atÃ© hoje se mantÃ©m na faixa de 800-850 mil pontos.','','2021-11-28 18:37:51'),(2,'6 consoles para comprar na Black Friday 2021','Entre os itens mais visados, os populares consoles de video games devem aparecer com preÃ§os mais em conta para aliviar o bolso de quem estÃ¡ aguardando um bom tempo para adquirir uma mÃ¡quina de nova geraÃ§Ã£o, e agora pode ser a oportunidade perfeita para vocÃª jÃ¡ ir se preparando.\r\n                A Black Friday 2021 estÃ¡ prevista para ocorrer em 26 de novembro e Ã© a melhor Ã©poca do ano para comprar consoles, como um Nintendo Switch, PS5, Xbox Series ou consoles da geraÃ§Ã£o anterior como PS4 e Xbox One, especialmente por conta dos preÃ§os salgados que foram impactados pela pandemia.','','2021-11-28 18:41:32'),(3,'5 streaming players para adquirir na Black Friday 2021','A principal vantagem do gadget Ã© a praticidade. Por serem pequenos e leves, Ã© possÃ­vel levÃ¡-los para qualquer lugar e garantir filmes e sÃ©ries sem maiores preocupaÃ§Ãµes. Para quem planeja umas fÃ©rias na praia, por exemplo, vai poder se divertir com a famÃ­lia, assistindo a filmes e sÃ©ries a qualquer hora.\r\n                Outro detalhe importante Ã© conferir quais sÃ£o os aplicativos compatÃ­veis com cada modelo. Embora os principais serviÃ§os de streaming possam estar disponÃ­veis na maioria, alguns dos mais recentes, como o Star+, ainda pode nÃ£o aparecer em alguns. Por isso, vale a pena conferir o que cada um costuma oferecer.','','2021-11-28 18:43:15');
/*!40000 ALTER TABLE `tb_noticias` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-04  8:59:10
