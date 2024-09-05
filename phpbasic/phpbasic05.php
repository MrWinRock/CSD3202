้
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP</title>
</head>

<body>
    <h3>การแสดงข้อมูลสินค้าในรูปแบบ HTML Table (ใช้ echo และ print_r) </h3>
    <?php
    // ข้อมูลสินค้า
    $products = array(
        array("name" => "Laptop", "price" => 1500, "quantity" => 2),
        array("name" => "Mouse", "price" => 50, "quantity" => 10),
        array("name" => "Keyboard", "price" => 100, "quantity" => 5)
    );

    // แสดงข้อมูลสินค้าในรูปแบบตาราง
    echo "<table border='1'>";
    echo "<tr><th>Product Name</th><th>Price</th><th>Quantity</th></tr>";

    foreach ($products as $product) {
        echo "<tr>";
        echo "<td>", $product['name'], "</td>";
        echo "<td>", $product['price'], "</td>";
        echo "<td>", $product['quantity'], "</td>";
        echo "</tr>";
    }

    echo "</table>";

    // แสดงข้อมูลทั้งหมดด้วย print_r (สำหรับการดีบัก)
    echo "<pre>";
    print_r($products);
    echo "</pre>";
    ?>
</body>

</html>