@extends('layouts.master')

@section('sidebar')
    this is a welcome sidebar
@endsection

@section('content')
    <h1>Welcome</h1>


    <x-button-component :type="$type">

    </x-button-component>


@endsection






