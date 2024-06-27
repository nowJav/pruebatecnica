<?php

require_once '../config/Database.php';

class Order{

    private $conn;

    public function __contruct(){

        $this -> conn = Database::getConnection();
    }

    public function create($userId, $orderDate){

        $sql = "INSERT INTO orders (user_id, order_date, total) VALUES (?, ?, 0)";
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> bind_param("is", $userId, $orderDate);
        return $stmt -> execute(); 
    }

    public function getAll(){

        $sql = "SELECT * FROM orders";
        $result = $this -> conn -> query($sql);
        return $result -> fetch_all(MYSQLI_ASSOC);
    }
}

?>