<?php

session_start();
require_once '../includes/connection.php';
$connection = new Connection();

$query = $connection->connect()->prepare('SELECT * FROM users WHERE email = :email');
$query->execute(array(
    ':email' => $_POST['email']
));
$result = $query->fetchAll();

if (isset($_POST['submit'])) {
    //Start logging in
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $query = $connection->connect()->prepare("SELECT * FROM users WHERE email=? AND password=?");

        foreach ($result as $hash) {
            $hashed = password_verify($_POST['password'], $hash['password']);

            $query->bindParam(1, $email);
            $query->bindParam(2, $hashed);
        }

        $query->execute();
        //If logged in allow access to site
        if ($hashed == true) {
            foreach ($result as $results) {
                $_SESSION['user_id'] = $results['user_id'];
                $_SESSION['email'] = $results['email'];
                $_SESSION['logged_in'] = true;
                $_SESSION['role'] = $results['role'];
            }
            header('location: ../index.php');
            exit;
        } else {
            echo 'Naam of wachtwoord incorrect';
            header('location: ../pages/login.php');
        }
    } else {
        echo 'Voer een naam en wachtwoord in';
        header('location: ../pages/login.php');
    }
} else {
    echo 'balzak';
    return false;

}