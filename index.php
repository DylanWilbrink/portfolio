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
    <link href="stylesheets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="stylesheets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="stylesheets/css/style.css" rel="stylesheet">


    <!--css-->
    <link rel="stylesheet" href="js/swiper/css/swiper.css">
    <!--js-->
    <script src="js/swiper/js/swiper.js"></script>
    <script src="js/swiper/js/swiper.esm.js"></script>

</head>

<body>
<!-- Start your project here-->
<?php
include('includes/navbar_index.php');
include('includes/connection.php');
$connection = new connection();

$query = $connection->connect()->prepare('SELECT * FROM projects
                                          ORDER BY project_id DESC
                                          LIMIT 12');
$query->execute();
$results = $query->fetchAll();
?>
<div class="card jumbocard card-image" style="background-image: url(Header.jpg);">
    <div class="container quote-container py-5 my-5">
        <div class="quote">
            <div class="text">
                Quote van de persoon
            </div>
            <div class="text-bottom">
                Naam/functie of iets dergelijks
            </div>
            <div class="link-button">
                <a class="link" href="pages/search.php">Meer over onderwerp</a>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <h2 class="intro-kop">Titeltext voor de homepage</h2>
    <p class="intro-text"> Inleidende text voor de homepage. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Suspendisse ornare, mauris ut convallis euismod, magna orci sodales neque, consequat malesuada ante eros quis
        lectus. Phasellus dictum tempor vehicula. Vestibulum vitae diam nibh. Morbi scelerisque elit eu libero
        condimentum, vitae auctor nunc congue. Praesent justo ex, feugiat in ante at, sodales laoreet turpis. Etiam
        feugiat, turpis ac mattis commodo, neque risus consectetur ante, eget condimentum mi nibh sit amet nisl.</p>
</div>
<div class="container my-4">
    <div class="swiper-container sliderprojecten">
        <div class="swiper-wrapper">

            <?php foreach ($results as $result) { ?>
                <div class="swiper-slide">
                    <a href="http://localhost/portfolio/project/<?php echo $result['project_id']; ?>">
                        <div class="av-card">
                            <img class="av-img"
                                 src="http://placehold.jp/7464ac/ffffff/1920x1080.png?text=<?php echo $result['project_imagename']; ?>">
                            <div class="av-text">
                                <h2 class="av-card-kop"><?php echo $result['project_name']; ?></h2>
                                <p class="av-card-text"><?php echo $result['project_description']; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
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
            breakpoints: {
                768: {
                    slidesPerView: 2
                }
            },
        });
    </script>

</div>


<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>

</body>

</html>