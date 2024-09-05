<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic</title>
</head>

<body>
    <h3>ฟอร์มลงทะเบียนผู้ใช้</h3>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // รับข้อมูลจากฟอร์ม
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // ตรวจสอบว่าข้อมูลที่จำเป็นถูกกรอกครบถ้วน
        if (!empty($username) && !empty($email) && !empty($password)) {
            // เข้ารหัสรหัสผ่านก่อนจัดเก็บ
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // จำลองการบันทึกข้อมูลลงฐานข้อมูล (ในที่นี้คือการแสดงผล)
            echo "ลงทะเบียนสำเร็จ!<br>";
            echo "ชื่อผู้ใช้: $username<br>";
            echo "อีเมล: $email<br>";
            echo "รหัสผ่าน (เข้ารหัสแล้ว): $hashed_password<br>";
        } else {
            echo "กรุณากรอกข้อมูลให้ครบถ้วน!";
        }
    }
    ?>


</body>

</html>