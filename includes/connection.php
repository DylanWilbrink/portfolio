<?php
class connection
{
    public function connect()
    {
        $connect = new PDO('mysql:host=localhost;dbname=portfolio', "root", "");
        return $connect;
    }
}
