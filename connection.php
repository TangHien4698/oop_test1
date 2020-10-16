<?php
class DB
{
    public static function connect()
    {
        $conn = mysqli_connect("localhost", "root","admin","egs_oop_1");
        return $conn;
    }
}

