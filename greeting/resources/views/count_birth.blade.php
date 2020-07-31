<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Type your date of birth: </h1><br />
    <form method="post" action="/count_birth">
        <input type="date" name="date" />
        <button type="submit">Count birth</button>
    </form>
    Your age is: {{$result}}

</body>

</html>