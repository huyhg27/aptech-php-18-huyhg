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
    <div class="row h-25 my-3 d-flex justify-content-center align-items-center flex-column">
        <div class="col-4">
            <h2 class="cover-heading">C-R-U-D D-E-M-O</h2>
        </div>
        <div class="col-3">
        <a href="{{url('/create')}}" class="btn btn-primary btn-lg">Create user</a>
        </div>
    </div>
    <div class="row">
        <div class="col-10 offset-1">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">ID</th>
                        <th scope="col">name</th>
                        <th scope="col">Email</th>
                        <th colspan="3" scope="col">C-R-UD</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($users as $user)
                            <tr >
                                <td class='align-middle text-center'>{{$user->id}}</td>
                                <td class='align-middle text-center'>{{$user->name}}</td>
                                <td class='align-middle text-center'>{{$user->email}}</td>
                                <td class='align-middle text-center'>
                                    <form action="{{asset('/users/'.$user->id)}}" method="GET">
                                        <button type="submit" class="btn btn-outline-primary">View</button>
                                    </form>
                                </td>
                                <td class='align-middle text-center'>
                                <form action="{{url('/users/edit/'.$user->id)}}" method="GET">
                                        <button type="submit" class="btn btn-outline-warning">Edit</button>
                                    </form>
                                </td>
                                <td class='align-middle text-center'>
                                    <form action="{{url('/users/'.$user->id)}}" method="post" >
                                         
                                            @csrf
                                        <input type="submit" value="DELETE "class="btn btn-outline-danger">
                                    </form>
                                </td>
                            </tr>
                       @endforeach
                </tbody>
        </table>  
        </div>
    </div>
</div>


</body>
</html>