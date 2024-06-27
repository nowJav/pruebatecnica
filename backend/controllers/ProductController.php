<?php

require_once '../models/Product.php';

class ProductController {

    public function createProduct($name, $price) {

        $product = new Product();
        return $product -> create($name, $price);
    }

    public function getProducts() {

        $product = new Product();
        return $product -> getAll();
    }

}

?>