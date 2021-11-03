@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('comics.update', $comic['id']) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input value="{{ $comic['title'] }}" type="text" name="title" class="form-control" id="title" placeholder="Invia nome del comics">
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  {{-- <input value="{{ $comic['description'] }}" type="text" name="description" class="form-control" id="description" placeholder="Invia descrizione comics"> --}}
                  <textarea class="form-control" name="description" id="description">{{ $comic['description']}}"</textarea>
                </div>
                <div class="mb-3">
                  <label for="thumb" class="form-label">Thumb</label>
                  <input value="{{ $comic['thumb'] }}" type="text" name="thumb" class="form-control" id="thumb" placeholder="Invia image comics">
                </div>
                <div class="mb-3">
                  <label for="price" class="form-label">Price</label>
                  <input value="{{ $comic['price'] }}" type="text" name="price" class="form-control" id="price" placeholder="Invia price comics">
                </div>
                <div class="mb-3">
                  <label for="series" class="form-label">Series</label>
                  <input value="{{ $comic['series'] }}" type="text" name="series" class="form-control" id="series" placeholder="Invia series comics">
                </div>
                <div class="mb-3">
                  <label for="sale_date" class="form-label">Sale Date</label>
                  <input value="{{ $comic['sale_date'] }}" type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Invia sale_date comics">
                </div>
                <div class="mb-3">
                  <label for="type" class="form-label">Type</label>
                  {{-- <input value="{{ $comic['type'] }}" type="text" name="type" class="form-control" id="type" placeholder="Invia type comics"> --}}
                  <select class="form-control" name="type" id="type">
                    <option value="">--Seleziona--</option>
                    <option value="comic book" {{ $comic['type'] == 'comic book' ? 'selected' : NULL }}>Comic Book</option>
                    <option value="graphic novel"{{ $comic['type'] == 'graphic novel' ? 'selected' : NULL }}>Graphic Novel</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="created_at" class="form-label">Created At</label>
                  <input type="text" name="created_at" class="form-control" id="created_at" placeholder="Invia created_at comics">
                </div>
                <div class="mb-3">
                  <label for="updated_at" class="form-label">Updated At</label>
                  <input type="text" name="updated_at" class="form-control" id="updated_at" placeholder="Invia updated_at comics">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
    
@endsection