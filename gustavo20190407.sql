-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: gustavo_cms
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.16.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `conteudo` longtext,
  `postdata` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (1,'Orientações no uso do aparelho ortodôntico','<h2>Seguem abaixo algumas orientações para o uso do aparelho ortodôntico:</h2><ul><li>Escove os dentes imediatamente após as refeições e utilize o fio dental e a agulha “passa fio”. A escova interdental pode ser usada como auxilio na escovação diária;</li><li> Não utilize palitos, eles podem danificar o aparelho;</li><li> A partir do momento que se coloca aparelho fixo, o paciente não deve mais utilizar os dentes anteriores (da frente), para cortar alimentos, tais como: maçã, cenoura, sanduíches, carnes, balas, etc;</li><li>Evite alimentos que tenham muita fibra (abacaxi, manga, cana de açúcar, etc.), pois esses alimentos prejudicam muito a higiene do aparelho, o ideal é se fazer sucos com eles;</li><li> Evite alimentos pegajosos (chicletes, balas de goma, caramelo, etc.) ou duros (pé de moleque, rapadura, amendoim, castanhas, caranguejos, nozes, pistaches, milho de pipoca sem estourar, etc.), eles podem causar a quebra dos braquetes e atraso do tratamento;</li><li>É normal o paciente sentir uma sensibilidade nos 3 (três) primeiros dias após as ativações. Se o paciente não conseguir mastigar o alimento, recomendam-se alimentos líquidos e pastosos como sopas, caldos e purê. O nível de sensibilidade à dor varia de paciente para paciente, podendo o paciente fazer uso de analgésico (dipirona ou paracetamol);</li><li>Em caso de quebra do aparelho ortodôntico, entre em contato com o ortodontista;</li><li>No inicio, o aparelho fixo pode incomodar um pouco as bochechas, lábio e língua. Isso em função de uma reação normal do organismo a um “corpo estranho” novo, sendo que com tempo essa reação desaparece. Para evitar, utilize a cera de proteção fornecida pelo ortodontista;</li><li>Se o aparelho estiver machucando, não o remova por conta própria. Entre em contato com o ortodontista;</li><li>A frequência no uso do aparelho ortodôntico e as consultas marcadas para o ajuste são importantes para determinar o tempo de tratamento;<br> Para o tratamento ortodôntico, não existe período de férias ou finais de semana, por isso, o aparelho deve ser usado diariamente conforme o determinado pelo ortodontista;</li><li>Durante e ao final do seu tratamento, deverão ser solicitados periodicamente, exames radiográficos e/ou complementos para avaliação e controle;</li><li>O paciente deverá manter controles clínicos periódicos para a prevenção de cáries e doenças gengivais (ex: gengivite). Em caso de persistência dessas patologias, o tratamento ortodôntico será suspenso até que as mesmas estejam sob controle;</li><li>Se precisar alterar o horário da consulta, comunique-nos com antecedência mínima de 24 horas.</li></ul><p><em>Dr. Gustavo Souza</em></p>','2017-01-07 19:46:12'),(2,'Prevenção','<p>Antes de qualquer coisa, é importante achar um profissional com quem você se sinta à vontade. Na sua primeira visita, o dentista fará perguntas, buscando um pouco do histórico da sua saúde geral. Nas visitas seguintes, não deixe de informá-lo sobre qualquer mudança no seu estado de saúde.<p>O corpo humano funciona como uma engrenagem: cada órgão tem um papel a ser desenvolvido para o funcionamento perfeito. E, quando um “estraga”, o organismo como um todo, pode ser afetado. Quando a saúde bucal não está em harmonia, as bactérias e os fungos naturais dessa região podem proliferar e atingir outros órgãos. Cuidar dos dentes e da saúde bucal não é apenas questão de estética. De acordo com a American Dental Association (ADA), problemas bucais, como doença crônica gengival (periodontite), podem acarretar inclusive males no coração e nos pulmões.<p>Diversas doenças sistêmicas – aquelas que eventualmente afetam todo o organismo – podem ter origem em infecções orais. Um exemplo é a endocardite bacteriana, infecção grave das válvulas cardíacas ou das superfícies do coração, cuja bactéria pode ser proveniente de falta de cuidados com a higiene oral, como não escovar os dentes, e de doenças bucais existentes.<p>Conforme a Associação Brasileira de Odontologia, menos de 22% de adultos e 8% dos idosos têm as gengivas totalmente saudáveis.<p>Outro fator importante é que a saúde da boca é necessária para a pessoa desempenhar de forma adequada a mastigação e a deglutição. Além disso, a saúde bucal contribui para a aceitação social e elevação da autoestima, pois um sorriso harmônico significa não só saúde, mas também bem-estar.<p>Todos esses problemas podem ser tratados, por isso os dentistas alertam os pacientes sobre a importância da prevenção e de diagnósticos prematuros. Para tanto, é preciso visitar periodicamente o dentista.<p>Outro conselho é a alimentação saudável, com pouca ingestão de açúcares, esse é o primeiro passo para a saúde bucal. Há ainda outros fatores essenciais que devem ser levados em conta: higiene oral correta por meio de escovação dos dentes e da língua, uso de fio dental, para alcançar regiões que a escova não alcança, e uso de enxaguatório bucal, quando recomendado.<h2>Como é realizada a prevenção na Odontologia?</h2><p>As consultas odontológicas de rotina incluem a profilaxia dental e instruções de higiene que, de preferência, devem ser feitas a cada seis meses, o que ajuda a manter a saúde bucal e a saúde geral.<ul><li><strong>Profilaxia e limpeza dos dentes</strong><br>As revisões quase sempre incluem uma limpeza geral dos dentes. O dentista usará instrumentos especiais para raspar a região do dente localizada abaixo da linha da gengiva, removendo placa e tártaro que podem causar gengivite, cáries, mau hálito e outros problemas.<li><strong>Exame completo</strong><br>Seu dentista fará um exame cuidadoso de seus dentes, da sua gengiva e mucosa da boca, procurando sinais de enfermidades ou outros problemas. O objetivo é ajudar a manter a saúde da sua boca e, se houver problemas, identificá-los e tratá-los o mais rápido possível, antes que se agravem.<li><strong>Radiografías</strong><br>Dependendo da sua idade, dos riscos de doença e dos sintomas apresentados, seu dentista poderá recomendar que sejam tiradas radiografias, para ajudar no diagnóstico de problemas que não poderiam ser detectados de outra maneira, como, danos aos ossos do maxilar ou da mandíbula, dentes que sofreram trauma, abcessos, cistos ou tumores e cáries entre os dentes.</ul><h3>De quanto em quanto tempo devem ser feitas as consultas para prevenção de qualquer problema?</h3><p>As consultas de rotina, check-up e prevenção odontológicos devem ser realizadas de 6 em 6 meses, mesmo que, aparentemente, não haja nada de errado. Porém, se houver necessidade de tratamento, antes do tempo predeterminado, como um trauma dental, extração de dentes sisos, dor, etc., marque uma nova consulta.<div class=notice_info><div class=notice_content><p>Não se esqueça de fazer todas as perguntas que tiver antes do término da consulta. Essa é a oportunidade para esclarecer qualquer dúvida.</div></div><p><em>Fonte: SmileBH</em>','2017-01-07 18:54:26');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servico`
--

DROP TABLE IF EXISTS `servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagensurl` varchar(255) DEFAULT NULL,
  `conteudo` longtext,
  `titulo` varchar(255) DEFAULT NULL,
  `imgcapa` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servico`
--

LOCK TABLES `servico` WRITE;
/*!40000 ALTER TABLE `servico` DISABLE KEYS */;
INSERT INTO `servico` VALUES (1,'mini-implante-1.jpg','Os mini-implantes de titânio é uma alternativa a técnicas convencionais para conseguir uma ancoragem absoluta (evitando efeitos colaterais) no tratamento ortodôntico.\nSeu uso depende de um procedimento cirúrgico para o colocar e o remover, sendo pouco invasivo, não causa qualquer dor ou inconveniente ao paciente.','Mini-implantes','http://gustavosouza.net/wp-content/uploads/mini-implante-1.jpg'),(2,'protetor-bucal-1.jpg','O protetor bucal é um aparelho de plástico flexível ou material laminado usado nas práticas desportivas para evitar ferimentos na boca ou nos dentes. A Associação Americana de Odontologia (ADA) estima que um terço de todos os traumatismos bucais estão relacionados com práticas desportivas. O uso de protetor bucal poderia evitar mais de 200.000 ferimentos bucais a cada ano. *Fonte: Colgate','Moldeiras de proteção para prática esportiva','http://gustavosouza.net/wp-content/uploads/protetor-bucal-1.jpg'),(3,'dtm-1.jpg,dtm-1.jpg,dtm-2.jpg','A DTM é uma doença que causa sofrimento a milhões de pessoas ao redor do mundo, diminuindo a qualidade de vida e restringindo o convívio social. Um dos sintomas mais comuns da DTM são: dificuldade ou estalidos ao abrir a boca, não conseguir abrir ou fechar a boca e dores de cabeça mais de duas vezes por semana. Muitos pacientes apresentam este sintoma e não sabem que possa ser causado pela DTM. *Fonte: Antônio Sergio Guimarães','Diagnóstico e tratamento da Disfunção Temporomandibular (DTM) e Dor Orofacial','http://gustavosouza.net/wp-content/uploads/dtm-1.jpg'),(4,'limpeza-dentaria-inicial.jpg,Limpeza-dentária02.jpg,Limpeza-dentária03.jpg,Limpeza-dentária04.jpg','Com ou sem aparelho ortodôntico é ideal realizar limpeza dentária a cada 6 meses, podendo variar de paciente para paciente.\nA limpeza realizada é supra gengival com ultrassom, jato de bicarbonato e aplicação de flúor (se necessário).','Limpeza dentária','http://gustavosouza.net/wp-content/uploads/limpeza-dentaria-inicial-580x360.jpg'),(5,'clareamento-1.jpg','Método de consultório: realizado apenas no consultório odontológico.\nMétodo home: realizado dentro do consultório e/ou pelo paciente em casa, variando de caso para caso.','Clareamento dental','http://gustavosouza.net/wp-content/uploads/clareamento-1-300x186.jpg'),(6,'contencao-1.jpg,contencao-ortodontica.jpg,contencao-ortodontica02.jpg,contencao-2.jpg,contencao-1.jpg','Após a finalização do tratamento ortodôntico, há uma fase de contenção realizada com aparelhos removíveis e uma contenção fixa inferior, pois, os dentes mantêm uma tendência à recidiva. O aparelho de contenção garante o completo sucesso na conclusão do tratamento.','Contenção Ortodôntica','http://gustavosouza.net/wp-content/uploads/contencao-1-300x186.jpg'),(7,'aparelhos-interceptativos.jpg','São aparelhos fixos e removíveis que podem realizar pequenas movimentações dentárias, inibir ou estimular o desenvolvimento das bases ósseas, aumentar e expandir o arco dentário, recuperar e manter espaços perdidos e remover hábitos deletérios (sucção de dedo e interposição lingual).','Aparelhos Interceptativos','http://gustavosouza.net/wp-content/uploads/aparelhos-interceptativos.jpg'),(8,'aparelho-auto-ligavel.jpg','Esse aparelho dispensa o uso de borrachinhas ou amarrilhos para prender o arco (fio) no bráquete, proporcionando uma maior força para mover o dente, pois, o sistema tem apenas uma “portinha” que escorrega e prende o fio na peça, mantendo o fio ativado durante mais tempo, podendo aumentar o tempo entre as consultas.','Aparelhos Autoligáveis','http://gustavosouza.net/wp-content/uploads/aparelho-auto-ligavel.jpg'),(9,'alinhador-estetico-1.jpg,alinhador-estetico-3.jpg,alinhador-estetico-2.jpg,alinhador-estetico-1.jpg','São placas transparentes e removíveis 100% estéticas, confeccionadas para alinhar os dentes anteriores, superiores e inferiores. Os alinhadores são indicados para as pessoas que não querem ou não podem ter aparelhos colados aos dentes, devem ser utilizados constantemente, removendo somente para: comer, beber líquidos que comprometam as placas e ao fazer a higiene bucal.','Aparelhos Alinhadores Estéticos','http://gustavosouza.net/wp-content/uploads/alinhador-estetico-1.jpg'),(10,'aparelho-lingual-1.jpg,aparelho-lingual-1.jpg,aparelho-lingual-2.jpg,aparelho-lingual-3.jpg','Esse tipo de aparelho é colado na face lingual (na parte de trás dos dentes) tornando-se invisível. Por isso este método é atualmente a solução ortodôntica mais estética que existe.\nSua técnica de colagem é extremamente precisa combinada com o uso de arcos pré-formados, produzindo excelentes resultados clínicos.\nOs pacientes se acostumam com os bráquetes em aproximadamente um mês.','Aparelhos linguais','http://gustavosouza.net/wp-content/uploads/aparelho-lingual-1.jpg'),(11,'3-1.jpg,aparelho-metalico02.jpg,aparelho-metalico03.jpg,aparelho-fixo-metalico-2.jpg','Proporcionam o alinhamento e nivelamento dos dentes. Você pode escolher diferentes cores para serem colocadas nos bráquetes (borrachinhas), o que é ótimo para sua expressão pessoal, auto-estima, vaidade e diversão. Você poderá se sentir à vontade em selecionar uma nova cor a cada visita.','Aparelhos Fixos Metálicos','http://gustavosouza.net/wp-content/uploads/3-1.jpg'),(12,'aparelho-estetico-inicial-1.jpg,aparelho-estetico02.jpg,aparelho-estetico-3.jpg,aparelho-estetico-4.jpg,aparelho-estetico-5.jpg','Os aparelhos fixos estéticos que utilizamos são feitos de um material translúcido. Eles são mais procurados por pacientes adultos e sâo a melhor opção para quem quer mais discrição, com um toque de charme durante o tratamento ortodôntico. Utilizamos somente bráquetes cerâmicos monocristalinos (safira) e policristalinos proporcionando inteira satisfação estética e segurança ao paciente.','Aparelhos Fixos Estéticos','http://gustavosouza.net/wp-content/uploads/aparelho-estetico-inicial-1-564x360.jpg');
/*!40000 ALTER TABLE `servico` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-07 16:50:34
