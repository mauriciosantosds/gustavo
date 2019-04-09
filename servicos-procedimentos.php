<?php
$page = " &ndash; Dr Gustavo Souza";
include 'model/Connection.php';
include 'model/Servico.php';
try {
    $conn = Connection::open('database');
    Servico::setConnection($conn);
    $s = new Servico;
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $servico = $s->find($id);
        $page = $servico->titulo . $page;
    } else {
        $page = "Serviços e Procedimentos" . $page;
        $servicos = $s->resume("");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
<?php include 'views/head.php'; ?>
<link rel="stylesheet" href="css/geral.css">
<style>
/*estilos servicos e procedimentos ini*/
.wrap-title-sp {
  padding-top: 20px;
  text-align: center;
}
.sp-text a {
  font-weight: bold;
}

.sp-text a:hover {
  color:#00aeef;
}

.sp-text-un {
  padding-top: 20px;
}

.img-principal {
  padding: 25px;
}

.img-principal img {
  display: block;
  margin: 0 auto;
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

@media only screen and (max-width: 990px) {
  .img-menor {
    padding: 10px;
  }
}


/*estilos servicos e procedimentos fim*/
</style>
<link rel="stylesheet" href="css/photobox.css">
<link rel="stylesheet" href="css/photobox.ie.css">
<meta property="og:type" content="website"/>
<meta property="og:title" content="<?=$title?>"/>
<meta property="og:description" content="Dr. Gustavo Souza Especialista em Ortodontia e Mestrando em DTM e Dor Orofacial"/>
<meta property="og:url" content="http://gustavosouza.net/servicos-procedimentos.php"/>
<meta property="og:image" content="http://gustavosouza.net/img/logo-1.png"/>
</head>
<?php include 'views/header.html';?>
<?php include 'views/menu.html';?>
<?php include 'views/servico-procedimento.php'; ?>
<?php include 'views/footer.html';?>
<script src="js/jquery.photobox.js"></script>
<script>
    // applying photobox on a `gallery` element which has lots of thumbnails links.
    // Passing options object as well:
    //-----------------------------------------------
    $('#gallery').photobox('a',{ time:0,thumbs:true });

    // re-initialize the photbox DOM (does what Document ready does)
    //-----------------------------------------------
    //$('#gallery').photobox('prepareDOM');
</script>
</body>
</html>