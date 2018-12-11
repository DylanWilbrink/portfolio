<?php
session_start();
require_once('../includes/connection.php');
$connect = new connection();

$get_park = $connect->connect()->prepare('SELECT * FROM parks');
$get_park->execute();
$parks = $get_park->fetchAll();

if (isset($_POST['submit'])) {
    if (isset($_FILES['housepics'])) {
        echo 'is wel gezet';
        $errors = array();
        $file_name = $_FILES['housepics']['name'];
        $file_size = $_FILES['housepics']['size'];
        $file_tmp = $_FILES['housepics']['tmp_name'];
        $file_type = $_FILES['housepics']['type'];
        $file_ext = strtolower(end(explode('.', $_FILES['housepics']['name'])));
        $expensions = array('jpg', 'jpeg', 'png');

        if (in_array($file_ext, $expensions) === false) {
            $errors[] = 'Not allowed, ';
        }

        if ($file_size > 320000000) {
            $errors[] = 'File size too large, ';
        }

        $type = explode(".", $_FILES["housepics"]["name"]);
        $new_cover_name = uniqid('') . '.' . end($type);

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, '../files/' . $new_cover_name);
            echo 'Uploaded image';
        } else {
            echo 'No image uploaded';
            echo $errors;
        }
    } else {
        echo 'is niet gezet';
    }
    if (isset($_POST['house_name']) && isset($_POST['house_description'])) {
        $query = $connect->connect()->prepare('INSERT INTO homes (house_name, house_description, house_photos, park_id , person_count, general_information, house_level, price, discount) VALUES (:house_name, :house_description, :house_photos, :park_id, :person_count, :general_information, :house_level, :price, :discount)');

        $execute = $query->execute(array(
            ':house_name' => $_POST['house_name'],
            ':house_description' => $_POST['house_description'],
            ':house_photos' => $new_cover_name,
            ':park_id' => $_POST['park_id'],
            ':person_count' => $_POST['person_count'],
            ':general_information' => implode(", ", $_POST['general_information']),
            ':house_level' => $_POST['level'],
            ':price' => $_POST['price'],
            ':discount' => $_POST['discount']
        ));
    }
}

