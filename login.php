<?php include 'config/language.php';?>
<?php include 'config/config.php';?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>POS SYSTEM</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/boxicons/css/boxicons.min.css?v=<?php echo $config['v']; ?>" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css?v=<?php echo $config['v']; ?>" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css?v=<?php echo $config['v']; ?>" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css?v=<?php echo $config['v']; ?>" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css?v=<?php echo $config['v']; ?>" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css?v=<?php echo $config['v']; ?>" />


    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/vendor/font-awesome/all.min.css?v=<?php echo $config['v']; ?>" />

    <!-- Slider -->
    <link rel="stylesheet" href="assets/css/demo.css?v=<?php echo $config['v']; ?>" />

    <!-- main css file -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <?php if(isset($_SESSION["dir"]) && $_SESSION["dir"]=='rtl') { ?>
        <link rel="stylesheet" href="assets/css/style.rtl.css?v=<?php echo $config['v']; ?>" />
    <?php } ?>

    <!-- Light && dark mode -->
    <link rel="stylesheet" href="assets/css/<?php echo $config['theme_mode'] ?>.css?v=<?php echo $config['v']; ?>" />
</head>

<body>


    <div class="login-side">
       <div class="languages-login mt-3">
            <?php
                if( $_SESSION['lang'] =='en') echo "<a class='btn btn-outline-primary login-lang languages mt-lg-1' href='?lang=ar'><img src='assets/img/lang/ar.png' class='langimg ar'>"."عربى".'</a>'; 
                if( $_SESSION['lang'] =='ar') echo "<a class='btn btn-outline-primary login-lang languages mt-lg-1' href='?lang=en'><img src='assets/img/lang/en.png' class='langimg'>"."En".'</a>'; 
            ?>
       </div>
        <div class="login-content">
            <div class="img-system text-center">
                <img src="assets/img/login/2@2x.png" alt="" width="100" class="img-thumbnail rounded-circle">
            </div>
            <h1 class="login-heading">POS.SYS</h1>
            <form action="index.php">
                <div class="form-group form-group-login">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control login-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="entsher@entsher.com" required>

                </div>
                <div class="form-group form-group-login mb-4">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control login-input" id="exampleInputPassword1" placeholder="************************" required>
                </div>
                <div class="form-check check-login">
                    <input type="checkbox" id="exampleCheck1" class="option-input radio check-button mr-0  search-customer-check " name="customer" />
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    <a href="#" class="forget-password-login">Forgot password?</a>
                </div>

                <button type="submit" class="btn btn-login mb-4">Login</button>
               
                <div class="footer-login">
                    <p>Don't have an account yet? <a href="#">Register</a></p>
                </div>
            </form>
        </div>
    </div>
        <main class="carousel-side" id="slideshow">
            <section class="slides"> 
            
                <section class="slides-nav">
                    <nav class="slides-nav__nav">
                    <button class="slides-nav__prev js-prev">Prev</button>
                    <button class="slides-nav__next js-next">Next</button>
                    </nav>
                </section>

                <section class="slide is-active">
                        <div class="slide__content">
                            <figure class="slide__figure"><div class="slide__img" style="background-image: url(assets/img/login/2@2x.png)"></div></figure>
                            <header class="slide__header">
                            
                            </header>
                            <h2 class="slide__title">
                                <span class="title-line"><span>Lorem ipsum dolor sit amet.</span></span>
                                <span class="title-line"><span> lorem ipsum dolor sit amet consectetuer adipiscing elit lorem ipsum dolor sit amet .</span></span>
                            </h2>
                            <!-- <p class="carousel-paragraph">
                                lorem ipsum dolor sit amet consectetuer adipiscing elit lorem ipsum dolor sit amet .
                            </p> -->
                        </div>
                        
                </section>

                <section class="slide">
                    <div class="slide__content">
                    <figure class="slide__figure"><div class="slide__img" style="background-image: url(assets/img/login/3@2x.png)"></div></figure>
                    <header class="slide__header">
                    </header>
                    <h2 class="slide__title">
                        <span class="title-line"><span>Lorem ipsum dolor sit amet.</span></span>
                        <span class="title-line"><span> lorem ipsum dolor sit amet consectetuer adipiscing elit lorem ipsum dolor sit amet .</span></span>
                    </h2>
                        <!-- <p class="carousel-paragraph title-line">
                            lorem ipsum dolor sit amet consectetuer adipiscing elit lorem ipsum dolor sit amet .
                        </p> -->
                    </div>
                </section>

                <section class="slide">
                    <div class="slide__content">
                    <figure class="slide__figure"><div class="slide__img" style="background-image: url(assets/img/login/2@2x.png)"></div></figure>
                    <header class="slide__header">
                    </header>
                    <h2 class="slide__title">
                        <span class="title-line"><span>Lorem ipsum dolor sit amet.</span></span>
                        <span class="title-line"><span> lorem ipsum dolor sit amet consectetuer adipiscing elit lorem ipsum dolor sit amet .</span></span>
                    </h2>
                        <!-- <p class="carousel-paragraph title-line">
                            lorem ipsum dolor sit amet consectetuer adipiscing elit lorem ipsum dolor sit amet .
                        </p> -->
                    </div>
                </section>

                <section class="slide">
                    <div class="slide__content">
                    <figure class="slide__figure"><div class="slide__img" style="background-image: url(assets/img/login/3@2x.png)"></div></figure>
                    <header class="slide__header">
                    </header>
                    <h2 class="slide__title">
                        <span class="title-line"><span>Lorem ipsum dolor sit amet.</span></span>
                        <span class="title-line"><span> lorem ipsum dolor sit amet consectetuer adipiscing elit lorem ipsum dolor sit amet .</span></span>
                    </h2>
                        <!-- <p class="carousel-paragraph title-line">
                            lorem ipsum dolor sit amet consectetuer adipiscing elit lorem ipsum dolor sit amet .
                        </p> -->
                    </div>
                </section>
            </section>
        </main>



    <script src="assets/vendor/jquery/jquery.min.js?v=<?php echo $config['v']; ?> "></script>
    <script src="assets/vendor/filter/js/ui/1.8.21/jquery-ui.min.js?v=<?php echo $config['v']; ?>"></script>
    <script src="assets/vendor/font-awesome/all.min.js?v=<?php echo $config['v']; ?> "></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js?v=<?php echo $config['v']; ?> "></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js?v=<?php echo $config['v']; ?> "></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js?v=<?php echo $config['v']; ?> "></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js?v=<?php echo $config['v']; ?> "></script>
    <script src="assets/vendor/aos/aos.js?v=<?php echo $config['v']; ?> "></script>
    <script src="assets/js/slider.js?v=<?php echo $config['v']; ?> "></script>
    <script src="assets/js/add-products.js?v=<?php echo $config['v']; ?> "></script>
    <script src="assets/js/dropdown.js?v=<?php echo $config['v']; ?> "></script>
    <script src="assets/js/main.js?v=<?php echo $config['v']; ?> "></script>

</body>

</html>