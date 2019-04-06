<?php
$page = "Orientações";
include 'model/Connection.php';
include 'model/Post.php';
try {
    $conn = Connection::open('database');
    Post::setConnection($conn);
    $p = new Post;
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $post = $p->find($id);
    } else {
        $posts = $p->resume("");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
<?php include 'views/head.php'; ?>
<link rel="stylesheet" href="css/geral.css">
<style>
/*estilos orientacoes*/
.dento-sidebar {
  padding-bottom: 20px;
}
.blog-details-area ul li {
    padding: 10px 0 10px 0;
    list-style: square;
}
/*estilos orientacoes*/
</style>
</head>
<?php include 'views/header.html';?>
<?php include 'views/menu.html';?>
<?php include 'views/orientacoes.php'; ?>
<?php include 'views/footer.html';?>
</body>
</html>