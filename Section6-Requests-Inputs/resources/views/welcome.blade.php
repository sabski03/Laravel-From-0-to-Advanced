<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
{{--<form action="/colors" method="post">--}}
{{--    @csrf--}}
{{--    <input type="text" name="colors[]" value="blue">--}}
{{--    <input type="text" name="colors[]" value="yellow">--}}
{{--    <input type="text" name="colors[]" value="black">--}}
{{--    <input type="text" name="colors[]" value="brown">--}}

{{--    <button type="submit">Submit</button>--}}
{{--</form>--}}

<hr>

{{--<form action="/date" method="post">--}}
{{--    @csrf--}}

{{--    <input type="date" name="appointment">--}}
{{--    <button type="submit">Submit</button>--}}

{{--</form>--}}

<div class="container">
    <div class="col-md-4">
        <form action="/custom" method="post">
            @csrf
            <div class="mb-3 mt-4">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input name="checkBox" type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>



</body>
</html>
