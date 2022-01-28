@extends('layouts.main')

@section('content')

    <main class="container">
        <h1>Modifica il fumetto</h1>

        <form class="row g-3 mb-5" action="{{ route('comics.update', $comic) }}" method="post">
            @csrf
            @method('PUT')
            <div class="col-md-6 mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $comic->title }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" value="{{ $comic->series }}">
            </div>
            <div class="col-12 mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description"
                    rows="3">{{ $comic->description }}"</textarea>
            </div>
            <div class="col-12 mb-3">
                <label for="thumb" class="form-label">Url Image</label>
                <input type="text" class="form-control" name="thumb" id="thumb" value="{{ $comic->thumb }}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" value="{{ $comic->type }}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" id="price" value="{{ $comic->price }}">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Edit</button>
                <button type="reset" class="btn btn-dark">Reset</button>
            </div>
        </form>

    </main>

@endsection
