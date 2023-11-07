<?php

namespace Core;

use PDO;
class Database
{
    public $connection;
    public $statement;

    public function __construct(){
        $this->connection = new PDO("mysql:host=127.0.0.1;port=3306;dbname=todoDB","noteUser","I7I4I2-70&o@", [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
         ]);
    }
    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (! $result) {
            abort();
        }

        return $result;
    }
}
