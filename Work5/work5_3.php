<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>โปรแกรมที่ประกาศตัวแปรอายุ</h3>
    <h3>Name: ปฏิวัฒน์ กฤษฏิ์สุภารัตน์ ID: 65122250031</h3>
    <hr>

    <?php
    $age = 20;

    if ($age > 45) {
        echo "ผู้ใหญ่";
    } 
    else if ($age > 18) {
        echo "วัยรุ่น";
    }
    else if ($age > 0) {
        echo "เด็ก";
    }
    else {
        echo "ยังไม่เกิด";
    }
    ?>
</body>

</html>