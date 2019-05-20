<?php
$userId = $_GET["userId"];

$mysqli = new mysqli('127.0.0.1', 'root', '123456', 'site1');
if ($mysqli->connect_error) {
    die('Connect Error: ' . $mysqli->connect_error);
}

$result = $mysqli->query("select * from users where userId=" . $userId);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $email = $row["email"];
} else {
    $email = "";
}
mysqli_close($mysqli);
?>
<html>
    <head>小明的网站</head>
    <meta charset="UTF-8">
    <body>
        <h1>个人信息</h1>
        <div>注册邮箱</div>
        <div><?php echo $email; ?></div>
    </body>
</html>
