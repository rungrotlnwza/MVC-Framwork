<?php
// API/ProductAPI.php

require_once '../config/config.php';

function getProduct() {
    header('Content-Type: application/json');
    echo json_encode(["message" => "Product data"]);
}

function createProduct() {
    header('Content-Type: application/json');
    $data = json_decode(file_get_contents("php://input"), true);
    echo json_encode(["message" => "Product created", "data" => $data]);
}
?>