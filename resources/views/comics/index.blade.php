{{-- qui avro la lista di tutti i comics --}}

{{-- estendo il mio layout --}}
@extends('layout.app')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comic as $item)
                    <tr>
                        <th scope="row">{{ $item['id'] }}</th>
                        <td>{{ $item['title'] }}</td>
                        <td>{{ $item['description'] }}</td>
                        <td>{{ $item['type'] }}</td>
                        <td>
                          <a href="{{ route('comics.show', $item['id']) }}"
                             class="btn btn-info">
                             Details
                          </a>
                          <a href="{{ route('comics.edit', $item['id']) }}"
                             class="btn btn-warning">
                             Modify
                          </a>
                          <form method="POST" action="{{ route('comics.destroy', $item['id']) }}">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </td>
                        {{-- <img src="{{$item['thumb']}}" alt=""> --}}
                    </tr>    
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
        
        
        
    </div>

    @endsection

  
    
