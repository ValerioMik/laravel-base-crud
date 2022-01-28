@extends('layouts.main-layout')
@section('content')

    <h3>{{$comic -> title}}</h3>
    <h4>{{$comic -> author}}</h4>
    <p>{{$comic -> release_date}} - {{$comic -> pages}}</p>

    
@endsection