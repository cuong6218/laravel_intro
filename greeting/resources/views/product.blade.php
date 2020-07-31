<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="/product">
        @csrf
        Product Description: <textarea name="desc" placeholder="product description"></textarea>
        <br />
        List Price: <input type="number" name="price" placeholder="price" />
        <br />
        Discount Percent: <input type="number" name="discount" placeholder="discount" />
        <br />
        <button type="submit">Calculator</button>
    </form>
    Discount Amount: <p>{{$result ?? ''}}</p>
    Discount Price: <p>{{$price ?? ''}}</p>
</body>

</html>