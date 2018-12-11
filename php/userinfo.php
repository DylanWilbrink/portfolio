<?php
session_start();
require_once('../includes/connection.php');
$connection = new connection();

$query = $connection->connect()->prepare('SELECT * FROM users WHERE user_id = :user_id');
$query->execute(array(
    ':user_id' => $_SESSION['user_id']
));
$results = $query->fetchAll();