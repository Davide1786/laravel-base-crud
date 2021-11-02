{{-- qui avro la lista di tutti i comics --}}

{{-- estendo il mio layout --}}
@extends('layout.app')

@section('content')
    <div class="container">
        {{-- <h1>Sono l'indice dei comics</h1> --}}
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Prezzo</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comic as $item)
                    <tr>
                        <th scope="row">{{ $item['id'] }}</th>
                        <td>{{ $item['title'] }}</td>
                        <td>{{ $item['description'] }}</td>
                        <td>{{ $item['price'] }}</td>
                        <img src="{{$item['thumb']}}" alt="">
                    </tr>    
                @endforeach
            </tbody>
          </table>
        
    </div>

  
    
