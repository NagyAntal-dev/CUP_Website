<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Archo onepage themeforest" />
    <meta name="description" content="Archo - Onepage Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>Archo</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <link href="css/twentytwenty.css" rel="stylesheet" type="text/css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="css/style.css" />

</head>

<body>


    <!-- ==================== Start Loading ==================== -->

    <div id="preloader">
        <div class="loading-text">Oldal betöltése</div>
    </div>

    <!-- ==================== End Loading ==================== -->


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->


    <!-- ==================== Start cursor ==================== -->

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- ==================== End cursor ==================== -->


  <!-- ==================== Start Navbar ==================== -->
  <?php  include_once('./assets/navbar.php') ?>
    <!-- ==================== End Navbar ==================== -->



    <!-- ==================== Start Header ==================== -->

    <header class="pages-header bg-img valign parallaxie" data-background="img/pg1.jpg" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1>Rólunk</h1>
                        <div class="path">
                            <a href="index.html">Kezdőlap</a><span>/</span><a href="about.html"
                                class="active">Rólunk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Header ==================== -->



    <!-- ==================== Start about ==================== 

    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="numbers">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="item mb-50">
                                    <h3><span class="nbr custom-font">352</span></h3>
                                    <h6>Projects Completed</h6>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="item mb-50">
                                    <h3><span class="nbr custom-font">567</span></h3>
                                    <h6>Satisfied Clients</h6>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="item">
                                    <h3><span class="nbr custom-font">656</span><i>M</i></h3>
                                    <h6>Monthly Revenue</h6>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="item">
                                    <h3><span class="nbr custom-font">17</span></h3>
                                    <h6>Awards Won</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="txt-cont">
                        <p class="mb-20">Maecenas imperdiet ante eget hendrerit posuere. Nunc urna libero, congue porta
                            nibh a, semper feugiat sem. Sed auctor dui eleifend, scelerisque eros ut.</p>
                        <p>Curabitur sed iaculis dolor, non congue ligula. Maecenas imperdiet ante eget hendrerit
                            posuere. Nunc urna libero, congue porta nibh a, semper feugiat sem. Sed auctor dui eleifend,
                            scelerisque eros ut, pellentesque nibh. Nam lacinia suscipit accumsan. Donec sodales, neque
                            vitae rutrum convallis, nulla tortor pharetra odio, in varius ante ante sed nisi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     ==================== End about ==================== -->



    <!-- ==================== Start Services ==================== -->
    <!--
    <section class="services">
        <div class="container ontop">
            <div class="row">
                <div class="col-lg-3 col-md-6 item-bx">
                    <h2 class="custom-font numb">01</h2>
                    <h6 class="mb-20">Mivel foglalkozunk? </h6>
                    <p>A modern építészet az emberekről és az életükről szól, éppen ezért minden épület árulkodik az ott
                        élő személyekről. Ezt azonban sokan szem elől tévesztik. Rideg falak felépítése helyett,
                        otthonok megálmodásával, rentábilis befektetéssel, innovatív konstrukciók tervezésével
                        foglalkozunk, mind a magán, mind a vállalati szférában. </p>
                    <a href="#0" class="more custom-font mt-30">Érdekel</a>
                </div>

                <div class="col-lg-3 col-md-6 item-bx">
                    <h2 class="custom-font numb">02</h2>
                    <h6 class="mb-20">Néhány szóban rólunk... </h6>
                    <p>25 évvel ezelőtt kezdtem el építészmérnökként dolgozni, s országszerte számos építészeti
                        projektet bonyolítottam le, mint a Semmelweis Egyetem Elméleti Orvostudományi Központ, Andrássy
                        úti Alice Hotel. Ez idő alatt megtanultam, hogy milyen jó szakemberekkel együttműködve törekedni
                        az ügyfél elégedettségére és számomra ez sokkal több mint pusztán egy szakma. Budapest
                        Építészeti Nívódíj, Ingatlanfejlesztési nívódíj </p>
                    <a href="#0" class="more custom-font mt-30">Érdekel</a>
                </div>

                <div class="col-lg-3 col-md-6 item-bx">
                    <h2 class="custom-font numb">03</h2>
                    <h6 class="mb-20">Küldetésünk </h6>
                    <p>Egy épület nem csupán néhány gerenda, tégla vagy betonlap, hanem az ember közvetlen
                        lakókörnyezete. Szeretnénk munkánkkal segíteni a kellemes életterek kialakítását, amelyek
                        maximalizálják az egyén komfortérzetét, illetve a projekt eredményességét. </p>
                    <a href="#0" class="more custom-font mt-30">Érdekel</a>
                </div>

                <div class="col-lg-3 col-md-6 item-bx">
                    <h2 class="custom-font numb">04</h2>
                    <h6 class="mb-20">Miben különbözünk a többi szolgáltatótól? </h6>
                    <p>Maximálisan az ügyfél kérésére koncentrálunk, akinek MINDENBEN a rendelkezésére állunk. Nem
                        szükséges külön-külön 5-10 embert felkeresnie, hogy a műszaki, a jogi, a pénzügyi, a hatósági,
                        illetve a kivitelezési teendők elvégzéséhez is találjon megfelelő szakembert. Mi MINDENT kézben
                        tartunk, mindent előre megtervezünk, hogy Ön bosszúságok és többletköltségek nélkül érjen révbe.
                    </p>
                    <p>Bevonjuk Önt a folyamatba, hogy együtt érjük el a kitűzött célokat. Kikövezzük Önnek a célhoz
                        vezető optimális és jártható utat. A döntések lépésről lépésre, Önnel együtt történnek.</p>
                    <a href="#0" class="more custom-font mt-30">Érdekel</a>
                </div>

            </div>
        </div>
    </section>
-->
    <!-- ==================== End Services ==================== -->


    <!-- ==================== Start Skills ==================== 

    <div class="skills-sec section-padding pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 valign">
                    <div class="skills-box full-width">
                        <div class="skill-item">
                            <h6>Architecture</h6>
                            <div class="skill-progress">
                                <div class="progres custom-font" data-value="90%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <h6>Interior Design</h6>
                            <div class="skill-progress">
                                <div class="progres custom-font" data-value="75%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <h6>3D Modeling</h6>
                            <div class="skill-progress">
                                <div class="progres custom-font" data-value="80%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content">
                        <h4 class="playfont line-height-50 mb-20">Providing Customized Design Solutions That Fits Every
                            Space .</h4>
                        <p class="mb-10">Beyond more stoic this along goodness hey this this wow ipsum manate far
                            impressive manifest farcrud opened inside.</p>
                        <p>Fustered impressive manifest crud opened inside owing punitively around forewent and after
                            wasteful telling sprang coldly and spoke less clients. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

     ==================== End Skills ==================== -->



    <!-- ==================== Start Testimonials ==================== 

    <section class="testimonials grid section-padding bg-img parallaxie" data-background="img/001.jpg" data-overlay-dark="9">
        <div class="container">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <h6 class="custom-font">Testimonials</h6>
                        <h4 class="playfont">What People Says?</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testim">
                        <div class="item">
                            <span class="quote-icon"><img src="img/clients/quote.svg" alt=""></span>
                            <div class="cont">
                                <p class="playfont">"I just love their design for all stunning details. You must know
                                    what can you do for a project before taking it, but with Archo, the sky is the
                                    limit."
                                </p>
                            </div>
                            <div class="info">
                                <div class="author">
                                    <img src="img/clients/1.jpg" alt="">
                                </div>
                                <h6>Mitchl Jhon <span>Envato Customer</span> </h6>
                            </div>
                        </div>
                        <div class="item">
                            <span class="quote-icon"><img src="img/clients/quote.svg" alt=""></span>
                            <div class="cont">
                                <p class="playfont">"I just love their design for all stunning details. You must know
                                    what can you do for a project before taking it, but with Archo, the sky is the
                                    limit."
                                </p>
                            </div>
                            <div class="info">
                                <div class="author">
                                    <img src="img/clients/2.jpg" alt="">
                                </div>
                                <h6>Jane Smith <span>Envato Customer</span> </h6>
                            </div>
                        </div>
                        <div class="item">
                            <span class="quote-icon"><img src="img/clients/quote.svg" alt=""></span>
                            <div class="cont">
                                <p class="playfont">"I just love their design for all stunning details. You must know
                                    what can you do for a project before taking it, but with Archo, the sky is the
                                    limit."
                                </p>
                            </div>
                            <div class="info">
                                <div class="author">
                                    <img src="img/clients/3.jpg" alt="">
                                </div>
                                <h6>Alison Clutcher <span>Envato Customer</span> </h6>
                            </div>
                        </div>
                        <div class="item">
                            <span class="quote-icon"><img src="img/clients/quote.svg" alt=""></span>
                            <div class="cont">
                                <p class="playfont">"I just love their design for all stunning details. You must know
                                    what can you do for a project before taking it, but with Archo, the sky is the
                                    limit."
                                </p>
                            </div>
                            <div class="info">
                                <div class="author">
                                    <img src="img/clients/4.jpg" alt="">
                                </div>
                                <h6>Peter Jefferson <span>Envato Customer</span> </h6>
                            </div>
                        </div>
                    </div>
                    <div class="navs mt-30">
                        <span class="prev">
                            <i class="fas fa-long-arrow-alt-left"></i>
                        </span>
                        <span class="next">
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

     ==================== End Testimonials ==================== -->



    <!-- ==================== Start Team ==================== -->

    <section class="team tmgrid section-padding">
        <div class="container">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <h6 class="custom-font">Kreatív Elmék</h6>
                        <h4 class="playfont">Rólunk</h4>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <h6 class="playfont">Mivel foglalkozunk?</h6>

                <p class="text-justify">A modern építészet az emberekről és az életükről szól, éppen ezért minden épület árulkodik az ott élő
                    személyekről. Ezt azonban sokan szem elől tévesztik. Rideg falak felépítése helyett, otthonok
                    megálmodásával, rentábilis befektetéssel, innovatív konstrukciók tervezésével foglalkozunk, mind a
                    magán, mind a vállalati szférában.</p>
            </div>
            <div class="row mb-4">
                <h6 class="playfont">Néhány szóban rólunk...</h6>

                <p class="text-justify">25 évvel ezelőtt kezdtem el építészmérnökként dolgozni, s országszerte számos építészeti projektet
                    bonyolítottam le, mint a Semmelweis Egyetem Elméleti Orvostudományi Központ, Andrássy úti Alice
                    Hotel.
                    Ez idő alatt megtanultam, hogy milyen jó szakemberekkel együttműködve törekedni az ügyfél
                    elégedettségére és számomra ez sokkal több mint pusztán egy szakma. Budapest Építészeti Nívódíj,
                    Ingatlanfejlesztési nívódíj</p>
            </div>
            <div class="row mb-4">
                <h6 class="playfont">Néhány szóban rólunk...</h6>

                <p class="text-justify">Egy épület nem csupán néhány gerenda, tégla vagy betonlap, hanem az ember közvetlen lakókörnyezete.
                    Szeretnénk munkánkkal segíteni a kellemes életterek kialakítását, amelyek maximalizálják az egyén
                    komfortérzetét, illetve a projekt eredményességét.</p>
            </div>
            <div class="row mb-2">
                <h6 class="playfont">Miben különbözünk a többi szolgáltatótól?</h6>

                <p class="text-justify">Maximálisan az ügyfél kérésére koncentrálunk, akinek MINDENBEN a rendelkezésére állunk. Nem szükséges
                    külön-külön 5-10 embert felkeresnie, hogy a műszaki, a jogi, a pénzügyi, a hatósági, illetve a
                    kivitelezési teendők elvégzéséhez is találjon megfelelő szakembert. Mi MINDENT kézben tartunk,
                    mindent
                    előre megtervezünk, hogy Ön bosszúságok és többletköltségek nélkül érjen révbe.</p>
            </div>
            <div class="row">
                <p class="text-justify">Bevonjuk Önt a folyamatba, hogy együtt érjük el a kitűzött célokat. Kikövezzük Önnek a célhoz vezető
                    optimális és jártható utat. A döntések lépésről lépésre, Önnel együtt történnek.</p>
            </div>
        </div>
    </section>

    <!-- ==================== End Team ==================== -->



    <!-- ==================== Start Blog ==================== 

    <section class="blog-grid center bg-gray section-padding">
        <div class="container">

            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <h6 class="custom-font">Latest News</h6>
                        <h4 class="playfont">Our Blogs</h4>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="item wow fadeInUp md-mb50" data-wow-delay=".3s">
                        <div class="post-img">
                            <div class="img">
                                <img src="img/blog/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <a href="#0">Alex Smith</a>
                                <a href="#0">Aug 06 2019</a>
                            </div>

                            <h5 class="playfont"><a href="#0">In Good Taste: Mark Finlay Architects & Interiors</a></h5>

                            <a href="blog-details.html" class="more">
                                <span class="custom-font">Read More</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="item wow fadeInUp md-mb50" data-wow-delay=".1s">
                        <div class="post-img">
                            <div class="img">
                                <img src="img/blog/2.jpg" alt="">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <a href="#0">Alex Smith</a>
                                <a href="#0">Aug 06 2019</a>
                            </div>

                            <h5 class="playfont"><a href="#0">Five Things You Should Know About Modern Furniture.</a></h5>

                            <a href="blog-details.html" class="more">
                                <span class="custom-font">Read More</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

     ==================== End Blog ==================== -->



    <!-- ==================== Start Footer ==================== -->
    <?php  include_once('./assets/footer.php') ?>
    <!-- ==================== End Footer ==================== -->





    <!-- jQuery -->
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>

    <!-- plugins -->
    <script src="js/plugins.js"></script>

    <!-- custom scripts -->
    <script src="js/scripts.js"></script>

</body>

</html>