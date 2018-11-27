










<!--


zegmaar we moeten de home toevoegen nog doen hiervoor



<?php

//start de sessie (waarin ik variabelen mee opsla door pagina's heen)
session_start();
// include de database connectie variabel
include_once('../includes/connection.php');

// als de form is ge submit
if (isset($_POST['submit'])) {

    // haalt alles op van de vinyl desc met het zelfde vinyl id als meegegeven in de get
    $sql = $connect->prepare("SELECT * FROM homes WHERE house_id=?");
    $sql->BindParam(1, $_GET['product']);
    $sql->execute();
    $result = $sql->fetchAll();

    foreach ($result as $row) {
        // vul het variabel met het user id van het gekozen product
        $userid = $row['userid'];
    }
    if ($userid == $_SESSION['userid']) {

        // update de productomschrijving / pagina
        $sql = "UPDATE vinyl_desc SET vinyl_name=?, vinyl_description=?, vinyl_price=? WHERE vinyl_id=?";


        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $_POST['vinylname'], PDO::PARAM_STR);
        $stmt->bindParam(2, $_POST['vinyldesc'], PDO::PARAM_STR);
        $stmt->bindParam(3, $_POST['vinylprice'], PDO::PARAM_STR);
        $stmt->bindParam(4, $_GET['product'], PDO::PARAM_STR);
        $stmt->execute();

        // brengt de gebruiker naar de index pagina
        header("Location: ../index.php");
        exit;
    } else {
        // brengt de gebruiker naar de index pagina als de gebruiker niet de maker van het product is.
        header("Location: ../index.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    //start de sessie (waarin ik variabelen mee opsla door pagina's heen)
    session_start();
    include_once("include.php");
    ?>
</head>

<body>
<?php
// include de code voor de database connectie
include_once("connection.php");
// include de code voor de html header
include_once("header.php");

// code om de form uit te printen met de value's uit de database
$sql = $conn->prepare("SELECT * FROM vinyl_desc WHERE vinyl_id=?");
$sql->BindParam(1, $_GET['product']);
$sql->execute();
$result = $sql->fetchAll();

foreach ($result as $row) {

    // print de form uit
    echo "<form id='form' action='productupdate.php?product=" . $_GET['product'] . "' method='POST' enctype='multipart/form-data'>
           vinyl naam: <input type='text' maxlength='15' name='vinylname' value='"
        . $row['vinyl_name']
        . "' required><br> vinyl omschrijving (staat etc): <input type='text' maxlength='300' name='vinyldesc' value='"
        . $row['vinyl_description']
        . "' required><br> Prijs: &euro;<input type='number' maxlength='6' name='vinylprice' value='"
        . $row['vinyl_price']
        . "' required><br> <input type='submit' name='submit'> </form>";
} ?>

<!-- code voor de terug knop -->
<button onclick="goBack()">Go Back</button>

<a href="../index.php"> index </a>

<?php
include("footer.php");
?>
</body>
</html>
