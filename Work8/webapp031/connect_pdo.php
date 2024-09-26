<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $host = "localhost";
    $username = "s0031";
    $password = "NongWinPassword!";
    $dbname = "myDB";
    $charset = "utf8mb4";

    $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
    $option = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ];

    try {
        $conn = new PDO($dsn, $username, $password, $option);
    } catch (PDOException $e) {
        throw new Exception($e->getMessage(), (int) $e->getCode(), $e);
    }
    ?>
</body>

</html>