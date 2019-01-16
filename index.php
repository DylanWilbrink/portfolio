<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $pageTitle = 'Homepagina';
        include('includes/includes.php');
    ?>
</head>

<body>
<!-- Start your project here-->
<?php
include('includes/navbar.php');
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
                Ik ben bezig met een project!
            </div>
            <div class="text-bottom">
                Onderandere deze studenten hebben hard gewerkt aan een aantal projecten.
            </div>
            <div class="link-button">
                <a class="link" href="pages/search.php">Projecten bekijken</a>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <h2 class="intro-kop">Projectenportaal</h2>
    <p class="intro-text">Op deze webapplicatie vind u projecten die onze studenten hebben gerealiseerd. Kijk gerust rond en zie wat voor soort opdrachten u straks ook kan maken als Applicatie- mediaontwikkelaar.  </p>
</div>
<div class="container my-4">
    <div class="swiper-container sliderprojecten">
        <div class="swiper-wrapper">

            <?php foreach ($results as $result) { ?>
                <div class="swiper-slide">
                    <a href="http://www.jaimy.holidayrentcenter.com/project/<?php echo $result['project_id']; ?>">
                        <div class="av-card">
                            <img class="av-img"
                                 alt="<?php echo $result['project_imagename']; ?>"
                                 src="http://www.pdvhacks.com/Aventus/upload/<?php echo $result['project_imagename']; ?>">
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
<script src="http://www.jaimy.holidayrentcenter.com/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script src="http://www.jaimy.holidayrentcenter.com/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script src="http://www.jaimy.holidayrentcenter.com/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script src="http://www.jaimy.holidayrentcenter.com/js/mdb.min.js"></script>

</body>

</html>