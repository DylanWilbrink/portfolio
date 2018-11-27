<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="../stylesheets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../stylesheets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../stylesheets/css/style.css" rel="stylesheet">



    <!--css-->
    <link rel="stylesheet" href="../js/swiper/css/swiper.css">
    <!--js-->
    <script src="../js/swiper/js/swiper.js"></script>
    <script src="../js/swiper/js/swiper.esm.js"></script>


    <?php
    include('../php/addhome.php');
    ?>
</head>

<body>
<!-- Start your project here-->
<?php
include('../includes/navbar.php');
?>
<div class="card jumbocard card-image" style="background-image: url(../Header.jpg);">
    <div class="container quote-container py-5 my-5">
        <div class="quote">
            <div class="text">
                Quote van de persoon.
            </div>
            <div class="text-bottom">
                Naam/functie of iets dergelijks
            </div>
            <div class="link-button">
                <a class="link" href="#link">Meer over onderwerp</a>
            </div>
        </div>
    </div>
</div>

<div class="container my-4">
    <div class="swiper-container sliderprojecten">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="av-card" style="height: 350px; margin: 2px; box-shadow: 0 0 0 2px #404040;">
                    <img src="http://placehold.jp/7464ac/ffffff/1920x1080.png?text=Afbeelding van project" alt="" style="width: 100%; height: 50%; object-fit: cover;">
                    <div class="av-text" style="padding: 24px">
                        <h2 style="line-height: 24px; font-size: 22px; font-family: the_mix_bold; color: #404040">Titel van het project</h2>
                        <p>omschrijving van project.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="av-card" style="height: 350px; margin: 2px; box-shadow: 0 0 0 2px #404040;">
                    <img src="http://placehold.jp/3EB1C8/ffffff/1920x1080.png?text=Afbeelding van project" alt="" style="width: 100%; height: 50%; object-fit: cover;">
                    <div class="av-text" style="padding: 24px">
                        <h2 style="line-height: 24px; font-size: 22px; font-family: the_mix_bold; color: #404040">Titel van het project</h2>
                        <p>omschrijving van project.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="av-card" style="height: 350px; margin: 2px; box-shadow: 0 0 0 2px #404040;">
                    <img src="http://placehold.jp/ea7600/ffffff/1920x1080.png?text=Afbeelding van project" alt="" style="width: 100%; height: 50%; object-fit: cover;">
                    <div class="av-text" style="padding: 24px">
                        <h2 style="line-height: 24px; font-size: 22px; font-family: the_mix_bold; color: #404040">Titel van het project</h2>
                        <p>omschrijving van project.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>
    <script>
        var swiper = new Swiper('.sliderprojecten', {
            speed: 1000,
            slidesPerView: 3,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            spaceBetween: 24,
            loop: true,
            // effect: 'fade',
            coverflowEffect: {
                rotate: 50,
                slideShadows: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                992: {
                    slidesPerView: 1
                }
                768: {
                    slidesPerView: 2
                }
            },
        });
    </script>
</div>


<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../js/mdb.min.js"></script>

</body>

</html>
