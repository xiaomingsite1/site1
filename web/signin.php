<?php
$email = $_POST["email"];
$password = $_POST["password"];

$mysqli = new mysqli('127.0.0.1', 'root', '123456', 'site1');
if ($mysqli->connect_error) {
    die('Connect Error: ' . $mysqli->connect_error);
}
$result = $mysqli->query("select * from users where email='" . $email . "' and password='" . $password . "'");
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $userId = $row["userId"];
    header("Location: profile.php?userId=" . $userId);
} else {
    echo "账号密码错误！";
}
$mysqli->close();

?>