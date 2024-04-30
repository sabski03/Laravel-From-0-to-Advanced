@foreach($datas as $data)
    @if($loop->first)
        <p>Hey I am first {{$data}}</p>
    @endif
    @if($loop->last)
        <p>Hey I am Last {{$data}}</p>
    @endif
    @if($loop->even)
        <p>Hey I am Even {{$data}}</p>
    @endif
    @if($loop->odd)
        <p>Hey I am Odd {{$data}}</p>
    @endif
@endforeach
