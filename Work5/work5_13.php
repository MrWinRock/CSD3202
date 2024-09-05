<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>โปรแกรมที่ตรวจสอบว่าผู้ใช้ป้อนข้อมูลในฟอร์มครบถ้วนหรือไม่ </h3>
    <h3>Name: ปฏิวัฒน์ กฤษฏิ์สุภารัตน์ ID: 65122250031</h3>
    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $id = $_POST['id'];

        if (empty($name) || empty($surname) || empty($id)) {
            echo "<p>กรุณากรอกข้อมูลให้ครบถ้วน</p>";
        } else {
            echo "<p>ชื่อ: $name</p>";
            echo "<p>นามสกุล: $surname</p>";
            echo "<p>รหัสนักศึกษา: $id</p>";
        }
    }
    ?>
    <div>
        <a href="work5_13.html">กลับไป</a>
    </div>
</body>

</html>