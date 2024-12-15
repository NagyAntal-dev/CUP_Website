<?php 
    include('./assets/service_picker.php');
    $serviceid = get_service_id();
    $service = get_service_content($serviceid);
?>

<!DOCTYPE html>
<html lang="hu">

<?php include('./assets/meta.php') ?>

<body>

    <!-- ==================== Start Loading ==================== -->

    <div id="preloader">
        <div class="loading-text">Oldal betöltése</div>
    </div>

    <!-- ==================== End Loading ==================== -->


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap">
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


    <!--  //foreach ($thisServices as $key => $service):  -->
    <!-- ==================== Start Header ==================== -->

    <header class="pages-header bg-img valign parallaxie" data-background="./services/<?php echo $service['image']?>" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1><?php echo $service['title'];?></h1>
                        <div class="path">
                            <a href="index.php">Kezdőlap</a><span>/</span><a class="active"><?php echo $service['title'];?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Header ==================== -->



    <!-- ==================== Start Intro ==================== -->

    <section class="intro-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="htit">
                        <h4> <?php echo $service['title'];?></h4>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1 col-md-8 mb-30">
                    <div class="">
                        <p><?php echo html_entity_decode($service['subtitle']);?></p>
                        <?php echo($service['content']);?>
                    </div>
                </div>

                <!--<div class="col-lg-3">
                    <div class="item mt-30">
                        <h6>Client</h6>
                        <p><a href="#0">Envato.com</a></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item mt-30">
                        <h6>Date</h6>
                        <p>6 August 2019</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item mt-30">
                        <h6>Categories</h6>
                        <p><a href="#0">Web Design </a>, <a href="#0">WordPress</a></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item mt-30">
                        <h6>Tags</h6>
                        <p><a href="#0">Minimal</a> , <a href="#0">Modern</a> , <a href="#0">Design</a></p>
                    </div>
                </div>-->
            </div>
        </div>
    </section>

    <!-- ==================== End Intro ==================== -->




    <!-- ==================== Start projdtal ==================== 

    <section class="projdtal">
        <div class="justified-gallery">
            <a href="img/portfolio/project1/1.jpg">
                <img alt="" src="img/portfolio/project1/1.jpg" />
            </a>
            <a href="img/portfolio/project1/2.jpg">
                <img alt="" src="img/portfolio/project1/2.jpg" />
            </a>

            <a href="img/portfolio/project1/6.jpg">
                <img alt="" src="img/portfolio/project1/6.jpg" />
            </a>
            <a href="img/portfolio/project1/3.jpg">
                <img alt="" src="img/portfolio/project1/3.jpg" />
            </a>
        </div>
    </section>

    ==================== End projdtal ==================== -->




    <!-- ==================== Start Video-wrapper ==================== 

    <section>
        <div class="container-fluid">
            <div class="video-wrapper section-padding bg-img parallaxie valign"
                data-background="img/portfolio/project1/vid.jpg" data-overlay-dark="4">
                <div class="full-width text-center">
                    <a class="vid" href="https://vimeo.com/127203262">
                        <div class="vid-butn">
                            <span class="icon">
                                <i class="fas fa-play"></i>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

     ==================== End Video-wrapper ==================== -->



    <!-- ==================== Start projdtal ==================== 

    <section class="projdtal">
        <div class="justified-gallery">
            <a href="img/portfolio/project1/8.jpg">
                <img alt="" src="img/portfolio/project1/8.jpg" />
            </a>
            <a href="img/portfolio/project1/9.jpg">
                <img alt="" src="img/portfolio/project1/9.jpg" />
            </a>
        </div>
    </section>

     ==================== End projdtal ==================== -->




    <!-- ==================== Start call-to-action ==================== 

    <section class="call-action nogif next">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content text-center">
                        <a href="project-details2.html">
                            <h6 class="wow" data-splitting>Next Project</h6>
                            <h2 class="wow" data-splitting><b> Luxury </b> Furniture</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="nxt-img bg-img" data-background="img/portfolio/project1/bg.jpg"></div>
    </section>

     ==================== End call-to-action ==================== -->

    <?php echo($serviceid); //endforeach; ?>

    <!-- ==================== Start Footer ==================== -->

    <?php include('./assets/footer.php') ?>

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