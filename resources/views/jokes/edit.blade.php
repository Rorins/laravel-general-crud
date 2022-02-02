@extends('layouts.main')

@section('main-content')
 <div class="container">
<div class="row">
    <h1>Edit Joke{{$joke->title}}</h1>

<div class="col-12">
<form action="{{route('Jokes.store')}}" method="POST">
    @csrf

    <div>
        <label for="author" class="form-label">Author</label>
        <input class="form-control" type="text" id="author" name="author">

        <label for="title" class="form-label">Title</label>
        <textarea class="form-control" id="title" name="title"></textarea>

        <label for="body" class="form-label">Body</label>
        <textarea class="form-control" id="body" name="body" rows="6"></textarea>

        <button type="submit" class="btn btn-primary">Create New Joke</button>

    </div>

</form>
</div>

</div>
 </div>
@endsection