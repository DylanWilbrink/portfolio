<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('../includes/navbar.php');
    $connect = new connection();
    if (isset($_GET['project_id']) && !empty($_GET['project_id'])){
    // print project uit
    $sql = $connect->connect()->prepare("SELECT * FROM projects WHERE project_id=?");
    $sql->BindParam(1, $_GET['project_id']);
    $sql->execute();
    $result = $sql->fetchAll();
    ?>
    <?php
    $pageTitle = 'Project '. $_GET['project_id']. '';
    include('../includes/includes.php');
    ?>
</head>
<body>
<!-- Start your project here-->
<?php
foreach ($result as $row) { ?>
    <div class="container mt-4">
        <div class="av-card-project">
            <img class="av-img"
                 src="http://placehold.jp/7464ac/ffffff/1920x1080.png?text=<?php echo $row['project_imagename']; ?>">
            <div class="av-text">
                <h2 class="av-card-kop"><?php echo $row['project_name']; ?></h2>
                <p class="av-card-text">Project omschrijving:</p>
                <p class="av-card-text"><?php echo $row['project_description']; ?></p><br />
                <p class="av-card-text">Creator: <?php echo $row['project_creators']; ?></p>
                <p class="av-card-text">Opleiding: <?php echo $row['project_study']; ?></p>
                <div class="link-button-project">
                    <a class="link" href="<?php echo $row['project_url']; ?>">Project bekijken</a>
                </div>
            </div>
        </div>
    </div>
<?php }
} else {
    header("Location: http://localhost/portfolio/");
}
?>
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
