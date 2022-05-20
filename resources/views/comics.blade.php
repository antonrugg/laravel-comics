@extends('home')
@section('title')
- Comics
@endsection
@section('content')
    @foreach($comics as $index=>$comic)
        <article>
            <a href="/comics/data/{{ $index }}"><img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}"></a>
            <a href="#nowhere"><p>{{ $comic['series'] }} {{ $index }}</p></a>
        </article> 
    @endforeach
@endsection
