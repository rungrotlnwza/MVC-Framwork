<?php
// controllers/HomeController.php

require_once 'config/config.php';

function show_home() {
    $conn = db_connect();
    
    // ตัวอย่าง query แบบ mysqli
    $sql = "SELECT * FROM posts";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Title: " . $row['title'] . "<br>";
        }
    } else {
        echo "No posts found";
    }

    // ปิดการเชื่อมต่อฐานข้อมูล
    mysqli_close($conn);
}

// เรียกใช้ฟังก์ชันเพื่อแสดงหน้าแรก
show_home();
?>