<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    //Laad titel in
    $pageTitle = 'Project '. $_GET['project_id']. '';
    include('../includes/includes.php');
    ?>
</head>
<body>
<?php
include('../includes/navbar.php');
$connect = new connection();
//Laad details in
if (isset($_GET['project_id']) && !empty($_GET['project_id'])){
    // print project uit
    $sql = $connect->connect()->prepare("SELECT * FROM projects WHERE project_id=?");
    $sql->BindParam(1, $_GET['project_id']);
    $sql->execute();
    $result = $sql->fetchAll();
    ?>
<!-- Start your project here-->
<?php
foreach ($result as $row) {
    //Display de projectdetails
    ?>
    <div class="container mt-4">
        <div class="av-card-project">
            <img class="av-img"
                 src="http://placehold.jp/7464ac/ffffff/1920x1080.png?text=<?php echo $row['project_imagename']; ?>"
                 alt="<?php echo $row['project_imagename']; ?>">
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
<script src="http://localhost/portfolio/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script src="http://localhost/portfolio/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script src="http://localhost/portfolio/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script src="http://localhost/portfolio/js/mdb.min.js"></script>

</body>

</html>
