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
        <div class="col-6 offset-3">
            <form action="form_result.php" method="post" >
                <div class="form-row">
                   <div class="form-group col-6">
                        <label class="col-form-label">Name/名前</label>
                        <input class="form-control" type="text" name="name" placeholder="Name">
                   </div>
                   <div class="form-group col-6">
                    <label class="col-form-label">Email/メールアドレス</label>
                    <input class="form-control" type="text" name="email" placeholder="Email">
                   </div>
                   <div class="form-group col-12">
                   <label class="col-form-label">Gender／性別</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="gender" value="male" >
                            <label class="form-check-label" >Male/男性</label>
                        </div>

                        <div class="form-check ">
                            <input class="form-check-input" type="checkbox"  name="gender" value="female">
                            <label class="form-check-label">female/女性</label>
                        </div>
                    </div> 
                    

                <div class="form-group col-12">
                    <label>Comment/コメント</label>
                    <textarea name="comment" rows=5 class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Send/送信</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>