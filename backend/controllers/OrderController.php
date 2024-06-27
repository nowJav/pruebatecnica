<?php

require_once '../models/Order.php';

class OrderController {

    public function createOrder($userId, $orderDate) {

        $order = new Order();
        return $order -> create($userId, $orderDate);
    }

    public function getOrders() {

        $order = new Order();
        return $order -> getAll();
    }

}

?>