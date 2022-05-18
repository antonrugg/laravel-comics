@extends('home')
@section('title')
- Comics
@endsection
@section('content')
    @foreach($comics as $comic)
        <article>
            <a href="/comics/data"><img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}"></a>
            <a href="#nowhere"><p>{{ $comic['series'] }}</p></a>
        </article> 
    @endforeach
@endsection
