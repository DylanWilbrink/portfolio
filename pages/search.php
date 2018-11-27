<?php
session_start();
include("../includes/connection.php");
$connect = new connection();
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<header >

        <a href="search.php?volgorde=name">name A-Z</a>
        <a href="search.php?volgorde=name_desc">name Z-A</a>
        <a href="search.php?volgorde=price">price laag - hoog</a>
        <a href="search.php?volgorde=price_desc">price hoog - laag</a>
        <a href="search.php?volgorde=date">oud - nieuw</a>
        <a href="search.php?volgorde=date_desc">nieuw - oud</a>
    </div>
</header>


<!-- Body -->
<div class="item-wrapper">
    <?php

    if (isset($_GET['volgorde'])) {

        switch ($_GET['volgorde']) {

            case "name":
                $volgorde = "house_name";
                break;

            case "name_desc":
                $volgorde = "house_name DESC";
                break;

            case "price":
                $volgorde = "price";
                break;

            case "price_desc":
                $volgorde = "price DESC";
                break;

            case "date":
                $volgorde = "date_created";
                break;

            case "date_desc":
                $volgorde = "date_created DESC";
                break;

            default:
                $volgorde = "house_name";
                break;

        }

    } else {

        $volgorde = "house_name";
    }

    $sql = $connect->connect()->prepare("SELECT * FROM homes ORDER BY " . $volgorde);
    $sql->BindParam(1, $volgorde);
    $sql->execute();
    $result = $sql->fetchAll();

    foreach ($result as $row) {

        echo "<a href='views/homes.php?house=" . $row['house_id'] . "'><div class='vinyl-item'><h4>"
            . strip_tags($row['house_name'], '')
            . " - $"
            . strip_tags($row["price"], '')
            . "</h4><img style='width: 100%;' src='data/img/"
            . $row['house_photos']
            . "'> </div> </a>";
    }
    ?>
</div>

</body>
</html>
