<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>New Contact Are Created Here</h1>
    <form action="/" method="post">
        @csrf
        <div>
            <label for="FirstName"></label>
        <input type="text" name="FirstName" placeholder="FirstName">
        </div>

        <div>
            <label for="LastName"></label>
        <input type="text" name="LastName" placeholder="LastName">
        </div>

        <div>
            <label for="PhoneNumber"></label>
        <input type="text" name="PhoneNumber" placeholder="PhoneNumber">
        </div>
        <div>
            <input type="submit" value="Save">
        </div>
    </form>
</body>
</html>