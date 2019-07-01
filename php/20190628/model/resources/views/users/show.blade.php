<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">ID</th>
                        <th scope="col">name</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <td class='align-middle text-center'>{{$user->id}}</td>
                        <td class='align-middle text-center'>{{$user->name}}</td>
                        <td class='align-middle text-center'>{{$user->email}}</td>
                    </tr>
                </tbody>
        </table>  
        <a href="{{url('/users')}}">←Back to index page</a>
        </div>
    </div>
</div>


</body>
</html>