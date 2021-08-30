<?php
    require 'requires/header.html';

    // $feed = file_get_contents('https://blog.assinadoc.com/feed/');
    // $feed = str_replace('<media:', '<', $feed);

    // $rss = simplexml_load_string($feed);

    // var_dump("<pre>");
    // var_dump($rss->channel->item[1]);
    // echo $rss->channel->item[1]->title[0];
    // echo $rss->channel->item[1]->link[0];
    // echo $rss->channel->item[1]->pubDate[0];
    // echo $rss->channel->item[1]->title[0];
    // echo $rss->channel->item[1]->title[0];
    // var_dump("</pre>");

?>

    <!--====== Banner principal ======-->
    <section class="banner-section banner-section-two">
        <div class="banner-slider" id="bannerSlider">
            <div class="single-banner" style="background-image: url(assets/images/banner1.png);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="banner-content text-center">
                                <h1 data-animation="fadeInDown" data-delay="0.8s" style="font-size: 50px !important;">Traçar caminhos que geram <br> oportunidades</h1>
                                <p data-animation="fadeInUp" data-delay="1s">
                                    Nosso objetivo é oferecer suporte para traçar caminhos, compreendendo que as conexões certas resultam em solução.
                                </p>
                                <ul class="btn-wrap">
                                    <li data-animation="fadeInLeft" data-delay="1.2s">
                                        <a href="empresas.php" class="main-btn main-btn-4">Conheça nossas soluções</a>
                                    </li>
                                    <li data-animation="fadeInRight" data-delay="1.4s">
                                        <a href="candidatos.php" class="main-btn main-btn-2">Confira nossas oportunidades</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-banner" style="background-image: url(assets/images/banner2.png);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="banner-content text-center">
                                <h1 data-animation="fadeInDown" data-delay="0.8s" style="font-size: 40px !important;">e-talents, nosso programa de capacitação e direcionamento dos candidatos.</h1>
                                <p data-animation="fadeInUp" data-delay="1s">
                                    Além de contribuir para um banco de perfis com suas singularidades e potenciais lapidados, criamos uma comunidade de aprendizado e evolução.
                                </p>
                                <ul class="btn-wrap">
                                    <li data-animation="fadeInLeft" data-delay="1.2s">
                                        <a href="empresas.php" class="main-btn main-btn-4">Conheça nossas soluções</a>
                                    </li>
                                    <li data-animation="fadeInRight" data-delay="1.4s">
                                        <a href="candidatos.php" class="main-btn main-btn-2">Confira nossas oportunidades</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Banner principal ======-->


    <!--====== Sobre nós ======-->
    <section class="about-section section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="about-video">
                        <div class="video-poster-one wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms"
                            style="background-image: url(assets/images/conheca2.png);">
                        </div>
                        <div class="video-poster-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms"
                            style="background-image: url(assets/images/conheca1.png);">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="about-text-two">
                        <div class="section-title left-border mb-40">
                            <span class="title-tag">Sobre a nós</span>
                            <h2 class="title">Conheça a Elemento</h2>
                        </div>
                        <p>
                            Para quem busca novos talentos, seja em projetos de alta complexidade ou naqueles pontuais e específicos, nossa meta é encontrar sua melhor conexão! Sim, aquele talento com a competência que você quer, e que busca a experiência de carreira que só a sua empresa pode oferecer.
                        </p>
                        <ul class="about-list">
                            <li> <i class="fas fa-check"></i> Há 7 anos conectamos talentos às mais importantes oportunidades do interior do país.</li>
                            <li> <i class="fas fa-check"></i> Um time de especialistas com grande know how, que garantem segurança em todo o processo.</li>
                            <li> <i class="fas fa-check"></i> Ao longo de nossa trajetória, são mais de 250 empresas satisfeitas e fidelizadas.</li>
                            <li> <i class="fas fa-check"></i> Estamos entre os 100 melhores fornecedores para RH do Brasil.</li>
                        </ul>
                        <a href="sobre.php" class="main-btn">Conheça mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Sobre nós ======-->



    <!--====== Chamada empresa e candidatos ======-->
    <section class="service-section shape-style-two service-line-shape section-gap grey-bg">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title text-center both-border mb-50">
                <span class="title-tag">As nossas soluções</span>
                <h2 class="title">Nós podemos te ajudar!</h2>
            </div>
            <!-- Services Boxes -->
            <div class="row service-boxes justify-content-center">

                <div class="col-lg-6 col-sm-6 col-10 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                    <div class="service-box-two text-center">
                        <div class="icon">
                            <i class="flaticon-chart"></i>
                        </div>
                        <h2><a href="empresas.php">Empresas</a></h2>
                        <p>Crie valor às estratégias de gente e gestão, proporcione uma visão transformadora de recrutamento, seleção e desenvolvimento de seus talentos.</p>
                        <a href="empresas.php" class="service-link">
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-10 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                    <div class="service-box-two text-center">
                        <div class="icon">
                            <i class="flaticon-teamwork-1"></i>
                        </div>
                        <h2><a href="candidatos.php">Candidatos</a></h2>
                        <p>Somos especialistas em identificar os melhores talentos e prepará-los para as melhores decisões de suas carreiras.</p><br>
                        <a href="candidatos.php" class="service-link">
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="line-one">
            <img src="assets/img/lines/12.png" alt="line-shape">
        </div>
        <div class="line-two">
            <img src="assets/img/lines/11.png" alt="line-shape">
        </div>
    </section>
    <!--====== Chamada empresa e candidatos ======-->



    <!--====== Chamada de cadastro ======-->
    <section class="fact-section-two">
        <div class="container">
            <div class="fact-two-inner">
                <div class="fact-boxes row justify-content-between align-items-center" style="padding-left: 50px;">
                    
                    <form action="mail.php" method="POST">
                        <div class="row">
                            <div class="col-lg-12" style="top: -40px; color: white;">
                                <h1 style="color: white;">Está procurando um novo talento para a sua empresa?</h1>
                                <p style="color: white;">Conheça agora como nossas soluções poderão conectá-lo aos melhores profissionais.</p>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-group mb-30">
                                    <input type="text" placeholder="Seu nome" name="nome" required>
                                    <span class="icon"><i class="far fa-user-circle"></i></span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-group mb-30">
                                    <input type="email" placeholder="Seu e-mail" name="email" required>
                                    <span class="icon"><i class="far fa-envelope-open"></i></span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-group mb-30">
                                    <input type="text" placeholder="Seu telefone" name="telefone" required>
                                    <span class="icon"><i class="far fa-phone"></i></span>
                                </div>
                            </div>
                            <div class="col-lg-3 text-center">
                                <button type="submit" class="main-btn">Soliticar contato</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!--====== Chamada de cadastro ======-->



    <!--====== Blog ======-->
    <section class="project-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-8">
                    <!-- Section Title -->
                    <div class="section-title left-border">
                        <h2 class="title">Novidades do blog</h2>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4">
                    <div class="view-moore-btn text-md-right mt-30 mt-md-0">
                        <a href="#" class="main-btn">Ver tudo</a>
                    </div>
                </div>
            </div>

            <!-- Project Boxes -->
            <div class="container-fluid container-1600">
                <div class="latest-post-loop loop-two">
                    <div class="row" id="latestPostSlider">
                        <div class="col-lg-3 col-md-3">
                            <div class="latest-post-box-two">
                                <div class="post-thumb-wrap">
                                    <div class="post-thumb bg-img-c"
                                        style="background-image: url(assets/img/latest-post/01.jpg);">
                                    </div>
                                    <span class="post-date"><i class="far fa-calendar-alt"></i>25 de agosto</span>
                                </div>
                                <div class="post-desc">
                                    <h3 class="title">
                                        <a href="#">
                                            Como se comportar em dinâmicas de grupo
                                        </a>
                                    </h3>
                                    <a href="#" class="post-link">
                                        Ler mais <i class="far fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="latest-post-box-two">
                                <div class="post-thumb-wrap">
                                    <div class="post-thumb bg-img-c"
                                        style="background-image: url(assets/img/latest-post/02.jpg);">
                                    </div>
                                    <span class="post-date"><i class="far fa-calendar-alt"></i>25/09/2021</span>
                                </div>
                                <div class="post-desc">
                                    <h3 class="title">
                                        <a href="#">
                                            Como se comportar em dinâmicas de grupo
                                        </a>
                                    </h3>
                                    <a href="#" class="post-link">
                                        Ler mais <i class="far fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="latest-post-box-two">
                                <div class="post-thumb-wrap">
                                    <div class="post-thumb bg-img-c"
                                        style="background-image: url(assets/img/latest-post/03.jpg);">
                                    </div>
                                    <span class="post-date"><i class="far fa-calendar-alt"></i>25 de agosto</span>
                                </div>
                                <div class="post-desc">
                                    <h3 class="title">
                                        <a href="#">
                                            Como se comportar em dinâmicas de grupo
                                        </a>
                                    </h3>
                                    <a href="#" class="post-link">
                                        Ler mais <i class="far fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="latest-post-box-two">
                                <div class="post-thumb-wrap">
                                    <div class="post-thumb bg-img-c"
                                        style="background-image: url(assets/img/latest-post/04.jpg);">
                                    </div>
                                    <span class="post-date"><i class="far fa-calendar-alt"></i>25/09/2021</span>
                                </div>
                                <div class="post-desc">
                                    <h3 class="title">
                                        <a href="#">
                                            Como se comportar em dinâmicas de grupo
                                        </a>
                                    </h3>
                                    <a href="#" class="post-link">
                                        Ler mais <i class="far fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="latest-post-box-two">
                                <div class="post-thumb-wrap">
                                    <div class="post-thumb bg-img-c"
                                        style="background-image: url(assets/img/latest-post/01.jpg);">
                                    </div>
                                    <span class="post-date"><i class="far fa-calendar-alt"></i>25 de agosto</span>
                                </div>
                                <div class="post-desc">
                                    <h3 class="title">
                                        <a href="#">
                                            Como se comportar em dinâmicas de grupo
                                        </a>
                                    </h3>
                                    <a href="#" class="post-link">
                                        Ler mais <i class="far fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="latest-post-box-two">
                                <div class="post-thumb-wrap">
                                    <div class="post-thumb bg-img-c"
                                        style="background-image: url(assets/img/latest-post/02.jpg);">
                                    </div>
                                    <span class="post-date"><i class="far fa-calendar-alt"></i>25/09/2021</span>
                                </div>
                                <div class="post-desc">
                                    <h3 class="title">
                                        <a href="#">
                                            Como se comportar em dinâmicas de grupo
                                        </a>
                                    </h3>
                                    <a href="#" class="post-link">
                                        Ler mais <i class="far fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="latest-post-box-two">
                                <div class="post-thumb-wrap">
                                    <div class="post-thumb bg-img-c"
                                        style="background-image: url(assets/img/latest-post/03.jpg);">
                                    </div>
                                    <span class="post-date"><i class="far fa-calendar-alt"></i>25 de agosto</span>
                                </div>
                                <div class="post-desc">
                                    <h3 class="title">
                                        <a href="#">
                                            Como se comportar em dinâmicas de grupo
                                        </a>
                                    </h3>
                                    <a href="#" class="post-link">
                                        Ler mais <i class="far fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="latest-post-box-two">
                                <div class="post-thumb-wrap">
                                    <div class="post-thumb bg-img-c"
                                        style="background-image: url(assets/img/latest-post/04.jpg);">
                                    </div>
                                    <span class="post-date"><i class="far fa-calendar-alt"></i>25/09/2021</span>
                                </div>
                                <div class="post-desc">
                                    <h3 class="title">
                                        <a href="#">
                                            Como se comportar em dinâmicas de grupo
                                        </a>
                                    </h3>
                                    <a href="#" class="post-link">
                                        Ler mais <i class="far fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Blog ======-->


    <!--====== Video Start ======-->
    <section class="video-section-two bg-img-c" style="background-image: url(assets/img/video-bg/video-2.jpg);">
        <div class="container">
            <div class="row align-content-center justify-content-center">
                <div class="col-lg-10">
                    <div class="video-cont text-center">
                        <a href="https://www.youtube.com/watch?v=C_UCqHpwojw"
                            class="play-btn popup-video wow fadeInDown" data-wow-duration="1500ms"
                            data-wow-delay="400ms"><i class="fas fa-play"></i></a>
                        <h2>
                            Confira o nascimento da nova Elemento
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="line-shape-one">
            <img src="assets/img/lines/12.png" alt="Line">
        </div>
        <div class="line-shape-two">
            <img src="assets/img/lines/11.png" alt="Line">
        </div>
    </section>
    <!--====== Video end ======-->

    <!--====== Client Area Start ======-->
    <section class="client-section">
        <div class="container">
            <div class="client-slider section-gap">
                <h2 style="text-align: center; margin-bottom: 10px;">Veja quem são nossos parceiros</h2>
                <div class="row align-items-center justify-content-between" id="clientSlider">
                    <div class="col">
                        <a href="#" class="client-img d-block text-center">
                            <img src="assets/img/clients/01.png" alt="" style="max-width: 140px;">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="client-img d-block text-center">
                            <img src="assets/img/clients/02.png" alt="" style="max-width: 140px;">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="client-img d-block text-center">
                            <img src="assets/img/clients/03.png" alt="" style="max-width: 140px;">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="client-img d-block text-center">
                            <img src="assets/img/clients/04.png" alt="" style="max-width: 140px;">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="client-img d-block text-center">
                            <img src="assets/img/clients/05.png" alt="" style="max-width: 140px;">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="client-img d-block text-center">
                            <img src="assets/img/clients/06.png" alt="" style="max-width: 140px;">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="client-img d-block text-center">
                            <img src="assets/img/clients/07.png" alt="" style="max-width: 140px;">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="client-img d-block text-center">
                            <img src="assets/img/clients/08.png" alt="" style="max-width: 140px;">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="client-img d-block text-center">
                            <img src="assets/img/clients/09.png" alt="" style="max-width: 140px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Client Area End ======-->

<?php
    require 'requires/footer.html';
?>