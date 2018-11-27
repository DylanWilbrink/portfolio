<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="../layout/scripts/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="../layout/scripts/jquery.validate.js"></script>
    <script type="text/javascript" src="../layout/scripts/bootstrap.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="../layout/scripts/fontawesome-all.js"></script>
    <?php
    include('../includes/includes.php');
    ?>
    <link rel="stylesheet" type="text/css" href="../stylesheets/styles.css">
</head>
<body>

<!-- Header -->

<?php
include('../includes/navbar.php');
?>

<div class="my-3 p-3 bg-white rounded box-shadow container">
    <form class="p-3" id="form" action="../php/voeghuistoe.php" method="POST" enctype="multipart/form-data">
        <h6 class="border-bottom border-gray pb-2 mb-0">Nieuw product toevoegen:</h6>
        <div class="row my-2">
            <div class="col-12">
                <label>Naam van het huis</label>
                <input class="form-control" type="text" maxlength="15" name="house_name">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-12">
                <label>Beschrijving van het huis</label>
                <input class="form-control" type="text" maxlength="300" name="house_description" required>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-12">
                <label>welk park heeft u?</label>
                <input class="form-control" type="text" maxlength="6" name="park_id" required>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-12">
                <label>Huis afbeelding:</label>
                <label class="custom-file">
                    <input type="file" id="file" name="house_photos" class=" btn btn-primary">
                </label>
            </div>
        </div>

        <div class="row my-2">
            <div class="col-12">
                <label>extra attributen (zwembad etc)</label>
                <input class="form-control" type="text" maxlength="300" name="general_information" required>
            </div>
        </div>

        <div class="row my-2">
            <div class="col-12">
                <label>aantal personen</label>
                <input class="form-control" type="text" maxlength="6" name="person_count" required>
            </div>
        </div>

        <div class="row my-2">
            <div class="col-12">
                <label>afwerkingsniveau</label>
                <!-- dropdown maken -->
                <input class="form-control" type="text" maxlength="6" name="level" required>
            </div>
        </div>

        <div class="row my-2">
            <div class="col-12">
                <label>discount</label>
                <input class="form-control" type="text" maxlength="6" name="discount" required>
            </div>
        </div>

        <div class="row my-2 ">
            <div class="col-2">
                <input type="submit" class="btn btn-primary" value="Product toevoegen" name="submit">
            </div>
        </div>
        <!--        <label for="number"> rating:</label>-->
        <!--        <input type="number" name="rating" max="10" min="0">-->
        <!--        <textarea name="comment" maxlength="1500" id="comment" cols="30" rows="10"></textarea>-->
        <!--        <input type="submit" name="submit" value="place comment">-->
    </form>
</div>
</body>
</html>