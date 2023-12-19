@extends('layouts.app')

@section('title', 'comics')

@section('content')

<main>
    <div class="container">
        <div class="pb-4">
            <span class="fs-3 py-3 px-5 bg-primary text-light">Current Comic</span>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-12 p-3">
                <div class="d-flex align-items-center">
                    <div class="">
                        <img class="imgwidth2" src="{{$comics['thumb']}}" alt="{{$comics['title']}}">
                    </div>
                    <div class="p-4 d-flex flex-column text-white">
                        <h1 class="text-danger">{{$comics['title']}}</h1>
                        <p class="fs-6">{{$comics['description']}}</p>
                        <span class="text-white fs-4">{{$comics['series']}}</span>
                        <span class="text-white fs-6">{{$comics['type']}}</span>
                        <span class="text-white fs-5"><span class="fs-5 text-success">sale:</span> {{$comics['sale_date']}}</span>
                    </div>
                    <span class="fs-5 py-1 px-3 bg-success text-light">{{$comics['price']}} </span>
                </div>
            </div>
        </div>
        <div class="text-center p-5">
            <span class="fs-5 py-3 px-5 bg-primary text-light">Load More</span>
            <span class="fs-5 py-3 px-5 bg-primary text-light"><a class="fs-5 text-white" href="{{route('comics.index')}}">Back</a></span>
        </div>    
    </div>
    <div class="text-light bg-primary d-flex align-items-center justify-content-between p-4">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                @foreach ($advices as $element)
                <div class="smallwidth">
                    <img class="smallwidth" src="{{$element['image']}}" alt="">
                </div>
                <div>
                    <span class="p-3">{{$element['title']}}</span>
                </div>                 
                @endforeach
            </div>
        </div>
    </div>
</main>

@endsection