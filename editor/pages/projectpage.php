<?php
    $pageTitle = 'Project '. $_GET['project_id']. '';
    include('../includes/includes.php');
?>
<body>
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
    <!-- Start your project here-->
    <?php
    foreach ($result as $row) { ?>
        <div class="container mt-4">
            <div class="av-card-project">
                <img class="av-img"
                     src="http://www.pdvhacks.com/Aventus/upload/<?php echo $row['project_imagename']; ?>"
                     alt="<?php echo $row['project_imagename']; ?>">
                <div class="av-text">
                    <h2 class="av-card-kop"><?php echo $row['project_name']; ?></h2>
                    <p class="av-card-text">Project omschrijving:</p>
                    <p class="av-card-text"><?php echo $row['project_description']; ?></p><br />
                    <p class="av-card-text">Creator: <?php echo $row['project_creators']; ?></p>
                    <p class="av-card-text">Opleiding: <?php echo $row['project_study']; ?></p>
                    <?php
                        if( $row['project_url'] != "0"){
                            ?>
                            <div class="link-button-project">
                                <a class="link" href="<?php echo $row['project_url']; ?>">Project bekijken</a>
                            </div>
                            <?php
                        }
                        else{
                            echo "";
                        }
                    ?>

                </div>
            </div>
        </div>
    <?php }
    } else {
        header("Location: http://localhost/portfolio/");
    }
    ?>
</body>
<?php
include ('../includes/footer.php');?>
