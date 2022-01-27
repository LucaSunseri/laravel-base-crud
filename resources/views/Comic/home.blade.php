@extends('layouts.main')

@section('content')

    <main class="container">
        <h1>Lista Fumetti</h1>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            @foreach ($comics as $comic)
                <div class="col d-flex justify-content-center my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae
                                quibusdam odit sapiente ex, ad numquam aut reiciendis sequi impedit. Blanditiis!
                            </p>
                            <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">Show More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="div">{{ $comics->links() }}</div>
    </main>

@endsection
