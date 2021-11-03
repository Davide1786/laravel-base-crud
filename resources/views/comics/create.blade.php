@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                @method('POST')
             
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" name="title" class="form-control" id="title" placeholder="Invia nome del comics">
                  @error('title')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  {{-- <input type="text" name="description" class="form-control" id="description" placeholder="Invia descrizione comics"> --}}
                  <textarea class="form-control" name="description" id="description"></textarea>
                  @error('description')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="thumb" class="form-label">Thumb</label>
                  <input type="text" name="thumb" class="form-control" id="thumb" placeholder="Invia image comics">
                  @error('thumb')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="price" class="form-label">Price</label>
                  <input type="text" name="price" class="form-control" id="price" placeholder="Invia price comics">
                  @error('price')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="series" class="form-label">Series</label>
                  <input type="text" name="series" class="form-control" id="series" placeholder="Invia series comics">
                  @error('series')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="sale_date" class="form-label">Sale Date</label>
                  <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Invia sale_date comics">
                  @error('sale_date')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="type" class="form-label">Type</label>
                  {{-- <input type="text" name="type" class="form-control" id="type" placeholder="Invia type comics"> --}}
                  <select class="form-control" name="type" id="type">
                    <option value="">--Seleziona--</option>
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
                  </select>
                  @error('type')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="created_at" class="form-label">Created At</label>
                  <input type="text" name="created_at" class="form-control" id="created_at" placeholder="Invia created_at comics">
                  @error('created_at')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="updated_at" class="form-label">Updated At</label>
                  <input type="text" name="updated_at" class="form-control" id="updated_at" placeholder="Invia updated_at comics">
                  @error('updated_at')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
    
@endsection