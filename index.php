<?php
$title = "Hanzel Sabio | Home";
include $_SERVER["DOCUMENT_ROOT"] . "/assets/layouts/header.php";
?>

<body class="index-page">

    <?php include $_SERVER["DOCUMENT_ROOT"] . "/assets/layouts/navbar.php" ?>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <img src="assets/img/web-bg-home.png" alt="" data-aos="fade-in">

            <div class="container d-flex flex-column align-items-center justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                <br><br><br><br><br><br><br>
                <h2><span class="typed" data-typed-items="Hello World!, I am Hanzel Sabio"></span></h2>
            </div>

        </section><!-- /Hero Section -->

        <?php include $_SERVER["DOCUMENT_ROOT"] . "/assets/layouts/about.php" ?>

        <?php include $_SERVER["DOCUMENT_ROOT"] . "/assets/layouts/experiences.php" ?>

        <?php include $_SERVER["DOCUMENT_ROOT"] . "/assets/layouts/skills.php" ?>

        <?php include $_SERVER["DOCUMENT_ROOT"] . "/assets/layouts/contact.php" ?>

    </main>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- ======= Footer ======= -->

    <footer>
    </footer>

    <!-- ======= Pre-loader ======= -->

    <!-- Preloader -->
    <div id="preloader"></div>

</body>