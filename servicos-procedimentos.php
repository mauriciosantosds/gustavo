<?php
$page = "Serviços e Procedimentos";
include 'model/Connection.php';
include 'model/Servico.php';
try {
    $conn = Connection::open('database');
    Servico::setConnection($conn);
    $s = new Servico;
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $servico = $s->find($id);
    } else {
        $servicos = $s->resume("");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
<?php include 'views/head.php'; ?>
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/photobox.css">
<link rel="stylesheet" href="css/photobox.ie.css">
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