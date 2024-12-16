<!DOCTYPE html>
<html lang="zxx">

<?php include('./assets/meta.php') ?>

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

    <?php include('./assets/navbar.php') ?>

    <!-- ==================== End Navbar ==================== -->



    <!-- ==================== Start Header ==================== 

    <header class="pages-header bg-img valign parallaxie" data-background="img/pg1.jpg" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1>Kapcsolat</h1>
                        <div class="path">
                            <a href=".">Főoldal</a><span>/</span><a href="#0" class="active">Kapcsolat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>-->

    <!-- ==================== End Header ==================== -->



    <!-- ==================== Start about ==================== -->

    <section class="contact">
        <div class="info bg-gray pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="item">
                            <span class="icon pe-7s-phone"></span>
                            <div class="cont">
                                <h6 class="custom-font">Call Us</h6>
                                <p>+7 (111) 1234 56789</p>
                                <p>+1 (000) 9876 54321</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item">
                            <span class="icon pe-7s-mail-open"></span>
                            <div class="cont">
                                <h6 class="custom-font">Email Us</h6>
                                <p>contact@Archo.com</p>
                                <p>Username@website.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item">
                            <span class="icon pe-7s-map"></span>
                            <div class="cont">
                                <h6 class="custom-font">Address</h6>
                                <p>B17 Princess Road, London, Greater London NW18JR, United Kingdom</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <!--<div class="col-lg-6 map-box">
                    <div class="map" id="ieatmaps"></div>
                </div>-->
                <div class="col-lg-12 form">
                    <form id="contact-form" method="post" action="contact.php">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="form-group">
                                <input id="form_name" type="text" name="name" placeholder="Név" required="required">
                            </div>

                            <div class="form-group">
                                <input id="form_email" type="email" name="email" placeholder="E-mail"
                                    required="required">
                            </div>

                            <div class="form-group">
                                <input id="form_number" type="text" name="sqrmeter" placeholder="Négyzetméter"
                                    required="required">
                            </div>

                            <div class="form-group">
                                <textarea id="form_message" name="message" placeholder="Üzenet" rows="4"
                                    required="required"></textarea>
                            </div>

                            <button type="submit" class="btn-curve btn-color"><span>Küldés</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End about ==================== -->



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

    <!-- Map -->
    <script src="js/map.js"></script>

    <!-- google map api -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUU5FZiF5WLFFfgIC1n64Zr0zfpQZjBBg&callback=initMap">
    </script>

</body>

</html>