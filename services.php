<?php 
    include('./assets/service_picker.php');
    $serviceid = get_service_id();
    $service = get_service_content($serviceid);
?>

<!DOCTYPE html>
<html lang="hu">

<?php include('./assets/meta.php'); ?>

<body>

<!-- ==================== Start Preloader ==================== -->
<div id="preloader">
    <div class="loading-text">Oldal betöltése</div>
</div>
<!-- ==================== End Preloader ==================== -->

<!-- ==================== Start Custom Cursor ==================== -->
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>
<!-- ==================== End Custom Cursor ==================== -->

 <!-- ==================== Start Navbar ==================== -->

 <nav class="navbar light change navbar-expand-lg">
        <div class="d-flex align-items-center justify-content-between w-100">

            <!-- Logo -->
            <div class="">
                <a class="logo  fz-20 navbar-brand" href="./" style="color: #000;">
                <img src="img/logo.png" class="img-fluid" alt="logo" srcset="" style="max-width: 60px; min-heigth: 60px">
                <!--<img src="img/logo-light.png" alt="logo">-->
                CUPSTAR CONSULTING INVESTMENTS KFT.
            </a>
            </div>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="">
                <ul class="navbar-nav ml-auto">
                    <!--<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Home</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.html">Main Home</a>
                            <a class="dropdown-item" href="index3.html">Architecture</a>
                            <a class="dropdown-item" href="index2.html">Interior Design</a>
                        </div>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="index.php">Kezdőlap</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="about.php">Rólunk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="portfolio-mas2.php">Referenciák</a>
                    </li>
                    <!--<li class="nav-item dropdown">
                        <a class="nav-link text-uppercase dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Blog</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="blog.php">Blogs</a>
                            <a class="dropdown-item" href="blog-details.php">Post Details</a>
                        </div>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="contact_page.php">Kapcsolat</a>
                    </li>
                </ul>
                </div>
            </div>
            <a class="logo fz-20" href="./" style="color: #000;">
                <!--<img src="img/logo-light.png" alt="logo">-->
                <strong>LIVING</strong> SPACE
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>
        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->

<div class="d-inline-block h-100">
    <div class="row text-justify">
        <!-- Left Sidebar with Background Image -->
        <div class="col-md-3 p-4 d-flex align-items-start flex-column justify-content-start" 
            style="background: url('img/<?php echo $service['image']; ?>') no-repeat center center; 
                   background-size: cover; color: white; height: 100vh">
            <h2 class="text-center fw-bold bg-dark bg-opacity-75 p-2 w-100">
                <?php echo $service['title']; ?>
            </h2>
        </div>

        <!-- Right Content -->
        <div class="col-md-9 p-4 services-text">
            <!--<h2 class="mb-4 fw-bold"><?php echo $service['title']; ?></h2>-->
            <p><?php echo html_entity_decode($service['subtitle']); ?></p>
            <div>
                <?php echo $service['content']; ?>
            </div>
        </div>
    </div>
</div>

<!-- ==================== Start Footer ==================== -->
<?php include('./assets/footer.php'); ?>
<!-- ==================== End Footer ==================== -->

<!-- jQuery -->
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- plugins -->
<script src="js/plugins.js"></script>

<!-- Custom Cursor Script -->
<script>
    const cursorOuter = document.querySelector('.cursor-outer');
    const cursorInner = document.querySelector('.cursor-inner');

    document.addEventListener('mousemove', (e) => {
        const { clientX: x, clientY: y } = e;
        cursorOuter.style.transform = `translate(${x}px, ${y}px)`;
        cursorInner.style.transform = `translate(${x}px, ${y}px)`;
    });
</script>

<!-- Preloader Script -->
<script>
    window.addEventListener('load', () => {
        const preloader = document.getElementById('preloader');
        if (preloader) {
            preloader.style.display = 'none';
        }
    });
</script>

<!-- Custom Scripts -->
<script src="js/scripts.js"></script>

<!-- Map -->
<script src="js/map.js"></script>

</body>
</html>
