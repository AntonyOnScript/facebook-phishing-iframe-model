<?php

class Sql{
    private $conn;

    public function __construct($dbname, $hostname, $login, $pass){
        $this->conn = new PDO("mysql:dbname=$dbname;host=$hostname", $login, $pass);
    }

    private function spreadParameters($statement, $parameters){
        foreach ($parameters as $key => $value){
           $this->toBind($statement, $key, $value);
        }
    }

    private function toBind($statement, $key, $value){
        $statement->bindParam($key, $value);
    }

    public function executeQuery($bruteQuery, array $parameters = []){
        $statement = $this->conn->prepare($bruteQuery);
        $this->spreadParameters($statement, $parameters);
        $statement->execute();
    }
}

?>