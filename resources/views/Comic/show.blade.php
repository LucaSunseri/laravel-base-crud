@extends('layouts.main')

@section('content')

    <main class="container">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="{{ $comic->title }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <h6 class="card-title">{{ $comic->series }}</h6>
                        <p class="card-text">{{ $comic->description }}</p>
                        <p class="card-text"><small
                                class="text-muted">{{ formatDate($comic->sale_date) }}</small></p>
                        <p class="card-text"><small class="text-muted">{{ $comic->price }}€</small></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
