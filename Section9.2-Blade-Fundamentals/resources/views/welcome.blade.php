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

{{--{{ $username }}--}}
{{--{!! $username !!}--}}

@if($counts===20)
    <h2>it is equal</h2>
@else
<h2>it is not</h2>
@endif

@unless($counts===1)
<h2>it is false</h2>
@endunless

@isset($counts)
    <h2>it is set</h2>
@endisset

@empty($counts)
    <h2>it is empty</h2>
@endempty


@switch($counts)
    @case(20)
        <h1>it is 20</h1>
        @break
    @case(10)
        <h1>it is 10</h1>
        @break
    @default
        <h1>we dont know</h1>
@endswitch


@for($counts = 0; $counts<10; $counts++)
    <p>current loop is {{$counts}}</p>
@endfor

@while($counts < 20)
    <p>this is the count {{$counts++}}</p>

@endwhile

{{--@foreach($users as $user)--}}
{{--    {{$user[0]}}--}}
{{--@endforeach--}}

@include('list')

@includeIf('nav')

@php
$booleanValue = false;
@endphp

@includeWhen($booleanValue, 'list')

@includeUnless($booleanValue, 'list')

@includeFirst(['nav', 'list'])





</body>
</html>
