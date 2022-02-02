@extends('layouts.main')

@section('main-content')
 <div class="container">
<h1>Jokes Archive</h1>

@forelse ($jokes as $joke )
  <article>
      <h3>
          {{$joke->title}}
      </h3>
      <a href="{{route('Jokes.show', $joke->id)}}">Read more</a>
      <a href="{{route('Jokes.edit', $joke->id)}}">Edit</a>

      <form action="{{route('Jokes.destroy', $joke->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn">DELETE</button>
    
    </form>
    </article> 
    
@empty
    <p>
        No joke found yet
    </p>
@endforelse

 </div>
@endsection