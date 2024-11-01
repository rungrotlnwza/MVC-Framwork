<?php
// API/UserAPI.php

require_once '../config/config.php';

function getUser() {
    header('Content-Type: application/json');
    echo json_encode(["message" => "User data"]);
}

function createUser() {
    header('Content-Type: application/json');
    $data = json_decode(file_get_contents("php://input"), true);
    echo json_encode(["message" => "User created", "data" => $data]);
}
?>