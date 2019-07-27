<!-- ***** Welcome Area Start ***** -->
<section class="welcome-area">
<!-- Welcome Slides -->
   <!--  <div class="row">
        <div class="col-12"> -->
        <div class="box-welcome-slides">
            <ul class="welcome-slides bxslider">
                <li>
                    <img src="img/imagem-1.jpg" alt="">
                </li>
                <li>
                    <img src="img/imagem-2.jpg" alt="">
                </li>
                <li>
                    <img src="img/imagem-3.jpg" alt="">
                </li>
            </ul>
        </div>
        <!-- </div>
    </div> -->

</section>
<!-- ***** Welcome Area End ***** -->

<!-- Cool Facts Area Start -->
<section class="dento-cta-area">
<div class="container">
<div class="row">
<!-- Cool Facts Area -->
<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-cta text-center mt-50 mb-100">
    <i class="icon_mobile"></i>
    <h4>Fale conosco</h4>
    <h5>Telefone (34) 3661 3490</h5>
        <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5534999503490"><h5>WhatsApp (34) 99950-3490</h5></a>
    </div>
</div>

<!-- Cool Facts Area -->
<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-cta text-center mt-50 mb-100">
    <i class="icon_mail"></i>
    <h4>Envie sua mensagem</h4>
    <h5>contato@gustavosouza.net</h5>
    </div>
</div>

<!-- Cool Facts Area -->
<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-cta text-center mt-50 mb-100">
    <i class="icon_map"></i>
    <h4>Visite nossa clínica</h4>
    <h5>Rua Thieres Botelho, nº 160</h5>
    </div>
</div>
</div>
</div>
</section>
<!-- Cool Facts Area End -->

<div class="container">
<div class="dento-border clearfix"></div>
</div>

<!-- ***** Dento Dentist Area Start ***** -->
<section class="dentist-area section-padding-100-0">
<div class="container">
    <!-- Section Heading -->
    <!-- <div class="row">
    <div class="col-12">
        <div class="section-heading text-center">
        <h2>Our Dentist</h2>
        <div class="line"></div>
        </div>
    </div>
    </div> -->

    <div class="row">
    <!-- Single Dentist Area -->
    <div class="col-12 col-sm-6 col-md-6">
        <div class="wrapper-dent">
                <div class="wrapper-dent-cont bg-gradient-overlay">
                <h5>Procedimentos</h5>
                <p>Clareamento dental, diagnóstico e tratamento da Disfunção Temporo Mandibular (DTM) e da Dor Orofacial, mini-implantes, aparelhos ortodônticos e moldeiras de proteção para prática esportiva.</p>
                <a href="servicos-procedimentos.php">Saiba mais</a>
                </div>
        </div>
    </div>

    <!-- Single Dentist Area -->
    <div class="col-12 col-sm-6 col-md-6">
        <div class="wrapper-dent">
            <div class="wrapper-dent-cont bg-gradient-overlay">
                <h5>Marque sua consulta</h5>
                <p>Entre em contato conosco e agende o horário de sua primeira consulta. Avaliaremos sua necessidade do uso de aparelho ortodôntico, além de realizarmos a triagem para outras especialidades.</p>
                <a href="fale-conosco.php">Saiba mais</a>    
            </div>
        </div>
    </div>
</div>
</section>
<!-- ***** Dento Dentist Area End ***** -->

<!-- Dento Pricing Table Area Start -->
<section class="dento-pricing-table-area section-padding-100">
    <div class="container">
        <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
            <div class="section-heading text-center">
            <h2>Horário de funcionamento</h2>
            <div class="line"></div>
            </div>
        </div>
        </div>
    
        <div class="row">
        <div class="col-12">
            <div class="dento-price-table table-responsive">
            <table class="table table-borderless mb-0">
                <thead>
                <tr>
                    <th scope="col">Dia</th>
                    <th scope="col">Hora</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">Segunda – Sexta-feira</th>
                    <td>08:00 – 18:00</td>
                </tr>
                <tr>
                    <th scope="row">Sábado</th>
                    <td>Fechado</td>
                </tr>
                <tr>
                    <th scope="row">Domingo</th>
                    <td>Fechado</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>      
        </div>
        <div class="row">
            <div class="col-12">
                    <p id="obs">* Consultas poderão ser agendadas em outros horários e aos sábados, de acordo com a disponibilidade do dentista e do paciente.</p>
            </div>
        </div>
    </div>
    </section>
    <!-- Dento Pricing Table Area End -->

<!-- Dento Service Area Start -->
<section class="servicos section-padding-100-0 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('img/bg-img/13.jpg');">
<div class="container">
<div class="row">
<!-- Service Content -->
    <div class="col-12">
        <!-- Section Heading -->
        <div class="section-heading text-center white">
            <h2>Nossos serviços</h2>
            <div class="line"></div>
        </div>
    </div>
</div>
<div class="row">
    <div id="serv-carousel" class="owl-carousel owl-theme">
        <?php foreach($servicos as $serv) {
        echo '<div class="item">
            <div class="wrap-serv">
                <img src="'.$serv->imgcapa.'" alt="">
                <a href="#">
                    <div class="overlay">
                        <div class="text">
                            <img src="img/core-img/s1.png" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <h6 class="wrap-title">'.$serv->titulo.'</h6>
            <p>'.$serv->conteudo.'<span>...</span> <a href="servicos-procedimentos.php?id='.$serv->id.'">Saiba mais</a></p> 
        </div>';
        }
        ?>
    </div>
</div>
<!-- <div class="row">
   <div class="teste owl-carousel owl-theme">
        <div class="item">
                <div class="wrap-serv">
                    <img src="http://gustavosouza.net/wp-content/uploads/mini-implante-1.jpg" alt="">
                    <a href="#">
                        <div class="overlay">
                            <div class="text">
                                <img src="img/core-img/s1.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <h6 class="wrap-title">Mini-implantes</h6> 
        </div>
        <div class="item">
            <div class="wrap-serv">
                <img src="http://gustavosouza.net/wp-content/uploads/protetor-bucal-1.jpg" alt="">
                <a href="#">
                    <div class="overlay">
                        <div class="text">
                            <img src="img/core-img/s1.png" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <h6 class="wrap-title">Moldeiras de proteção para prática esportiva</h6> 
        </div>
        <div class="item">
            <div class="wrap-serv">
                <img src="http://gustavosouza.net/wp-content/uploads/dtm-1.jpg" alt="">
                <a href="#">
                    <div class="overlay">
                        <div class="text">
                            <img src="img/core-img/s1.png" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <h6 class="wrap-title">Diagnóstico e tratamento da Disfunção Temporomandibular (DTM) e Dor Orofacial</h6> 
        </div>  
    </div>
    

        
</div> -->

</div>
</section>
<!-- Dento Service Area End -->

<!-- Especialidades Area Start -->
<!-- <section class="book-an-oppointment-area section-padding-100 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('img/bg-img/12.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center white">
                    <h2>Especialidades estão à sua disposição, fale conosco</h2>
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Especialidades Area End -->



<!-- ***** Testimonials Area Start ***** -->
<section class="testimonials-area section-padding-100">
<div class="container">
<div class="row">
<div class="col-12">
    <!-- Testimonials Slides -->
    <div class="testimonials-slides owl-carousel">
    <!-- Single Testimonials Slide -->
    <div class="single-testimonial-slide d-flex align-items-center">
        <!-- Thumbnail -->
        <div class="testimonial-thumb">
        <img src="http://gustavosouza.net/wp-content/uploads/dr-gustavo-2-300x300.jpg" alt="">
        </div>
        <!-- Content -->
        <div class="testimonial-content">
        <h5>O que devo fazer se estiver sentindo dores nos dentes?</h5>
        <h6>“Qualquer tipo de dor é um indicador do nosso organismo, mostrando 
            que algo está fora da normalidade, devendo o paciente entrar em 
            contato com o dentista. Entretanto, após a manutenção ortodôntica, 
            pode haver um desconforto dentário durante alguns dias, o que é 
            explicado pelo Ortodontista.”</h6>
        </div>
    </div>

    <!-- Single Testimonials Slide -->
    <div class="single-testimonial-slide d-flex align-items-center">
        <!-- Thumbnail -->
        <div class="testimonial-thumb">
        <img src="http://gustavosouza.net/wp-content/uploads/dr-gustavo-2-300x300.jpg" alt="">
        </div>
        <!-- Content -->
        <div class="testimonial-content">
        <h5>Em quais outras áreas atua além de Aparelhos Ortodônticos?</h5>
            
        <h6>“Realizo triagem para outras especialidades, também ofereço 
            diagnóstico e tratamento da Disfunção Temporomandibular (DTM) e 
            Dor Orofacial, clareamento dental (método de consultório e método home), 
            além de moldeiras de proteção para prática esportiva.”</h6>
        </div>
    </div>

    <!-- Single Testimonials Slide -->
    <div class="single-testimonial-slide d-flex align-items-center">
        <!-- Thumbnail -->
        <div class="testimonial-thumb">
        <img src="http://gustavosouza.net/wp-content/uploads/dr-gustavo-2-300x300.jpg" alt="">
        </div>
        <!-- Content -->
        <div class="testimonial-content">
        <h5>Quais são os horários de funcionamento?</h5>
        <h6>“ O consultório está em funcionamento de segunda a sexta, das 08:00h às 18:00h, entretanto consultas poderão ser agendadas em outros horários e aos sábados, de acordo com a disponibilidade do dentista e do paciente.”</h6>
        </div>
    </div>
    </div>
</div>
</div>
</div>
</section>
<!-- ***** Testimonials Area End ***** -->