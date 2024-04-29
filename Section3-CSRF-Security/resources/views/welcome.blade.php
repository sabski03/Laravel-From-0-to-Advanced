<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>CSRF</title>
</head>
<body>

<form id="example-form" action="/posts" method="POST">
{{--    @csrf--}}
{{--    {{csrf_field()}}--}}
{{--    <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <input type="submit" value="Submit">
</form>

<script>
    $(document).ready(function(){
        $('#example-form').submit(function(e){
            e.preventDefault()
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })

            $.ajax({
                // headers:{
                //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                // }
                type: 'POST',
                url: '/posts',
                data: {},
                success: function (data){
                    console.log(data)
                }
            })

            // $.post('/posts', function (data){
            //     console.log(data)
            // })

        })
    })
</script>

</body>
</html>
