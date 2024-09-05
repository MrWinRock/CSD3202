<?php
try {
    // พยายามเชื่อมต่อฐานข้อมูล
    $conn = new PDO("mysql:host=localhost;dbname=testdb", "root", "");
    // ตั้งค่า PDO ให้แสดงข้อผิดพลาดเป็น Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "เชื่อมต่อฐานข้อมูลสำเร็จ!";
} catch (PDOException $e) {
    // จับข้อผิดพลาดการเชื่อมต่อฐานข้อมูล
    echo "การเชื่อมต่อล้มเหลว: " . $e->getMessage();
}
