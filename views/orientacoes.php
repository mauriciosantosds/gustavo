 <?php if (isset($id)) { ?>
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2"></script>
 <?php } ?>
 <!-- ***** Breadcrumb Area Start ***** -->
 <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/12.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <?php if(isset($id)) { ?>
              <h2 class="title"><?= $post->titulo ?></h2>
          <?php } else { ?>
              <h2 class="title">Orientações</h2>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <div class="breadcumb--con">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
              <?php if (isset($id)) {?>
                <li class="breadcrumb-item" aria-current="page"><a href="orientacoes.php">Orientações</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?=$post->titulo?></li>
                <?php } else { ?>
                  <li class="breadcrumb-item active" aria-current="page">Orientações</li>
                <?php } ?>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <!-- *****Blog Area Start ***** -->
  <section class="dento-blog-area mt-50">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8">
<?php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
if (isset($id)) {
  $postdata = strftime('%d de %B de %Y', strtotime($post->postdata));
  $page = $post->titulo;
    echo '  <!-- Blog Details Area -->
    <article class="blog-details-area">
      
      <div class="post-meta">
        <a href="#"><i class="icon_calendar"></i> '.$postdata.'</a>
      </div>
      '.$post->conteudo.'
    </article>

    <!-- Post Share  -->
    <div class="post-share-area mb-30">
      <a href="http://www.facebook.com/share.php?u=http://gustavosouza.net/orientacoes.php?id='.$post->id.'&t='.$post->titulo.'" target="_blank" class="facebook"><i class="fa fa-facebook"></i> Compartilhar</a>
      <a href="https://twitter.com/intent/tweet?url=http://gustavosouza.net/orientacoes.php?id='.$post->id.'&text='.$post->titulo.'" class="tweet" target="_blank"><i class="fa fa-twitter"></i> Tweet</a>
    </div>';
} else {
  foreach ($posts as $post) {
    $postdata = strftime('%d de %B de %Y', strtotime($post->postdata));
    $date = new DateTime($post->postdata);
    //echo $date->format('d')." de ".$date->format("F")." de ".$date->format("Y");
    $conteudo = preg_replace("/<.*?>/", " ", $post->conteudo);
    //Single Blog Item
    $html = '<div class="single-blog-item style-2 d-flex flex-wrap align-items-center mb-50">';
      //Blog Content
    $html .= '<div class="blog-content">
        <a href="orientacoes.php?id='.$post->id.'" class="post-title">'.$post->titulo.'</a>
        <p>'.$conteudo.' ...</p>
        <div class="post-meta">
          <a href="orientacoes.php?id='.$post->id.'"><i class="icon_calendar"></i> '.$postdata.'</a>
        </div>
      </div>
    </div>';
    echo $html;
  }
}

?>         

          <!-- Pagination -->
          <!-- <nav class="dento-pagination mb-100">
              <ul class="pagination">
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </nav>-->
            <!-- Pagination -->
        </div>

        <!-- Dento Sidebar Area -->
        <div class="col-12 col-lg-4">
            <div class="dento-sidebar">
                <div class="contact-information">
                    <h5>Endereço</h5>
                    <p>Rua Thieres Botelho, nº 160, Araxá-MG</p>

                    <h5><i class='fa fa-user'></i> Dr Gustavo Souza</h5>
                    <p>CROMG 45.845</p>

                    <h5>Telefone:</h5>
                    <p>(34) 3661 3490</p>

                    <h5>E-mail:</h5>
                    <p class="mb-0">contato@gustavosouza.net</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- *****Blog Area End ***** -->