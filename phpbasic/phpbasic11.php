้
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP</title>
</head>

<body>
    <h3>การตรวจสอบจำนวนครั้งการคลิกปุ่มด้วยลูป while</h3>
    <?php
    // จำนวนครั้งที่ผู้ใช้คลิกปุ่ม
    $clicks = 0;

    // เมื่อคลิกปุ่มมากกว่า 10 ครั้ง
    while ($clicks <= 10) {
        echo "คลิกปุ่มครั้งที่ $clicks<br>";
        $clicks++;
    }
    echo "คุณคลิกปุ่มครบ 10 ครั้งแล้ว!";
    ?>


</body>

</html>