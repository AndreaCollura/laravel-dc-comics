@extends('layouts.app')

@section('content')
    <section id="comics-list" class="">
        <div class="content-bg">
            <div class="container py-5 px-0">
                <div class="d-flex flex-wrap justify-content-between gap-3 ms-4 mb-5">
                    @foreach ($comics as $comic)
                        <div class="comic-box d-flex flex-column ms-2 my-5">
                            <a href="{{ route('comics.show', $comic) }}">
                                <img src="{{ $comic->image }}">
                            </a>
                            <div class="d-flex justify-content-center gap-2 mt-2">
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="delete-button btn btn-danger"
                                        data-item-title="{{ $comic->title }}">Delete</button>
                                </form>
                            </div>
                            <div class="mt-3">
                                <span class="text-white text-uppercase small">{{ $comic->title }}</span>
                            </div>



                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    @include('partials.popupdelete');
@endsection
