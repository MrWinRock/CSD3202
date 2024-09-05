<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>โปรแกรมที่ใช้ลูป for</h3>
    <h3>Name: ปฏิวัฒน์ กฤษฏิ์สุภารัตน์ ID: 65122250031</h3>
    <hr>

    <?php
    try {
        $sum = 0;
        for ($i = 1; $i <= 100; $i++) {
            $sum += $i;
        }

        echo "<p>ผลรวม: $sum</p>";
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    ?>
</body>

</html>