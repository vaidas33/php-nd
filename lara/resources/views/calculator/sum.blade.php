@extends('layout.main')

@section('sum')

<h1>Skaičiuojam:</h1>

@if(is_numeric($pirms) && is_numeric($antrs))
Pirmas: {{ $pirms }} Antras: {{ $antrs }} Suma: {{ $result}}

@endif

@endsection

@section('title') Calculator @endsection