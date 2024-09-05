้
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP</title>
</head>

<body>
    <h3>ฟังก์ชันแปลงอุณหภูมิจากเซลเซียสเป็นฟาเรนไฮต์</h3>
    <?php
    // สร้างฟังก์ชันแปลงอุณหภูมิจากเซลเซียสเป็นฟาเรนไฮต์
    function celsiusToFahrenheit($celsius)
    {
        $fahrenheit = ($celsius * 9 / 5) + 32;
        return $fahrenheit;
    }

    // เรียกใช้ฟังก์ชัน
    $celsius = 30;
    $fahrenheit = celsiusToFahrenheit($celsius);

    echo "อุณหภูมิ $celsius องศาเซลเซียส เท่ากับ $fahrenheit องศาฟาเรนไฮต์";
    ?>

</body>

</html>
