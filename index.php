<?php
// index.php

include 'config/config.php';

// ตรวจสอบ route และโหลด routing ที่เหมาะสม
if (isset($_GET['route']) && strpos($_GET['route'], 'api/') === 0) {
    include 'route/Route_API.php';
} else {
    include 'route/Route_Page.php';
}
?>