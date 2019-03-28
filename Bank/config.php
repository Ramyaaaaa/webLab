<?php
$conn = new mysqli("localhost","root","","sample");
if($conn->connect_error)    {
    die("Connection Failed : " . $conn->connect_error);
}
?>