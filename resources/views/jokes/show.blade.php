@extends('layouts.main')

@section('content')
<div class="container">

    <h1>{{$joke->title}}</h1>
    <h2>{{$joke->author}}</h2>

    <p>{{$joke->body}}</p>

    <a href="{{route('Jokes.index')}}"></a>
</div>
@endsection