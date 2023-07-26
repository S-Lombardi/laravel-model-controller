@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center p-4">
            @foreach($comics as $comic)
            <ul class="card col-12 col-md-3 p-4 mb-5 me-3 list-unstyled">
                {{-- Immagine --}}
                <li>
                    <img src="{{$comic->thumb}}" alt="">
                </li>
                {{-- Titolo --}}
                <li>
                    <h5 class="mt-3 text-uppercase">{{$comic->title}}</h5>
                </li>
                {{-- Pulsante per passare alle infio del fumetto --}}
                <li>
                    <button type="button" class="btn btn-outline-warning">
                        <a class="button-home" href="{{route('recuperoFumetto', $comic->id)}}">
                            Scopri dettagli fumetto!
                        </a>
                    </button>
                </li>
            </ul>
            @endforeach
        </div>
    </div>
@endsection


