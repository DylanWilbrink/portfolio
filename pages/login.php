<body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php if (isset($_SESSION['logged_in'])) {
            echo 'Welkom - ' . $_SESSION['email'];
        } ?></title>
    <?php
    session_start();
    //    include("../includes/includes.php");
    ?>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="../stylesheets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../stylesheets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../stylesheets/css/style.css" rel="stylesheet">

    <style>
        footer{
            position: fixed; bottom: 0; width: 100%;
        }

        .btn{
            border-radius: 90px;
        }
    </style>
</head>

<body>

<!-- Start your project here-->
<?php
include('../includes/navbar.php');
?>
<div class="container">


    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 mt-5">
            <form action="../php/login.php" method="post" class="text-center border border-light p-5"">
            <p class="h4 mb-4">Inloggen</p>
            <p>
                <a href="register.php">Nog geen account? Klik dan hier.</a>
            </p>
            <input type="text" name="email" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="E-mail">
            <input type="password" name="password" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Wachtwoord">
            <button class="btn btn-primary btn-block" name="submit" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>
<!-- Footer -->
<!-- /Start your project here-->

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