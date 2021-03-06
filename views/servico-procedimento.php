 <!-- ***** Breadcrumb Area Start ***** -->
 <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/12.jpg);">
     <div class="container h-100">
         <div class="row h-100 align-items-center">
             <div class="col-12">
                <?php if(isset($id)) { ?>
                    <h2 class="title"><?= $servico->titulo ?></h2>
                <?php } else { ?>
                    <h2 class="title">Serviços e Procedimentos</h2>
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
                         <?php if(isset($id)) {?>
                            <li class="breadcrumb-item"><a href="servicos-procedimentos.php"> Serviços e Procedimentos</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $servico->titulo ?></li>
                            <?php } else { ?>
                                <li class="breadcrumb-item active">Serviços e Procedimentos</li>
                            <?php } ?>
                     </ol>
                 </nav>
             </div>
         </div>
     </div>
 </div>
 <!-- ***** Breadcrumb Area End ***** -->

 <!-- ***** Services Area Start ***** -->
 <section class="dento-services-area mt-50 mb-50">
     <div class="container">
         <div class="row">
         <?php 
      if (isset($id)) {
        $imagens = explode(",", $servico->imagensurl);
        $contador = 0;
        foreach ($imagens as $img) {
          if ($contador == 0) {
            echo '<div class="col-lg-8 col-12">
            <div id="gallery">
             <div class="row">
            <div class="col-lg-12">
                <div class="img-principal">
                          <a href="img/servicos-procedimentos/'.$img.'">
                            <img src="img/servicos-procedimentos/'.$img.'" alt="">
                          </a>
                        </div>
                      </div>  
                    </div><div class="row">';
          } else if ($contador >= 1) {
            echo '
                    <div class="col-lg-3">
                      <div class="img-menor">
                        <a href="img/servicos-procedimentos/'.$img.'">
                          <img src="img/servicos-procedimentos/'.$img.'" alt="">
                        </a>
                      </div>
                    </div>';
          }
          if ($contador%4==0) {
            echo "</div><div class='row'>";
          }
          $contador++;
        }
          echo '</div></div><p class="sp-text sp-text-un">'.$servico->conteudo.
          '</p></div>
             <!-- Dento Sidebar Area -->
             <div class="col-12 col-lg-4">
                 <div class="dento-sidebar">
                     <div class="contact-information">
                         <h5>Endereço</h5>
                         <p>Rua Thieres Botelho, nº 160, Araxá-MG</p>

                         <h5>Telefone:</h5>
                         <p>(34) 3661 3490</p>

                         <h5>E-mail:</h5>
                         <p class="mb-0">contato@gustavosouza.net</p>
                     </div>
                 </div>
             </div>';  
      } else {
            $contador = 0; 
            foreach($servicos as $serv) {
                  $contador++;
                  echo '<div class="cod-12 col-md-4">
                      <div class="wrap-serv">
                          <img src="'.$serv->imgcapa.'" alt="">
                          <a href="servicos-procedimentos.php?id='.$serv->id.'">
                              <div class="overlay">
                                  <div class="text">
                                      <img src="img/core-img/s1.png" alt="">
                                  </div>
                              </div>
                          </a>
                      </div>
                      <h6 class="wrap-title-sp">'.$serv->titulo.'</h6>
                      <p class="sp-text">'.$serv->conteudo.'<span>...</span> <a href="servicos-procedimentos.php?id='.$serv->id.'">Saiba mais</a></p> 
                  </div>';
                  if ($contador%3 == 0) {
                      echo "</div><div class='row'>";
                  }
            }
              echo "</div>
                  </div>";
          } ?>

 </section>
 <!-- ***** Services Area End ***** -->
