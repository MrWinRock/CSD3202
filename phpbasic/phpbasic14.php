้
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP</title>
</head>

<body>
    <h3>ฟังก์ชันคำนวณพื้นที่สี่เหลี่ยมผืนผ้า</h3>
    <?php
    // สร้างฟังก์ชันคำนวณพื้นที่สี่เหลี่ยมผืนผ้า
    function calculateArea($width, $height)
    {
        return $width * $height;
    }

    // เรียกใช้ฟังก์ชัน
    $width = 5;
    $height = 10;
    $area = calculateArea($width, $height);

    echo "พื้นที่สี่เหลี่ยมผืนผ้า: $area ตารางหน่วย";
    ?>

</body>

</html>