้
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP</title>
</head>

<body>
    <h3>การคำนวณหารตัวเลขโดยตรวจสอบข้อผิดพลาดการหารด้วยศูนย์</h3>
    <?php
    function divide($numerator, $denominator)
    {
        try {
            // ตรวจสอบว่ามีการหารด้วยศูนย์หรือไม่
            if ($denominator == 0) {
                throw new Exception("ไม่สามารถหารด้วยศูนย์ได้");
            }
            $result = $numerator / $denominator;
            echo "ผลลัพธ์: $result";
        } catch (Exception $e) {
            // จับข้อผิดพลาดการหารด้วยศูนย์
            echo "เกิดข้อผิดพลาด: " . $e->getMessage();
        }
    }

    // เรียกใช้ฟังก์ชัน divide
    divide(10, 10);
    ?>
</body>

</html>