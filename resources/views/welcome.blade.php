@extends('layout')

@section('content')

<h1>Home</h1>
<h1>Variable:  '{{$foo}}' from web.php</h1>

<ul>
    @foreach($tasks as $task)

        <li>{{ $task }}</li>

    @endforeach
</ul>

@endsection

@section('title')