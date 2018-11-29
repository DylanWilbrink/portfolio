<html>
<head>
    <?php include('../php/homes.php');
    $submit = isset($_POST['submit']) ? $_POST['submit'] : '';

    if ($submit) {
        $show = $connection->connect()->prepare("SELECT * FROM projects p
                                                  WHERE p.project_name LIKE :search OR p.project_creators LIKE :search
                                                  ORDER BY p.project_id DESC");
        $show->execute(array(
            ':search' => '%' . $search . '%'
        ));
        $shows = $show->fetchAll();
        $show_count = $show->rowCount();
    }
    ?>
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
    <link rel="stylesheet" href="js/swiper/css/swiper.css">
    <!--js-->
    <script src="js/swiper/js/swiper.js"></script>
    <script src="js/swiper/js/swiper.esm.js"></script>
</head>
<body>
<?php
include('../includes/navbar.php');
?>

<div class="container mt-4">
    <h2 class="intro-kop">Titeltext voor de searchpage</h2>
    <p class="intro-text"> Inleidende text voor de searchpage. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Suspendisse ornare, mauris ut convallis euismod, magna orci sodales neque.</p>
    <form action="search.php" class="intro-text" style="padding-top: 0px; margin-top: 0px !important;" method="post">
        <input type="text" name="search">
        <input type="submit" name="submit">
    </form>
    <div class="row">
        <?php
        if (isset($shows)) {
            if (!empty($shows)) {
                foreach ($shows as $result) {
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" style="padding-top: 24px">
                        <div class="av-card">
                            <img class="av-img"
                                 src="http://placehold.jp/7464ac/ffffff/1920x1080.png?text=<?php echo $result['project_imagename']; ?>">
                            <div class="av-text">
                                <h2 class="av-card-kop"><?php echo $result['project_name']; ?></h2>
                                <p class="av-card-text"><?php echo $result['project_description']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo 'Geen resultaten gevonden';
            }
        } else {
            foreach ($results as $result) {
                ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" style="padding-top: 24px">
                    <div class="av-card">
                        <img class="av-img"
                             src="http://placehold.jp/7464ac/ffffff/1920x1080.png?text=<?php echo $result['project_imagename']; ?>">
                        <div class="av-text">
                            <h2 class="av-card-kop"><?php echo $result['project_name']; ?></h2>
                            <p class="av-card-text"><?php echo $result['project_description']; ?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
        } ?>
    </div>
</div>
</body>
</html>