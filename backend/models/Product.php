<?php

require_once '../config/Database.php';

class Product{

    private $conn;

    public function __contruct(){

        $this -> conn = Database::getConnection();
    }

    public function create($name, $price){

        $sql = "INSERT INTO products (name, price) VALUES (?, ?)";
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> bind_param("sd", $name, $price);
        return $stmt -> execute(); 
    }

    public function getAll(){

        $sql = "SELECT * FROM products";
        $result = $this -> conn -> query($sql);
        return $result -> fetch_all(MYSQLI_ASSOC);
    }
}

?>