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
        <div class="col-4 offset-4">
            <h2>User info</h2>
        </div>
        <div class="col-6 offset-3">
            <form action="{{url('/users/update/'.$user->id)}}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group row">
                        <label class="col-2" for="">Name</label>
                        <input class="form-control col-10" type="text" name="name" value="{{$user->name}}">
                </div>
                <div class="form-group row">
                        <label class="col-2" for="">Email</label>
                        <input class="form-control col-10" type="email" name="email" value="{{$user->email}}">
                </div>
                <input type="submit" value="Save">
                @if(session('message'))
                     <span class="badge badge-success text-center ml-5">
                    {{ session('message') }}
                    </span>
                @endif
            </form>
           
            <a href="{{url('/users')}}">Back to index page</a>
        </div>
    </div>
</div>


</body>
</html>