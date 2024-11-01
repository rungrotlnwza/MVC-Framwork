<?php
// Route_Page.php

// กำหนด path สำหรับ views
$page = isset($_GET['page']) ? $_GET['page'] : 'index'; // ค่าเริ่มต้นเป็น 'index'
$viewPath = 'view/' . $page . '.html'; // สร้าง path สำหรับไฟล์ที่ต้องการโหลด

// ตรวจสอบว่ามีไฟล์อยู่จริงหรือไม่
if (file_exists($viewPath)) {
    include $viewPath; // ถ้ามีให้โหลดไฟล์ที่ตรงกัน
} else {
    include 'view/404.html'; // ถ้าไม่มีให้โหลดหน้า 404
}
?>
