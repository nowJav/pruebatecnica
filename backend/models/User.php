<?php

require_once '../config/Database.php';

class User{

    private $conn;

    public function __contruct(){

        $this -> conn = Database::getConnection();
    }

    public function create($name, $email){

        $sql = "INSERT INTO users (name, email) VALUES (?, ?)";
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> bind_param("ss", $name, $email);
        return $stmt -> execute(); 
    }

    public function getAll(){

        $sql = "SELECT * FROM users";
        $result = $this -> conn -> query($sql);
        return $result -> fetch_all(MYSQLI_ASSOC);
    }
}

?>