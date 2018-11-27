<!DOCTYPE html>
<html>
<head>
    <title><?php if (isset($_SESSION['logged_in'])) {
            echo 'Welkom - ' . $_SESSION['email'];
        } ?></title>
    <?php
    session_start();
    include("includes/includes.php");
    ?>
</head>
<body>
<!-- Nav begin-->
<?php include 'includes/navbar_index.php';
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-image" style="background-image: url(Header.jpg); background-size: cover;
  background-position: 50% 90%;">
                <div class="text-white text-center py-5 px-4 my-5">
                    <div>
                        <h1 class="card-title pt-3 mb-5 font-bold"><strong>Waar ga jij heen op vakatie?</strong></h1>
                        <a class="btn btn-outline-white btn-rounded" style="border-radius: 90px;"><i class="fa fa-home left"></i> Bekijk onze vakantiehuizen</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">

        <div class="col-md-12 mt-5">
            <h4>Dit zijn onze laatste vakantiehuizen:</h4>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card mt-5">
                <!--                  <div class="card-header primary-color white-text">-->
                <!--                      Naam van vakantiehuis.-->
                <!--                  </div>-->
                <img class="card-img" src="https://images.unsplash.com/photo-1533667586627-9f5ddbd42539?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bb707c0b87345277ebc415156111fb69&auto=format&fit=crop&w=1920&h=1080&q=60" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title"><a>Card title</a></h4>
                    <hr />
                    <p class="card-text">Huis beschrijving. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem, optio vero odio nam sit officia.</p>
                    <a href="" style="border-radius: 90px;" class="btn btn-primary">Button</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-5 col-lg-4">
            <div class="card mt-5">
                <!--                  <div class="card-header primary-color white-text">-->
                <!--                      Naam van vakantiehuis.-->
                <!--                  </div>-->
                <img class="card-img" src="https://images.unsplash.com/photo-1533667586627-9f5ddbd42539?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bb707c0b87345277ebc415156111fb69&auto=format&fit=crop&w=1920&h=1080&q=60" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title"><a>Card title</a></h4>
                    <hr />
                    <p class="card-text">Huis beschrijving. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem, optio vero odio nam sit officia.</p>
                    <a href="" style="border-radius: 90px;" class="btn btn-primary">Button</a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Footer -->
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