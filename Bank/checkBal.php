<?php
include("session.php");
include("config.php");
echo "$login_session";
$sql = "select bal from login where uname = '$login_session'";
$res = $conn->query($sql);
$row = $res->fetch_assoc();
echo "Balance is ". $row['bal'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <a href = "welcome.php">Go back </a>
</body>
</html>