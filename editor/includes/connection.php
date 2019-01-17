<?php
include( '../config.php');

class connection{

    public function connect()

    {
        $dbhost = "pdvhacks.com";
        $dbname = "dehefnq201_aventus";
        $dbusername = "dehefnq201_aventus";
        $dbpassword = "aventus";
//        BEN BEZIG MET EEN EXTERNE VERSIIE WERKT ALELEEN NIET MEEEE!!!11!!!1
        $connect = new PDO('mysql:host='. $dbhost .';dbname='. $dbname .'', $dbusername , $dbpassword);
        return $connect;
    }
}