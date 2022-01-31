@extends('layouts.main')

@section('content')

    <main class="container">
        <h1>Inserisci il fumetto</h1>

        <form class="row g-3 mb-5" action="{{ route('comics.store') }}" method="post">
            @csrf
            @method('POST')
            <div class="col-md-6 mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" value="{{ old('title') }}" class="form-control  @error('title') is-invalid @enderror"
                    name="title" id="title">
                @error('title')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" value="{{ old('series') }}" class="form-control  @error('series') is-invalid @enderror"
                    name="series" id="series">
                @error('series')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-12 mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                    id="description" rows="3">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-12 mb-3">
                <label for="thumb" class="form-label">Url Image</label>
                <input type="text" value="{{ old('thumb') }}" class="form-control @error('thumb') is-invalid @enderror"
                    name="thumb" id="thumb">
                @error('thumb')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-4 mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" value="{{ old('type') }}" class="form-control @error('title') is-invalid @enderror"
                    name="type" id="type">
                @error('type')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-4 mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" value="{{ old('sale_date') }}"
                    class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date">
                @error('sale_date')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-4 mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" value="{{ old('price') }}"
                    class="form-control @error('price') is-invalid @enderror" name="price" id="price">
                @error('price')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Send</button>
                <button type="reset" class="btn btn-dark">Reset</button>
            </div>
        </form>

    </main>

@endsection
