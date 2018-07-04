@extends('layouts.app')

@section('header')
    <header class="header small-header mb-0 mt-20 bg-gray header-upload">
        <div class="header-info text-center">
            <h1 class="header-title">
                <strong>Autores</strong>
                {{--<small>Create the skeleton of your app with popular pre-designed layouts.</small>--}}
            </h1>
        </div>
    </header>
@endsection

@section('content')

    <div class="row">

        @forelse($authors as $author)
        <div class="col-md-3 col-xs-12">
            <div class="card card-transparent card-options cursor-link author-option">
                <div class="options">
                    <div class="center-vh">
                        <a href="#" class="btn btn-round btn-danger text-center"><i class="fa fa-cloud-upload"></i></a> &nbsp;
                        <a href="{{ route('texts', ['author'=>$author->id]) }}" class="btn btn-round btn-primary text-center"><i class="fa fa-book"></i></a> &nbsp;
                        <a href="{{ route('home', ['author'=>$author->id]) }}" class="btn btn-round btn-success text-center"><i class="fa fa-file-image-o"></i></a>
                    </div>
                </div>
                <div class="card-body text-center">
                    <img src="/uploads/authors/{{ $author->picture }}" alt="" class="rounded-circle mb-10">
                    <h3>{{ $author->fullname }}</h3>
                </div>
            </div>
        </div>
            @empty
                <p class="no-results">No hay autores</p>
        @endforelse

    </div>

@endsection