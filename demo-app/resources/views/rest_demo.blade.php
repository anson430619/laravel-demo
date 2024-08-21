<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{url('/')}}/rest-api-post-data" method="post">
    @csrf
        <div class="container">
            <div class ="form-group">
                <label for="">Name :</label>
                <input name="name" type="text" class="form-control">
            </div>

            <div class ="form-group">
                <label for="">Email :</label>
                <input name="email" type="email" class="form-control">
            </div>

            <div class ="form-group">
                <label for="">Password :</label>
                <input name="password" type="password" class="form-control">
            </div>
            <button class="btn btn-primary">Submit</button>
</div>
</form>

</body>
</html>
