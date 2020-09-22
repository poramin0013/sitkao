<html>

<head>
    <title>book</title>
</head>

<body>

    <?php

    $serverName = "localhost";
    $userName = "root";
    $userPassword = "";
    $dbName = "ts";

    $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $userPassword);

    ?>
</body>

</html>