<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
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
                    <?php foreach($UsersKey as $key): ?>
                        <tr>
                            <td><?php echo $key->id ?></td>
                            <td><?php echo $key->name ?></td>
                            <td><?php echo $key->email ?></td>
                        </tr>
                    <?php endforeach ?>
        </tbody>
    </table>  

               
</body>
</html>