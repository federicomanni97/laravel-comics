@extends('layouts.app')

@section('title', 'Home')

@section('content')

<main>
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-12 col-md-4 col-lg-2 py-4">
                    <div class="">
                        <img class="imgwidth" src="{{$product['thumb']}}" alt="{{$product['title']}}">
                    </div>
                    <span class="text-white py-5">{{$product['series']}}</span>
                </div>
            @endforeach
        </div>
    </div>
    
</main>

@endsection