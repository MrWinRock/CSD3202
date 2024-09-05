้
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP</title>
</head>

<body>
    <h3>ฟังก์ชันตรวจสอบเลขคู่หรือเลขคี่</h3>
    <?php
    // สร้างฟังก์ชันตรวจสอบเลขคู่หรือเลขคี่
    function checkEvenOdd($number)
    {
        if ($number % 2 == 0) {
            return "เลขคู่";
        } else {
            return "เลขคี่";
        }
    }

    // เรียกใช้ฟังก์ชัน
    $number = 7;
    $result = checkEvenOdd($number);

    echo "เลข $number เป็น $result";
    ?>

</body>

</html>