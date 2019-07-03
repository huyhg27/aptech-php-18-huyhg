<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 text-center">
                <h2>@yield('header')</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            @yield('sub')
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>