@extends('layouts.main-layout')

@section('content')
<div>
    <h1>Saint</h1>
    <ul>
        <li>
            <strong> Saint:</strong>  {{ $saint -> nome }} <br>
            <strong> Place of Birth:</strong>  {{ $saint -> luogo_di_nascita }} <br>
            <strong> Blessing Date:</strong>  {{ $saint -> data_benedizione }} <br>
            <strong> Number of Miracles:</strong>  {{ $saint -> numero_miracoli }}
        </li>
    </ul>
</div>