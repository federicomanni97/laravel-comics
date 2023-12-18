@extends('layouts.app')

@section('title', 'Home')

@section('content')

<main>
    <h1>Home Page</h1>
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="{{$product['thumb']}}" alt="{{$product['title']}}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>

@endsection