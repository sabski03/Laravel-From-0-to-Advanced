<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSRF</title>
</head>
<body>

<form action="/posts" method="POST">
{{--    @csrf--}}
{{--    {{csrf_field()}}--}}
{{--    <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <input type="submit" value="Submit">
</form>

</body>
</html>
