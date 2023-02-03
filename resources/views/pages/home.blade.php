@extends('layouts.main-layout')

@section('content')
    <h1>Santi</h1>

    <a href="/saint/create/">
        <h1 class="text">Click me and try to create your Saint</h1>
    </a>

    <ul>
        @foreach ($saints as $saint)
            <li>
                <span>Nome: <h3> {{$saint -> nome }}</h3></span>
                <span>Luogo Di Nascita: <h3> {{$saint -> luogo_di_nascita}}</h3></span>
                <span>Data di Benedizione: <h3> {{$saint -> data_benedizione}}</h3></span>
                <span>Numero di Miracoli: <h3> {{$saint -> numero_miracoli}}</h3></span>
            </li>
        @endforeach
    </ul>
@endsection