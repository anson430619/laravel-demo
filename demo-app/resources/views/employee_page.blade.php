<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Table</title>
</head>
<body>
    <table>
        <thead>
            <th>Emp_Id</th>
            <th>Name</th>
            <th>Department</th>
            <th>Salary</th>
        </thead>
        <tbody>
            @foreach($employee_data as $e)
            <tr>
                <td>{{$e -> EmpId}}</td>
                <td>{{$e -> Name}}</td>
                <td>{{$e -> Department}}</td>
                <td>{{$e -> Salary}}</td>
            </tr>
            @endforeach
        </tbody>
</table>

</body>
</html>