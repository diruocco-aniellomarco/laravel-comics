@extends('layouts.app');

@section('main-content')
    <div class="container">
        <div class="row g-3">
            @foreach ($comics as $comic)
                
            
            <div class="col-2">

                <div class="card card_main">
                    <img src="{{ $comic['thumb']}}" class="card-img-top img_card_main" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic['series']}}</h5>
                        
                        
                    </div>
              </div>

            </div>

            @endforeach
        </div>
    </div>
@endsection