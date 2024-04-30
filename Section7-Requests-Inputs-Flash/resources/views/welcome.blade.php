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

<form method="post" action="/flash">
    @csrf
    <input type="email" name="email" placeholder="Enter Email" value="{{old('email')}}">
    <input type="text" name="username" placeholder="Enter Username" value="{{old('username')}}">
    <button type="submit">Submit</button>

</form>

{{old('email')}}
<br>
{{old('username')}}

</body>
</html>
