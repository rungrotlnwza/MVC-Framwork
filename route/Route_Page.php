<?php
// route/Route_Page.php

// ตัวอย่าง route สำหรับหน้าเว็บ
$route = $_GET['route'] ?? '';

if ($route == '') {
    include 'controllers/HomeController.php';
} elseif ($route == 'about') {
    include 'controllers/AboutController.php';
} else {
    echo "404 - Page not found";
}
?>