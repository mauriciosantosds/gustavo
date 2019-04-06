 <!-- ***** Breadcrumb Area Start ***** -->
 <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/12.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title"><?=$page?></h2>
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
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?=$page?></li>
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
if (isset($id)) {
    echo '  <!-- Blog Details Area -->
    <div class="blog-details-area">
      <h1 class="post-title">'.$post->titulo.'</h1>
      <div class="post-meta">
        <a href="#"><i class="icon_clock_alt"></i>'.$post->postdata.'</a>
      </div>
      '.$post->conteudo.'
    </div>

    <!-- Post Share  -->
    <div class="post-share-area mb-30">
      <a href="#" class="facebook"><i class="fa fa-facebook"></i> Share</a>
      <a href="#" class="tweet"><i class="fa fa-twitter"></i> Tweet</a>
      <a href="#" class="google-plus"><i class="fa fa-google-plus"></i> Share</a>
      <a href="#" class="pinterest"><i class="fa fa-pinterest"></i> Share</a>
    </div>';
} else {
  foreach ($posts as $post) {
    $conteudo = preg_replace("/<.*?>/", " ", $post->conteudo);
    echo '<script>console.log("'.$conteudo.'");</script>';
    //Single Blog Item
    $html = '<div class="single-blog-item style-2 d-flex flex-wrap align-items-center mb-50">';
      //Blog Content
    $html .= '<div class="blog-content">
        <a href="orientacoes.php?id='.$post->id.'" class="post-title">'.$post->titulo.'</a>
        <p>'.$conteudo.' ...</p>
        <div class="post-meta">
          <a href="#"><i class="icon_clock_alt"></i>'.$post->postdata.'</a>
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