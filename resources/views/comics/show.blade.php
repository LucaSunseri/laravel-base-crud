@extends('layouts.main')

@section('content')

    <main class="container">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4 d-flex flex-column justify-content-center">
                    <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="{{ $comic->title }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body d-flex flex-column justify-content-center" style="height: 100%;">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <h6 class="card-title">{{ $comic->series }}</h6>
                        <p class="card-text">{!! $comic->description !!}</p>
                        <p class="card-text">Sale date: {{ formatDate($comic->sale_date) }}</p>
                        <p class="card-text">Price: {{ $comic->price }}€</p>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('comics.index') }}"><button type="button"
                                    class="btn btn-primary mx-3">Edit</button></a>
                            <form action="{{ route('comics.destroy', $comic) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <a href="{{ route('comics.index') }}"><button type="button" class="btn btn-primary">Back</button></a>
    </main>

@endsection
