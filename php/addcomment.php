<?php
session_start();
$house = '1';
include("../includes/connection.php");
$connect = new connection();
if (isset($_POST["submit"])) {

    $stmt = $connect->connect()->prepare("INSERT INTO comments(user_id, house_id, category_rating, comment) 
                            VALUES (:user_id, 
                             :house_id, 
                             :category_rating, 
                             :comment)");


    //strikte variabelen
    $comment = strip_tags($_POST['comment']);


    $stmt->bindParam(':user_id', $_SESSION["user_id"], PDO::PARAM_STR);
    $stmt->bindParam(':house_id', $house, PDO::PARAM_STR);
    $stmt->bindParam(':category_rating', $_POST['rating'], PDO::PARAM_STR);
    $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
    if ($_POST['rating'] <= 10 && $_POST['rating'] >= 0) {
        $KLAP = $stmt->execute();
        header("Location: ../pages/home.php?house=". $_GET['house']);
        exit;
    } else {
        echo "HACKERMEN <img src='http://i0.kym-cdn.com/entries/icons/original/000/021/807/4d7.png'>";
    }
}

?>