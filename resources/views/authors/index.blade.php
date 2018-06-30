@extends('layouts.app')

@section('header')
    <header class="header small-header mb-0 mt-30">
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
            <div class="card card-transparent">
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