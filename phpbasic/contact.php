<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มติดต่อสอบถาม</title>
</head>

<body>
    <h2>ฟอร์มติดต่อสอบถาม</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // รับข้อมูลจากฟอร์ม
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // ตรวจสอบว่าข้อมูลที่จำเป็นถูกกรอกครบถ้วน
        if (!empty($name) && !empty($email) && !empty($message)) {
            // จำลองการส่งอีเมล (ในที่นี้คือการแสดงผล)
            echo "ส่งข้อความสำเร็จ!<br>";
            echo "ชื่อ: $name<br>";
            echo "อีเมล: $email<br>";
            echo "ข้อความ: $message<br>";
        } else {
            echo "กรุณากรอกข้อมูลให้ครบถ้วน!";
        }
    }
    ?>

</body>

</html>