<!-- ***** Welcome Area Start ***** -->
<section class="welcome-area">
<!-- Welcome Slides -->
    <div class="row">
<div class="box-welcome">
            <div class="welcome-slides owl-carousel owl-theme">
                <div class="item">
                    <div class="wrap-serv">
                        <!-- <img src="img/imagem-1.jpg" alt=""> -->
                    </div>
                </div>
                <div class="item">
                    <div class="wrap-serv"  style="background-color: blue; height: 300px; ">
                        <div style="/*background-image: url(../img/imagem-1.jpg); height: 100%;*/"></div>
                       <!--  <img src="img/imagem-2.jpg" alt=""> -->
                    </div>
                </div>
                <div class="item">
                    <div class="wrap-serv">
                       <!--  <img src="img/imagem-3.jpg" alt=""> -->
                    </div>
                </div>
            </div>
   
</div>
    </div>

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
    <h5>(34) 3661 3490</h5>
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
                <a href="#">Saiba mais</a>
                </div>
        </div>
    </div>

    <!-- Single Dentist Area -->
    <div class="col-12 col-sm-6 col-md-6">
        <div class="wrapper-dent">
            <div class="wrapper-dent-cont bg-gradient-overlay">
                <h5>Marque sua consulta</h5>
                <p>Entre em contato conosco e agende o horário de sua primeira consulta. Avaliaremos sua necessidade do uso de aparelho ortodôntico, além de realizarmos a triagem para outras especialidades.</p>
                <a href="#">Saiba mais</a>    
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
<section class="section-padding-100-0 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('img/bg-img/13.jpg');">
<div class="container">
<div class="row">
<!-- Service Content -->
    <div class="col-12">
        <!-- Section Heading -->
        <div class="section-heading text-center white">
            <h2>Our Services</h2>
            <div class="line"></div>
        </div>
    </div>
</div>
<div class="row">
    <div id="serv-carousel" class="teste owl-carousel owl-theme">
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

<!-- Book An Oppointment Area Start -->
<section class="book-an-oppointment-area section-padding-100 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('img/bg-img/12.jpg');">
<div class="container">
<div class="row">
<!-- Section Heading -->
<div class="col-12">
    <div class="section-heading text-center white">
    <h2>Book An Apointment</h2>
    <div class="line"></div>
    </div>
</div>
</div>

<div class="row">
<div class="col-12">
    <!-- Appointment Form -->
    <div class="appointment-form">
    <form action="#" method="post">
        <div class="row">
        <div class="col-md-6">
            <div class="form-group mb-30">
            <input type="text" name="your-name" class="form-control" placeholder="Your Name" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-30">
            <input type="text" name="your-phone" class="form-control" placeholder="Your Phone" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-30">
            <input type="email" name="your-email" class="form-control" placeholder="Your Email" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-30">
            <input type="text" name="your-address" class="form-control" placeholder="Your Address">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-30">
            <select name="your-scheldule" class="form-control">
                <option value="Choose Your Scheldule">Choose Your Scheldule</option>
                <option value="9 AM to 10 AM">9 AM to 10 AM</option>
                <option value="11 AM to 12 PM">11 AM to 12 PM</option>
                <option value="2 PM to 4 PM">2 PM to 4 PM</option>
                <option value="8 PM to 10 PM">8 PM to 10 PM</option>
            </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-30">
            <select name="your-time" class="form-control">
                <option value="Choose Your Time">Choose Your Scheldule</option>
                <option value="9 AM to 10 AM">9 AM to 10 AM</option>
                <option value="11 AM to 12 PM">11 AM to 12 PM</option>
                <option value="2 PM to 4 PM">2 PM to 4 PM</option>
                <option value="8 PM to 10 PM">8 PM to 10 PM</option>
            </select>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group mb-30">
            <textarea name="your-message" class="form-control" placeholder="Your Message"></textarea>
            </div>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn dento-btn">Booking Now</button>
        </div>
        </div>
    </form>
    </div>
</div>
</div>
</div>
</section>
<!-- Book An Oppointment Area End -->



<!-- ***** Testimonials Area Start ***** -->
<section class="testimonials-area section-padding-100 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('img/bg-img/7.jpg');">
<div class="container">
<div class="row">
<div class="col-12">
    <!-- Testimonials Slides -->
    <div class="testimonials-slides owl-carousel">
    <!-- Single Testimonials Slide -->
    <div class="single-testimonial-slide d-flex align-items-center">
        <!-- Thumbnail -->
        <div class="testimonial-thumb">
        <img src="./img/bg-img/8.jpg" alt="">
        </div>
        <!-- Content -->
        <div class="testimonial-content">
        <h5>“I'd been avoiding the dentist for years due to bad experiences. A reminder SMS is sent the working day beforehand. I also had a call confirming appointment. I have been a patient ever since. My dentist is very reassuring and
            very helpful. Excellent treatment and advice.”</h5>
        <h6>Arron Ramsey</h6>
        <p>Dental Patient</p>
        </div>
    </div>

    <!-- Single Testimonials Slide -->
    <div class="single-testimonial-slide d-flex align-items-center">
        <!-- Thumbnail -->
        <div class="testimonial-thumb">
        <img src="./img/bg-img/8.jpg" alt="">
        </div>
        <!-- Content -->
        <div class="testimonial-content">
        <h5>“I'd been avoiding the dentist for years due to bad experiences. A reminder SMS is sent the working day beforehand. I also had a call confirming appointment. I have been a patient ever since. My dentist is very reassuring and
            very helpful. Excellent treatment and advice.”</h5>
        <h6>Arron Ramsey</h6>
        <p>Dental Patient</p>
        </div>
    </div>

    <!-- Single Testimonials Slide -->
    <div class="single-testimonial-slide d-flex align-items-center">
        <!-- Thumbnail -->
        <div class="testimonial-thumb">
        <img src="./img/bg-img/8.jpg" alt="">
        </div>
        <!-- Content -->
        <div class="testimonial-content">
        <h5>“I'd been avoiding the dentist for years due to bad experiences. A reminder SMS is sent the working day beforehand. I also had a call confirming appointment. I have been a patient ever since. My dentist is very reassuring and
            very helpful. Excellent treatment and advice.”</h5>
        <h6>Arron Ramsey</h6>
        <p>Dental Patient</p>
        </div>
    </div>
    </div>
</div>
</div>
</div>
</section>
<!-- ***** Testimonials Area End ***** -->

<!-- ***** Blog Area Start ***** -->
<section class="dento-blog-area section-padding-100-0 clearfix">
<div class="container">
<div class="row">
<!-- Section Heading -->
<div class="col-12">
    <div class="section-heading text-center">
    <h2>The Latest News</h2>
    <div class="line"></div>
    </div>
</div>
</div>

<div class="row">
<!-- Single Blog Item -->
<div class="col-12 col-md-6 col-lg-4">
    <div class="single-blog-item mb-100">
    <a href="./blog-details.html">
        <img src="./img/bg-img/4.jpg" alt="">
    </a>
    <!-- Blog Content -->
    <div class="blog-content">
        <a href="./blog-details.html" class="post-title">How your mouth bacteria can harm your lungs</a>
        <p>Donec tempor, lorem et euismod eleifend, est lectus laoreet ante, sed accusan justo diam ...</p>
        <div class="post-meta">
        <a href="#"><i class="icon_clock_alt"></i> 28 Sep 2018</a>
        <a href="#"><i class="icon_chat_alt"></i> 3 Comments</a>
        </div>
    </div>
    </div>
</div>

<!-- Single Blog Item -->
<div class="col-12 col-md-6 col-lg-4">
    <div class="single-blog-item mb-100">
    <a href="./blog-details.html">
        <img src="./img/bg-img/5.jpg" alt="">
    </a>
    <!-- Blog Content -->
    <div class="blog-content">
        <a href="./blog-details.html" class="post-title">What is the best kind of toothpaste to use?</a>
        <p>Donec tempor, lorem et euismod eleifend, est lectus laoreet ante, sed accusan justo diam ...</p>
        <div class="post-meta">
        <a href="#"><i class="icon_clock_alt"></i> 28 Sep 2018</a>
        <a href="#"><i class="icon_chat_alt"></i> 3 Comments</a>
        </div>
    </div>
    </div>
</div>

<!-- Single Blog Item -->
<div class="col-12 col-md-6 col-lg-4">
    <div class="single-blog-item mb-100">
    <a href="./blog-details.html">
        <img src="./img/bg-img/6.jpg" alt="">
    </a>
    <!-- Blog Content -->
    <div class="blog-content">
        <a href="./blog-details.html" class="post-title">Why you should avoid sipping your drinks</a>
        <p>Donec tempor, lorem et euismod eleifend, est lectus laoreet ante, sed accusan justo diam ...</p>
        <div class="post-meta">
        <a href="#"><i class="icon_clock_alt"></i> 28 Sep 2018</a>
        <a href="#"><i class="icon_chat_alt"></i> 3 Comments</a>
        </div>
    </div>
    </div>
</div>
</div>
</div>
</section>
<!-- ***** Blog Area End ***** -->