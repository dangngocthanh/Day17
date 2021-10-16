<?php

class  library
{
    public $username;
    public $password;

    public function __construct()
    {
    }

    public function connect()
    {
        try {
            return new PDO('mysql:host=localhost;dbname=library', 'root', '');
        } catch
        (PDOException $PDOException) {
            echo $PDOException->getMessage();
            exit();
        }
    }
}