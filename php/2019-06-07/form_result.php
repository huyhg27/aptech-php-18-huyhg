<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="col-6 offset-3 bg-secondary">
            <h3><?php echo $_POST['name']; ?></h3>
            <h3><?php echo $_POST['email']; ?></h3>
            <p><?php echo $_POST['comment'] ?></p>
        </div>
    </div>
</body>
</html>