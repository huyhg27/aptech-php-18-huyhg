<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ap_18_4";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];



$sql = "INSERT INTO ap_18_4.users (name, email, password)
VALUES ('$name', '$email', '$pass')";

if (mysqli_query($conn, $sql)) {
    echo "<h1>New record created successfully</h1>"."<br>";
    echo "<h2>Name: </h2>".$_POST['name']."<br>";
    echo "<h2>Email: </h2>".$_POST['email'];

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>