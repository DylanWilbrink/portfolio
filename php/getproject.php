<?php
include('../includes/connection.php');
$connection = new connection();

$query = $connection->connect()->prepare('SELECT * FROM projects
                                          ORDER BY project_id DESC
                                          LIMIT 12');
$query->execute();
$results = $query->fetchAll();