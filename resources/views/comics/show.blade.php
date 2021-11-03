{{-- qui avrò il dettaglio di tutti i comics --}}
@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4 mb-4">dettaglio {{ $comic['title'] }}</h1>
                <ul>
                    <li>{{ $comic['description'] }}</li>
                </ul>
            </div>
            <div class="col-12">
                <img src="{{ $comic['thumb'] }}" alt="">
            </div>
        </div>
    </div>
  
    
@endsection