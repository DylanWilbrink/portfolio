<!DOCTYPE html>
<html>
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

    <?php
    session_start();
    include("../includes/getname.php");
    include("../includes/connection.php");
    $connect = new connection();

    ?>
</head>

<body>
<?php
include('../includes/navbar.php');
?>
<div class="container">
    <div class="row">
    <?php
    // get controle
    if (isset($_GET['project_id']) && !empty($_GET['project_id'])){
// print project uit
        $sql = $connect->connect()->prepare("SELECT * FROM homes WHERE house_id=?");
        $sql->BindParam(1, $_GET['house']);
        $sql->execute();
        $result = $sql->fetchAll();

        foreach ($result as $row) {
                $facilities = explode(", ", $row['general_information']);
                echo "<div class=\"col-md-6\">
                <div class=\"card mt-5\">
                    <img class=\"card-img\" src=\"../data/img/" . $row['house_photos'] . "\" alt=\"Foto van het huis/de kamer\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\"> " . strip_tags($row['house_name'], '') . "</h4>
                        <hr>
                        <p class=\"card-text mb-0 font-weight-bold\">Omschrijving:</p>
                        <p class=\"card-text mb-3\"> " . $row['house_description'] . " </p>
                        <div class=\"form-row mb-3\">
                            <div class=\"col custom-control custom-radio\">
                                <p class=\"card-text font-weight-bold\">Afwerkingsniveau:</p>
                            </div>
                            <div class=\"col custom-control custom-radio\">
                                <p class=\"card-text\"> " . $row["house_level"] . " </p>
                            </div>
                            <div class=\"col custom-control\">
                            </div>
                        </div>
                        <p class=\"card-text font-weight-bold mb-0\">Faciliteiten:</p>
                        <p class=\"card-text mb-0\">" . implode($facilities, "<br/>") . "</p>
                    </div>
                </div>
                </div>
                <div class='col-md-6'>
                <div class=\"card mt-5\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Boeken?</h4>
                        <hr>
                        <div class=\"form-row mb-3\">
                            <div class=\"col custom-control custom-radio\">
                                <p class=\"card-text font-weight-bold\">Prijs per nacht:</p>
                            </div>
                            <div class=\"col custom-control custom-radio\">
                                <p class=\"card-text\"><s>€" . strip_tags($row["price"], '') . "</s></p>
                            </div>
                            <div class=\"col custom-control\">
                                <p class=\"card-text\">€" . strip_tags($row["discount"], '') . "</p>
                            </div>
                            <div class=\"col custom-control\">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </div>";
        }
    } else {
        header("Location: ../index.php");
    }
    ?>
</div>

</body>
</html>
