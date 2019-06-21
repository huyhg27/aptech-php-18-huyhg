<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ap_18_4";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email= $_POST['email'];
$pass= $_POST['password'];
$sql = "SELECT * FROM ap_18_4.users WHERE email = '$email' AND password ='$pass' ";
$check = mysqli_query($conn, $sql);
$sql2 = "SELECT id, name, email FROM ap_18_4.users";
$result = mysqli_query($conn, $sql2);
mysqli_close($conn);
?>
<?php if(mysqli_num_rows($check) > 0): ?>
    <h2>Wellcome</h2>
    <table class="table table-hover">
    <thead>
        <tr class="table-primary">
            <th scope="col">user ID</th>
            <th scope="col">Full name</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["email"] ?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>

<?php else: ?>
    <h2 class='text-danger'>Login failed.Wrong username or password</h2>
<?php endif ?>



</body>
</html>