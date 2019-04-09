<?php
$page = " &ndash; Dr Gustavo Souza";
include 'model/Connection.php';
include 'model/Post.php';
try {
    $conn = Connection::open('database');
    Post::setConnection($conn);
    $p = new Post;
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $post = $p->find($id);
        $page = $post->titulo . $page;
    } else {
        $posts = $p->resume("");
        $page = "Orientações" . $page;
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
    padding: 10px 0 20px 0;
    list-style: square;
}
.blog-details-area h3 {
    margin-bottom: 20px;
}
.notice_info {
    border-width: 1px;
    border-style: solid;
    padding: 0 20px;
    margin-bottom: 30px;
    display: block;
    width: 100%;
}
.notice_content {
    position: relative;
    padding: 36px 0 16px;
}
/*estilos orientacoes*/
</style>
<?php if (isset($id)) { ?>
    <meta property="og:url"                content="http://gustavosouza.net/orientacoes.php?id=<?=$post->id?>" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="<?= $post->titulo ?>" />
    <meta property="og:image"              content="http://gustavosouza.net/wp-content/uploads/dr-gustavo-2-300x300.jpg" />
    <meta property="og:description"        content="Dr. Gustavo Souza Especialista em Ortodontia e Mestrando em DTM e Dor Orofacial" />

<?php } else { ?>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?=$title?>"/>
    <meta property="og:description" content="Dr. Gustavo Souza Especialista em Ortodontia e Mestrando em DTM e Dor Orofacial"/>
    <meta property="og:url" content="http://gustavosouza.net/orientacoes.php"/>
    <meta property="og:image" content="http://gustavosouza.net/img/logo-1.png"/>
<?php } ?>
</head>
<?php include 'views/header.html';?>
<?php include 'views/menu.html';?>
<?php include 'views/orientacoes.php'; ?>
<?php include 'views/footer.html';?>
</body>
</html>