@extends ('layouts.app')

@section ('content')
<div class="container">
    <div class="row mt-5 justify-content-center">
        {{-- Immagine --}}
        <div class="col-auto">
            <img class="show-img" src="{{$id_comic ['thumb']}}" alt="">
        </div>
        <div class="col">
            <ul class="list-unstyled">
                {{-- TITOLO --}}
                <li> 
                    <h3>{{$id_comic ['title']}}</h3> 
                </li class=>
                {{--Tipo --}}
                <li class="mb-5"> 
                    <h6>{{$id_comic ['type']}} </h6>
                </li>
                {{-- Descrizione --}}
                <li class="mb-5"> 
                    <p>{{$id_comic ['description']}}</p>
                </li>
                {{-- Prezzo --}}
                <li class="mb-2"> 
                    Price: {{$id_comic ['price']}} 
                </li>
                {{-- Artisti --}}
                <li class="mb-2"> 
                    Artits: {{$id_comic ['artists']}} 
                </li>
                {{-- Artisti --}}
                <li> 
                    Autori: {{$id_comic ['writers']}} 
                </li>
            </ul>

        </div>
    </div>
</div>

@endsection