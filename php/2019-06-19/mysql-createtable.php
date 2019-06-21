<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ap_18_4";
$conn = mysqli_connect($servername, $username, $password, $dbname);
echo("??");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// sql to create table
$sql = "CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name varchar(50),
    email varchar(100),
    password varchar(50),
    UNIQUE(email)
) ";

if(mysqli_query($conn, $sql)){
    echo "<h1>Table users created successfully</h1>";
}else{
    echo "<h1>Error</h1>".mysqli_error($conn);
}
mysqli_close($conn);
?>