<?php
class connection
{
    public function connect()
    {
        $connect = new PDO('mysql:host=pdvhacks.com;dbname=dehefnq201_aventus', "dehefnq201_aventus", "aventus");
        return $connect;
    }
}
