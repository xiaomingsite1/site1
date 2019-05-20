<?php
$email = $_POST["email"];
$password = $_POST["password"];

$mysqli = new mysqli('127.0.0.1', 'root', '123456', 'site1');
if ($mysqli->connect_error) {
    die('Connect Error: ' . $mysqli->connect_error);
}
$sql = "insert into users(email, password) values ('" . $email . "', '" . $password . "');";
echo $sql;
$result = $mysqli->query($sql);
$userId = $mysqli->insert_id;
$mysqli->close();

?>
<html>
    <head>小明的网站</head>
    <meta charset="UTF-8">
    <body>
        <h1>注册成功</h1>
        <div><a href="profile.php?userId=<?php echo $userId; ?>">查看注册信息</a></div>
    </body>
</html>
