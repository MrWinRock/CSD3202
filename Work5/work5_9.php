<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>ฟังก์ชันตรวจสอบเลขคู่หรือเลขคี่ </h3>
    <h3>Name: ปฏิวัฒน์ กฤษฏิ์สุภารัตน์ ID: 65122250031</h3>
    <hr>

    <?php
    function evenodd($n) {
        if ($n %2== 0) {
            return "even";
        }
        else {
            return "odd";
        }
    }
    $result = evenodd(12345);
    echo "$result";
    ?>
</body>

</html>