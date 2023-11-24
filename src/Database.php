<?php


namespace DPOPay;


use PDO;

class Database
{
    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=".$_ENV['DB_HOST'].";dbname=".$_ENV['DB_DATABASE'];
        $username = $_ENV['DB_USERNAME'];
        $password = $_ENV['DB_PASSWORD'] ;

        try {
            $this->connection = new PDO($dsn,$username,$password);
        }catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);

         $statement->execute();

         $statement->fetchAll();
    }
}