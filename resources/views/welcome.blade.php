@extends('layouts.layout')

@section('content')
<div>
    <div class="container">
        <h2>
            ciao {{ $bruh }}
        </h2>
    </div>
    <div class="container">
        <div class="row">
            
            @foreach ($comics as $comic)
            
                <div class="col-4">
                    <img src="{{ $comic['thumb'] }}" alt="">
                    <h5>{{ $comic['title'] }}</h5>
                </div>
                
            @endforeach
        </div>
    </div>
</div>
@endsection
