@props(['type' => 'info','message'])

<div class="alert alert-{{$type}}" role="alert">
    <div class="text-center">
        {{$message}}
    </div>
</div>
