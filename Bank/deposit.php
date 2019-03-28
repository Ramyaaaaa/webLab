<?php
include('session.php');
include('config.php');
if($_SERVER['REQUEST_METHOD'] == "POST")    {
    $amt = (int)$_POST['amt'];
        
    $sql = "select bal from login where uname = '$login_session'";
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    $curBal = (int)$row['bal'] + $amt;
    $sql = "UPDATE login set bal = '$curBal' where uname = '$login_session'";
    if($conn->query($sql) == TRUE)  {
        echo "Amount Sucessfully deposited <h1>THANK YOU </h1>";
        // header("location : welcome.php");
    }
}
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
    
    <form action = "" method = "post">
    <input type = "text" id = "amt" name = "amt" required> Enter the amount to be deposited
    <h3> Account details </h3>
    <input type = "text" id = "acc" required> Enter account number 
    <input type  = "password" id = "pin" required > Enter pin no 
    <input type = "submit" value = "Deposit amount">
    </form>
</body>
</html>
