<html>
<head>
    <?php include('../php/projects.php');
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
    <link href="http://localhost/portfolio/stylesheets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="http://localhost/portfolio/stylesheets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="http://localhost/portfolio/stylesheets/css/style.css" rel="stylesheet">

</head>
<body>
<?php
include('../includes/navbar.php');
?>

<div class="container mt-4">
    <h2 class="intro-kop">Projecten.</h2>
    <p class="intro-text">Hier vind u projecten die onze studenten hebben gemaakt. U kunt zoeken op basis van projectnamen of de namen van de studenten.</p>
    <form action="http://localhost/portfolio/project" class="intro-text" style="padding-top: 0px; margin-top: 0px !important;" method="post">
        <input type="text" name="search" placeholder="Projecten zoeken"> <!-- Nog stylen.-->
        <input type="submit" name="submit" value="Zoeken">
    </form>
    <div class="row">
        <?php
        if (isset($shows)) {
            if (!empty($shows)) {
                foreach ($shows as $result) {
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" style="padding-top: 24px">
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
                    <?php
                }
            } else {
                ?>
                <div class="col-md-12 mt-4">
                    <p class="error-text">Er zijn geen resultaten gevonden.</p>
                </div>
                <?php
            }
        } else {
            foreach ($results as $result) {
                ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" style="padding-top: 24px">
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
                <?php
            }
        } ?>
    </div>
</div>

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="http://localhost/portfolio/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="http://localhost/portfolio/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="http://localhost/portfolio/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="http://localhost/portfolio/js/mdb.min.js"></script>
</body>
</html>