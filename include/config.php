<?php header("content-type:text/html; charset=utf-8"); ?>
<?php

$serverName = "localhost";
$database = "mydb";
$userName = "root";
$password = "123";

$conn = new mysqli($serverName, $userName, $password, $database);

if ($conn->connect_error) {

    die("connection failed: " . $conn->connect_error);

} else {

    echo "connection successfully" . "<br/>";
}

$dbSelected = mysqli_select_db($conn, "mydb");

if (!$dbSelected){

        die ("Can\'t use mydb : " . mysql_error());
    }else {
        echo "database mydb is successfuly selected!";
    }


?>
