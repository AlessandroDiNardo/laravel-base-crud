@extends('layouts.main-layout')

@section('content')
<div>
    <h1 class="text">Create your Saint</h1>
    <form method="POST" action="{{route('saint.store')}}">
        @csrf
        <label for="nome">Nome</label>
        <input class="name" type="text" name="nome">
        <br>
        <label for="luogoDiNascita">Luogo di Nascita</label>
        <input class="place" type="text" name="luogo_di_nascita">
        <br>
        <label for="dataBenedizione">Data Benedizione</label>
        <input class="blessing" type="date" name="data_benedizione">
        <br>
        <label for="numeroMiracoli">Numero di Miracoli</label>
        <input class="miracles" type="number" name="numero_miracoli">
        <br>
        <input class="button" type="submit" value="Create you Saint">
    </form>
</div>
@endsection 