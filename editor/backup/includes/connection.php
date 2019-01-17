<?php
include('../config.php');
class connection{

    protected $database;

    function __construct(){
        global $db;
        $this->database = $db;
    }

    public function connect(){
        echo "voor echo dbhost -->" , $this->database['dbhost'] , "<-- na echo dbhost";
        $connect = new PDO('mysql:host='. $this->database['dbhost'] .';dbname='. $this->database['dbname'] .'', $this->database['dbusername'] , $this->database['dbpassword']);
        return $connect;
    }
}