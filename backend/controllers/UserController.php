<?php

require_once '../models/User.php';

class UserController {

    public function createUser($name, $email) {

        $user = new User();
        return $user -> create($name, $email);
    }

    public function getUsers() {

        $user = new User();
        return $user -> getAll();
    }

}

?>