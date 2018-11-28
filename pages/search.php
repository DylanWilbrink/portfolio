<html>
<head>
    <?php include('../php/homes.php');

    if($_POST['submit']) {
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
</head>
<body>
<form action="search.php" method="post">
    <input type="text" name="search">
    <input type="submit" name="submit">
</form>

<?php

if (isset($shows)) {
    foreach ($shows as $result) {
        ?>
        <div style="float:left; width:200px;height:100px;border:solid;">
            <?php
            echo $result['project_name'] . '<br>';
            echo $result['project_imagename'];
            ?>
        </div>
        <?php
    }
} else {
    foreach ($results as $result) {
        ?>
        <div style="float:left; width:200px;height:100px;border:solid;">
            <?php
            echo $result['project_name'] . '<br>';
            echo $result['project_imagename'];
            ?>
        </div>
        <?php
    }
} ?>
</body>
</html>