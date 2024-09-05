้
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP</title>
</head>

<body>
    <h3>การแสดงรายการสินค้าด้วยลูป foreach</h3>
    <?php
    // อาร์เรย์สินค้าที่เก็บข้อมูลสินค้า
    $products = array("เสื้อ", "กางเกง", "รองเท้า", "หมวก");

    // แสดงรายการสินค้า
    foreach ($products as $product) {
        echo "สินค้า: $product<br>";
    }
    ?>

</body>

</html>