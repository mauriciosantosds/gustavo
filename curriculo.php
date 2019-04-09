<?php
$page = "Currículo &ndash; Dr Gustavo Souza";
include 'views/head.php'; ?>
<link rel="stylesheet" href="css/geral.css">
<style>
.lista-curr li {
	margin-left: 10px;
    padding: 20px 0 20px 0;
    list-style: none;
}
.lista-curr li::before {
    font-family: FontAwesome;
    float: left;
    margin-left: -1.4em;
    content: "\f00c";
    color: #00aeef;
    transform: scale(1, 1);
    position: absolute;
    margin-top: 2px;
}
</style>
<meta property="og:type" content="website"/>
<meta property="og:title" content="<?=$title?>"/>
<meta property="og:description" content="Dr. Gustavo Souza Especialista em Ortodontia e Mestrando em DTM e Dor Orofacial"/>
<meta property="og:url" content="http://gustavosouza.net/curriculo.php"/>
<meta property="og:image" content="http://gustavosouza.net/img/logo-1.png"/>
</head>
<?php include 'views/header.html';?>
<?php include 'views/menu.html';?>
<?php include 'views/curriculo.php'; ?>
<?php include 'views/footer.html';?>
</body>
</html>