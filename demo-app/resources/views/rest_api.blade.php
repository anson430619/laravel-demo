<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    {{-- for get method use the below code --}}
    {{-- <form action="">
        <label for="">Name :</label>
        <input name="name" type="text">
        <br><br>
        <label for="">Email :</label>
        <input name="email" type="email">
        <br><br>
        <label for="">Password :</label>
        <input name="password" type="password">
        <br><br>
        <button>Submit</button>

    </form> --}}

    {{-- for post method use the below code --}}
    {{-- <form action="/rest-api-request" method="POST">
        @csrf
        <label for="">Name :</label>
        <input name="name" type="text">
        <br><br>
        <label for="">Email :</label>
        <input name="email" type="email">
        <br><br>
        <label for="">Password :</label>
        <input name="password" type="password">
        <br><br>
        <button>Submit</button>

    </form> --}}

    {{-- for post of single request show --}}
    {{-- <form action="/rest-api-onereq" method="POST">
        @csrf
        <label for="">Name :</label>
        <input name="name" type="text">
        <br><br>
        <label for="">Email :</label>
        <input name="email" type="email">
        <br><br>
        <label for="">Password :</label>
        <input name="password" type="password">
        <br><br>
        <button>Submit</button>

    </form> --}}

    {{-- for validating --}}
    @if ($errors -> any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/rest-api-validate" method="POST">
        @csrf
        <label for="">Name :</label>
        <input name="name" type="text">
        <br><br>
        <label for="">Email :</label>
        <input name="email" type="email">
        <br><br>
        <label for="">Password :</label>
        <input name="password" type="password">
        <br><br>
        <button>Submit</button>

    </form>
</body>
</html>
