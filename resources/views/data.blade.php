@extends('home')
@section('title')
- Comics Info
@endsection
@section('content')
    @foreach($comics as $key=>$comic)
     @if ($loop->first)
        <p> 
            {{ $comics[$key]['title'] }}
        </p>
    @endif
    @if ($loop->first)
        <p> 
            {{ $comics[$key]['price'] }}
        </p>
    @endif
    @if ($loop->first)
        <img src="{{ $comics[$key]['thumb'] }}" alt="">
    @endif
    @if ($loop->first)
        <p> 
            {{ $comics[$key]['description'] }}
        </p>
    @endif
    
    @endforeach

    <img src="/imgs/adv.jpg" alt="adv">
@endsection
    
