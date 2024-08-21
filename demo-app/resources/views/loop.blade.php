<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    @foreach ($students as $index=>$Person)
    <h2>{{$index}} : {{$Person->sid}}</h2>
    <h2>{{$index}} : {{$Person->name}}</h2>
    <h2>{{$index}} : {{$Person->grade}}</h2>
    <h2>{{$index}} : {{$Person->course}}</h2>
    @endforeach
</body>
</html>