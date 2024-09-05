้
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP</title>
</head>

<body>
    <h3>การตรวจสอบการเข้าสู่ระบบ (ใช้ if และ else)</h3>
    <?php
    // ข้อมูลการเข้าสู่ระบบ
    $username = "admin";
    $password = "password123";

    // ข้อมูลที่ผู้ใช้ป้อนเข้ามา
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // ตรวจสอบข้อมูลการเข้าสู่ระบบ
    if ($input_username == $username && $input_password == $password) {
        echo "Login successful. Welcome, $username!";
    } else {
        echo "Login failed. Please check your username and password.";
    }
    ?>
</body>

</html>
