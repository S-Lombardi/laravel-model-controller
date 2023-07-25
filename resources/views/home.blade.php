@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center p-4">
            @foreach($comics as $comic)
            <div class="card col-12 col-md-3 p-4 mb-5 me-3">
                {{-- Immagine --}}
                <img src="{{$comic->thumb}}" alt="">
                {{-- Titolo --}}
                <h4 class="mt-3">{{$comic->title}}</h4>

                {{-- Prezzo --}}
                <div>Prezzo:{{$comic->price}}</div>
            </div>
            @endforeach
        </div>
    </div>
@endsection


