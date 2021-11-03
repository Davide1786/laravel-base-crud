@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Le copertine dei nostri fumetti</h1>
            </div>
            <div class="col-12">
                @foreach ($comic as $item)
                    <img class="copertina" src="{{ $item['thumb'] }}" alt="">
                @endforeach
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, incidunt unde. Nesciunt voluptates, itaque facere velit repellat modi ab quidem labore sapiente, architecto sit ad consequatur. Corrupti suscipit necessitatibus quidem!</p>
            </div>
        </div>
    </div>
@endsection

<style>
    .copertina {
        width: 250px;
        height: 400px;
        object-fit: cover;
    }
</style>