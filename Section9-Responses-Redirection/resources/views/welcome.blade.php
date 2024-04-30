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


@if(session('users'))
    <div>
        <h1>Welcome MR. {{session('users')}}</h1>
    </div>
@endif

<h1>Welcome View</h1>


@vite('resources/js/app.js')
<script>
    document.addEventListener('DOMContentLoaded', function (){
        axios.get('/json').then(function(data){
            console.log(data.data.name)
        })
    })
</script>

</body>
</html>
