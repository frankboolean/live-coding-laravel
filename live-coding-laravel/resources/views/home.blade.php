@extends('mainLayout')

@section('content')

  @foreach ($cards as  $value)
    <h1>{{$value['titolo']}}</h1>
    <img src="{{$value['src']}}" alt="">
    <p>{{$value['descrizione']}}</p>


  @endforeach

@endsection
