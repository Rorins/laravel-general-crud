@extends('layouts.main')

@section('main-content')
 <div class="container">
<h1>Jokes Archive</h1>

@forelse ($jokes as $joke )
  <article>
      <h3>
          {{$joke->title}}
      </h3>
      <a href="{{root(jokes.show, $joke->$id)}}">Read more</a>
    </article> 
@empty
    <p>
        No joke found yet
    </p>
@endforelse
 </div>
@endsection