้
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP</title>
</head>

<body>
    <h3>การคำนวณราคารวมสินค้าด้วยลูป foreach</h3>
    <?php
// อาร์เรย์สินค้าที่เก็บข้อมูลชื่อและราคาสินค้า
$items = array(
    "เสื้อ" => 300,
    "กางเกง" => 500,
    "รองเท้า" => 800,
    "หมวก" => 200
);

$total = 0; // เก็บราคารวมสินค้า

// วนลูปเพื่อคำนวณราคารวมสินค้า
foreach ($items as $item => $price) {
    echo "สินค้า: $item, ราคา: $price บาท<br>";
    $total += $price;
}

echo "ราคารวมทั้งหมด: $total บาท";
?>


</body>

</html>