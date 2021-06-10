<?php

require_once 'classes/sql.php';

if(isset($_GET["email"]) && isset($_GET['pass'])){
    // check these spaces as your db 
    $connection = new Sql('/*DBNAME HERE*/', '/*HOSTNAME HERE*/', '/*DB USER LOGIN HERE*/', '/*PASS USER LOGIN HERE*/'); 
    $email = $_GET["email"];
    $pass = $_GET["pass"];

    $connection->executeQuery("INSERT INTO /*TABLE NAME HERE*/(/*EMAIL COLUMN NAME HERE*/, /*PASSWORD COLUMN NAME HERE*/) VALUES (:TYPED_EMAIL, :TYPED_PASSWORD)", [
        "TYPED_EMAIL"=>$email, "TYPED_PASSWORD"=>$pass
    ]);
}

?>