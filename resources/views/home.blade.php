@extends('layouts.app')

@section('main-content')
    <section class="comics_list_main">
        <div class="container flex-column mt-5">
            <div class="row g-3">

                @foreach ($comics as $comic)                
                
                <div class="col-2">

                    <div class=" card_main">
                        <img src="{{ $comic['thumb']}}" class="card-img-top img_card_main" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mt-2">{{ $comic['series']}}</h5>
                        </div>
                </div>

                </div>

                @endforeach
            </div>
        <div class="row">
            <button type="button" class="btn btn-primary">LOAD MORE</button>
        </div>
            
        </div>
    </section>
@endsection