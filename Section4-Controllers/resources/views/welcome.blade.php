<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

Categories

<h2>Categories Store Method</h2>

<form action="/categories" method="post">
    @csrf
    <button type="submit">Submit</button>
</form>

<hr>
<h2>Categories Show Method</h2>
<a href="/categories/1">Show Method</a>

<hr>
<h2>Categories Edit Method</h2>
<a href="/categories/1/edit">Edit Method</a>

<hr>
<h2>Categories PUT OR PATCH Method</h2>
<form action="/categories/1" method="post">
    @csrf
    @method('put')
    <button type="submit">PUT or PATCH Methods</button>
</form>

<hr>
<h2>Categories Delete Method</h2>
<form action="/categories/1" method="post">
    @csrf
    @method('delete')
    <button type="submit">DELETE Method</button>
</form>



</body>
</html>
