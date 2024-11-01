<?php
// route/Route_API.php

// ตัวอย่าง route สำหรับ API
$route = $_GET['route'] ?? '';

if ($route == 'api/user') {
    include '../API/UserAPI.php';
} elseif ($route == 'api/product') {
    include '../API/ProductAPI.php';
} else {
    echo json_encode(["error" => "API route not found"]);
}
?>