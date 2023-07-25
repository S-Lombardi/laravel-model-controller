@extends ('layouts.app')

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-auto">

            <img class="show-img" src="{{$id_comic ['thumb']}}" alt="">

            
        </div>
        <div class="col">
            <ul class="list-unstyled ">
                
                <li> 
                     <h4>{{$id_comic ['title']}}</h4> 
                </li>

                <li> 
                    Price: {{$id_comic ['price']}} 
                </li>
            </ul>

        </div>
    </div>
</div>

@endsection