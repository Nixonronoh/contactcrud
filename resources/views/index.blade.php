<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All Contacts Here</h1>
    <table border="1">
        <tr>
            <th>FirstName</th>
            <th>LastName</th>
            <th>PhoneNumber</th>
        </tr>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{$contact->FirstName}}</td>
                <td>{{$contact->LastName}}</td>
                <td>{{$contact->PhoneNumber}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>