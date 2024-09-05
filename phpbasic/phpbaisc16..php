้
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP</title>
</head>

<body>
    <h3>ฟังก์ชันคำนวณดัชนีมวลกาย (BMI)</h3>
    <?php
    // สร้างฟังก์ชันคำนวณดัชนีมวลกาย (BMI)
    function calculateBMI($weight, $height)
    {
        $bmi = $weight / ($height * $height);
        return $bmi;
    }

    // เรียกใช้ฟังก์ชัน
    $weight = 68; // กิโลกรัม
    $height = 1.75; // เมตร
    $bmi = calculateBMI($weight, $height);

    echo "ดัชนีมวลกาย (BMI): $bmi";
    ?>

</body>

</html>