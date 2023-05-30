@extends('layouts.app')

@section('content')
    <section id="comics-list">
        <div class="content-bg">
            <div class="container py-4 px-0">
                <div class="d-flex flex-wrap justify-content-between gap-3 ms-4">
                    @foreach ($comics as $comic)
                        <div class="comic-box d-flex flex-column ms-2 my-5">
                            <a href="{{ route('comics.show', $comic) }}" >
                                <img src="{{ $comic->image }}">
                            </a>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Edit</a>
                            <div class="mt-3">
                                <span class="text-white text-uppercase small">{{ $comic->title }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
