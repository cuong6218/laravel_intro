<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dictionary</title>
</head>

<body>
    <h1>Dictionary</h1>
    <form method="post" action="/dictionary">
        @csrf
        <input type="text" name="keyword" placeholder="write your word" />
        <button type="submit">Translate</button>
    </form>
    <br />
    Result:
    <span>{{$result ?? ''}}</span>
</body>

</html>