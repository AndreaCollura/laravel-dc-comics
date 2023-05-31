@extends('layouts.app')

@section('content')
    <section>
        <div class="container my-5">
            <form class="row g-3" action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="col-md-6">
                    <div id="titleHelp" class="form-text">Put title here!</div>
                    <label for="title" class="form-label"></label>
                    <input type="text" class="form-control  @error('title') is-invalid
                    @enderror"
                        name="title" id="title" aria-describedby="titleHelp">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-6">
                    <div id="imageHelp" class="form-text">Put image here!</div>
                    <label for="image" class="form-label"></label>
                    <input type="text" class="form-control @error('image') is-invalid
                    @enderror"
                        name="image" id="image" aria-describedby="imageHelp">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div id="descriptionHelp" class="form-text">Put description here!</div>
                    <label for="description" class="form-label"></label>
                    <textarea type="text" class="form-control @error('description') is-invalid
                    @enderror"
                        name="description" id="description" aria-describedby="descriptionHelp"></textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-2">
                    <div id="releaseHelp" class="form-text">Put release date here!</div>
                    <label for="release" class="form-label"></label>
                    <input type="text" placeholder="Ex: YYYY/MM/DD"
                        class="form-control @error('release') is-invalid
                    @enderror" name="release"
                        id="release" aria-describedby="releaseHelp">
                    @error('release')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-3">
                    <div id="typeHelp" class="form-text">Put type here!</div>
                    <label for="type" class="form-label"></label>
                    <select type="text" class="form-select @error('type') is-invalid
                    @enderror"
                        name="type" id="type" aria-describedby="typeHelp">
                        <option>comic book</option>
                        <option>graphic novel</option>
                    </select>
                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-2">
                    <div id="priceHelp" class="form-text">Put price here!</div>
                    <label for="price" class="form-label"></label>
                    <input type="text" placeholder="Ex: 12.99"
                        class="form-control @error('price') is-invalid
                    @enderror" name="price"
                        id="price" aria-describedby="priceHelp">
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-2">
                    <div id="seriesHelp" class="form-text">Put series here!</div>
                    <label for="series" class="form-label"></label>
                    <input type="text" class="form-control @error('series') is-invalid
                    @enderror"
                        name="series" id="series" aria-describedby="seriesHelp">
                    @error('series')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </div>
            </form>
        </div>

    </section>
@endsection
