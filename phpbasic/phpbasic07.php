้
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP</title>
</head>

<body>
    <h3>ระบบตรวจสอบเกรดนักเรียน (ใช้ if และ else)</h3>
    <?php
    // คะแนนของนักเรียน
    $score = 75;

    // ตรวจสอบเกรดตามคะแนน
    if ($score >= 90) {
        echo "Grade A";
    } elseif ($score >= 80) {
        echo "Grade B";
    } elseif ($score >= 70) {
        echo "Grade C";
    } elseif ($score >= 60) {
        echo "Grade D";
    } else {
        echo "Grade F";
    }
    ?>

</body>

</html>