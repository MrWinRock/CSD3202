้
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP</title>
</head>

<body>
    <h3>การประกาศตัวแปรชนิดบูลีน (Boolean) และอาร์เรย์ (Array) </h3>
    <?php
    $is_student = true; // ตัวแปรชนิดบูลีน
    $subjects = array("Math", "Science", "History"); // ตัวแปรชนิดอาร์เรย์
    if ($is_student) {
        echo "Student subjects: " . implode(", ", $subjects);
    }
    ?>

</body>

</html>