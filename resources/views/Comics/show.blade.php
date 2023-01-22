@extends('layouts.base')

@section('title')
{{ $comic->title }}
@endsection

@section('content')
    {{-- <ul>
        <li>ID: {{  $comic->id  }}</li>
        <li>Città: {{ $comic->title }}</li>
        <li>Prezzo: {{ $comic->price }}€</li>
    </ul> --}}
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ $comic->price }}€</h5>
              <p class="card-text">{{ $comic->description }}</p>
              <p class="card-text"><small class="text-muted">{{ $comic->sale_date }}</small></p>
            </div>
          </div>
        </div>
      </div>
@endsection
