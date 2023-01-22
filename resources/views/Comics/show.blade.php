@extends('layouts.base')

@section('title')
    Informazioni su  {{ $comics->title }}
@endsection

@section('content')
    <ul>
        <li>ID: {{ $comics->id }}</li>
        <li>Città: {{ $comics->title }}</li>
        <li>Prezzo: {{ $comics->price }}€</li>
    </ul>
@endsection
