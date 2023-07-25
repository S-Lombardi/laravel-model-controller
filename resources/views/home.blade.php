@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @foreach($comics as $comic)
                <div class="card">
                    
                    <h3> {{$comic->title }}</h3>

                </div>
                @endforeach()

            </div>
            
        </div>
    </div>
@endsection


