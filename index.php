<?php
$page = "Home &ndash; Dr Gustavo Souza";
include 'model/Connection.php';
include 'model/Servico.php';
try {
    $conn = Connection::open('database');
    Servico::setConnection($conn);
    $s = new Servico;
    $servicos = $s->resume("");
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
<?php include 'views/head.php'; ?>
<link rel="stylesheet" href="css/geral.css">
<style>
.single-cta h5 {
    margin-bottom: 4px;
}

#obs {
  padding-top: 20px;
  font-weight: bold;
  color: #000;
}
.wrap-title {
  padding-top: 20px;
  color: #fff;
  text-align: center;
}

.servicos span {
  font-weight: bold;
  font-size: 16px;
}

.servicos p, .servicos p a {
  color: #fff;
}

.wrapper-dent {
  padding-top: 4px;
}

.wrapper-dent-cont {
  padding: 20px;
}


.wrapper-dent-cont h5, .wrapper-dent-cont p{
  color: #fff;
}


.wrapper-dent-cont a {
  color: #fff;
  font-weight: bold;
}

.wrapper-dent-cont a:hover {
  color: #00aeef;
}

.wrap-serv {
  position: relative;
}

.wrap-serv img {
  width: 100%;
}

.servicos p a {
  font-weight: bold;
}

.servicos p a:hover {
  color: #00aeef;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  white-space: nowrap;
}

.overlay {
  opacity: 0;
  position: absolute;
  top: 0; 
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 20%;
  height: 20%;
  transition: .5s ease;
}

.wrap-serv:hover .overlay {
  opacity: 1;
	margin: 0px;
  width: 100%;
  height: 100%;
  right: 0;
}
</style>
<meta property="og:type" content="website"/>
<meta property="og:title" content="<?=$title?>"/>
<meta property="og:description" content="Dr. Gustavo Souza Especialista em Ortodontia e Mestrando em DTM e Dor Orofacial"/>
<meta property="og:url" content="http://gustavosouza.net/index.php"/>
<meta property="og:image" content="http://gustavosouza.net/img/logo-1.png"/>
</head>
<?php include 'views/header.html';?>
<?php include 'views/menu.html';?>
<?php include 'views/home.php'; ?>
<?php include 'views/footer.html';?>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/default-assets/home.js"></script>
</body>
</html>