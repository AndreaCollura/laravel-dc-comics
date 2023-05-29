@extends('layouts.app')

@section('content')
    <section id="comic-info">
        <div class="container-fluid blue-box">
            <div class="container">
                <img src="{{ $comic->image }}" alt="">
            </div>
        </div>
        <div class="container my-4">
            <h1 class="text-black text-uppercase fs-2">{{$comic['title']}}</h1>
            <div class="w-50">
                <p>{{$comic['description']}}</p>
            </div>
        </div>
        <div class="container-fluid details-box">
            <p></p>
        </div>
    </section>
@endsection
