@extends('layouts.app')

@section('content')
    <section id="comics-list">
        <div class="content-bg">
            <div class="container py-4 px-0">
                <a class="btn btn-primary" href="{{ route('comics.index')}}">view all</a>
                <div class="d-flex flex-wrap justify-content-between gap-3 ms-4">
                    @foreach ($comics as $comic)
                        <div class="comic-box d-flex flex-column ms-2 mt-2">
                                <img src="{{ $comic['thumb'] }}">
                            <div class="mt-3">
                                <span class="text-white text-uppercase small">{{ $comic['title'] }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section id="shop-icons">
        <div class="icon-box d-flex align-items-center">
            <div class="container py-2 px-0">
                <ul class="d-flex justify-content-around my-0 py-5">
                    @foreach ($mainlinks as $link)
                        <li class="d-flex align-items-center  ">
                            <div class="d-flex justify-content-center shopicon-box">
                                <img src="{{$link['icon']}}" alt="">
                            </div>
                            <span class="text-uppercase text-white ms-3 ">{{ $link['text']}}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection
