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
