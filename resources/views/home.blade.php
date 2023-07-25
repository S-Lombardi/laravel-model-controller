@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
                @foreach($comics as $comic)
                <div class="card col-12 col-md-6 col-lg-4">
                    
                    <h4> {{$comic->title}}</h4>

                    <img src="{{$comic->thumb}}" alt="">

                </div>
                @endforeach

            
            
        </div>
    </div>
@endsection


