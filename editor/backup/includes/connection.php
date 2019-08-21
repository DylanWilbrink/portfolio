<?php
//include('../config.php');

//$dbhost = "pdvhacks.com";
//$dbname = "dehefnq201_aventus";
//$dbusername = "dehefnq201_aventus";
//$dbpassword = "aventus";

require ('../config.php');
class connection{

    function __construct(){
        global $dbhost;
        global $dbname;
        global $dbusername;
        global $dbpassword;
        $this->host = $dbhost;
        $this->name = $dbname;
        $this->username = $dbusername;
        $this->password = $dbpassword;
    }

    public function connect(){
        echo "voor echo dbhost -->" , $this->host , "<-- na echo dbhost";
        $connect = new PDO('mysql:host='. $this->database['dbhost'] .';dbname='. $this->database['dbname'] .'', $this->database['dbusername'] , $this->database['dbpassword']);
        return $connect;
    }
}