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
    include("../includes/connection.php");
    $connect = new connection();
    ?>
</head>

<body>
<!-- Start your project here-->
<?php
include('../includes/navbar.php');

// get controle
if (isset($_GET['project_id']) && !empty($_GET['project_id'])){
// print project uit
    $sql = $connect->connect()->prepare("SELECT * FROM projects WHERE project_id=?");
    $sql->BindParam(1, $_GET['project_id']);
    $sql->execute();
    $result = $sql->fetchAll();

    foreach ($result as $row) {
        echo $row['project_name'].
            $row['project_description'].
            "<img class=\"card-img\" src=\"../data/img/" . $row['project_imagename'] . "\" alt=\"foto van het projcet/\">";
    }
} else {
    header("Location: ../index.php");
}
?>


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
