<?php

class connection
{
    public function connect()
    {
        $connect = new PDO('mysql:host=localhost;dbname=hhh', "root", "");
        return $connect;
    }
}
