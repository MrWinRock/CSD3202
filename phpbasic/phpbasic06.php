้
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP</title>
</head>

<body>
    <h3>การดีบักข้อมูลผู้ใช้ (ใช้ print และ var_dump)</h3>
    <?php
    // ข้อมูลผู้ใช้
    $user = array(
        "username" => "john_doe",
        "email" => "john@example.com",
        "age" => 28,
        "is_admin" => false
    );

    // แสดงข้อมูลผู้ใช้ด้วย print
    print "User Information:<br>";
    print "Username: " . $user['username'] . "<br>";
    print "Email: " . $user['email'] . "<br>";

    // ดีบักข้อมูลทั้งหมดของผู้ใช้ด้วย var_dump
    echo "<pre>";
    var_dump($user);
    echo "</pre>";
    ?>
</body>

</html>