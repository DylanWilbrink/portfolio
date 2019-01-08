<?php
include('../includes/connection.php');
$connection = new connection();
//Laad projecten in
$query = $connection->connect()->prepare('SELECT * FROM projects');
$query->execute();
$results = $query->fetchAll();

$search = isset($_POST['search']) ? $_POST['search'] : '';


