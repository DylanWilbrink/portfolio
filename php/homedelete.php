<?php
//start de sessie (waarin ik variabelen mee opsla door pagina's heen)
session_start();
require_once("../includes/connection.php");

// controleerd of user id het zelfde is als user id van het product
if ($_SESSION['role'] == '2') {

    // verwijderd het product
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM homes WHERE house_id=" . $_GET['house'];
    $conn->exec($sql);

    // brengt de user naar de index
    header("Location: ../index.php");
    exit;
} else {
    // brengt de user naar de index
    header("Location: ../index.php");
    exit;
}
?>