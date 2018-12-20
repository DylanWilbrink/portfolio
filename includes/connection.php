<?php
class connection
{
    public function connect()
    {
        $connect = new PDO('mysql:host=185.104.29.16;dbname=dylanw_hhh', "dylanw_root", "admin");
        return $connect;
    }
}
