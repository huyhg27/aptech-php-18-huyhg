<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="col-6 offset-3">
            <p class="h1">Login</p>
            <form action="login-result.php" method="post" >
                <div class="form-row">
                   <div class="form-group col-12">
                        <label class="col-form-label">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Email">
                   </div>
                   <div class="form-group col-12">
                    <label class="col-form-label">Password</label>
                    <input class="form-control" type="password" name="password" placeholder="password">
                   </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>