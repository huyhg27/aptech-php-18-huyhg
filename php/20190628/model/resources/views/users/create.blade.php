<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row mt-5">
        <div class="col-4 offset-4">
            <h2>User Create</h2>
        </div>
    </div>
    <form action="{{url('/users/store')}}" method="post">
        @csrf
        <div class="form-group row mt-3">
            <label class="col-1 offset-3">Name</label>
            <div class="col-6">
                <input type="text" name="name" class="form-control" placeholder="FullName">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-1 offset-3">Email</label>
            <div class="col-6">
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-1 offset-3">Password</label>
            <div class="col-6">
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-2 offset-5">
            <button type="submit" class="btn btn-primary w-100">Create</button>
            </div>
        </div>
    </form>
    
</div>


</body>
</html>