@extends('home')
@section('title')
- Comics Info
@endsection
@section('content')
    
     
        <p> 
            {{ $comics['title'] }}
        </p>
   
        <p> 
            {{ $comics['price'] }}
        </p>
   
        <img src="{{ $comics['thumb'] }}" alt="">
   
   
        <p> 
            {{ $comics['description'] }}
        </p>
    
    
    

    <img src="/imgs/adv.jpg" alt="adv">
@endsection
    
