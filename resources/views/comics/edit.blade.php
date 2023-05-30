@extends('layouts.app')

@section('content')
    <section>
        <div class="container my-5">
            <form class="row g-3" action="{{ route('comics.update' , $comic->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <div id="titleHelp" class="form-text">Put title here!</div>
                    <label for="title" class="form-label"></label>
                    <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp" value="{{ $comic->title }}">
                </div>
                <div class="col-6">
                    <div id="imageHelp" class="form-text">Put image here!</div>
                    <label for="image" class="form-label"></label>
                    <input type="text" class="form-control" name="image" id="image" aria-describedby="imageHelp" value="{{ $comic->image }}">
                </div>
                <div class="col-md-6">
                    <div id="descriptionHelp" class="form-text">Put description here!</div>
                    <label for="description" class="form-label"></label>
                    <textarea type="text" class="form-control" name="description" id="description" aria-describedby="descriptionHelp">{{ $comic->description }}"</textarea>
                </div>
                <div class="col-md-2">
                    <div id="releaseHelp" class="form-text">Put release date here!</div>
                    <label for="release" class="form-label"></label>
                    <input type="text" placeholder="Ex: YYYY/MM/DD" class="form-control" name="release" id="release" aria-describedby="releaseHelp" value="{{ $comic->release }}">
                </div>
                <div class="col-md-3">
                    <div id="typeHelp" class="form-text">Put type here!</div>
                    <label for="type" class="form-label"></label>
                    <select type="text" class="form-select" name="series" id="series" aria-describedby="seriesHelp" value="{{ $comic->type }}">
                        <option>comic book</option>
                        <option>graphic novel</option>
                    </select>
                </div>
                <div class="col-2">
                    <div id="priceHelp" class="form-text">Put price here!</div>
                    <label for="price" class="form-label"></label>
                    <input type="text" placeholder="Ex: 12.99" class="form-control" name="price" id="price" aria-describedby="priceHelp" value="{{ $comic->price }}">
                </div>
                <div class="col-md-2">
                    <div id="seriesHelp" class="form-text">Put series here!</div>
                    <label for="series" class="form-label"></label>
                    <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelp" value="{{ $comic->series }}">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </div>
            </form>
        </div>

    </section>
@endsection
