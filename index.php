<?php
$page = "Home";
include 'model/Connection.php';
include 'model/Servico.php';
try {
    $conn = Connection::open('database');
    Servico::setConnection($conn);
    $s = new Servico;
    $servicos = $s->all("");
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
<?php include 'views/head.php'; ?>
<link rel="stylesheet" href="css/custom.css">
</head>
<?php include 'views/header.html';?>
<?php include 'views/menu.html';?>
<?php include 'views/home.php'; ?>
<?php include 'views/footer.html';?>
<script src="js/default-assets/home.js"></script>
</body>
</html>