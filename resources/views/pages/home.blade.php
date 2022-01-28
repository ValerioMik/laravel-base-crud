@extends('layouts.main-layout')
@section('content')

<h1>List:</h1>

<ul>

@foreach ($comics as $comic)

    <li>

        <a href="{{route('show', $comic -> id) }}">
            Titolo: {{$comic -> title}} -  Autore: {{$comic -> author}}

        </a>

    </li>
    
@endforeach

</ul>
    
@endsection