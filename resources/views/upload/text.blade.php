@extends('layouts.app')

@section('header')
    <header class="header small-header mb-0 mt-30">
        <div class="header-info text-center">
            <h1 class="header-title">
                <strong>Selecciona un párrafo</strong>
                {{--<small>Create the skeleton of your app with popular pre-designed layouts.</small>--}}
            </h1>
        </div>
    </header>
@endsection

@section('content')

    <div class="upload upload-text">

        @include('upload.partials.progress')

        <div class="row justify-content-center">

            <div class="col-sm-12 col-xs-12 col-md-8 no-padding">

                <memb-text-selector :endpoint="'/api/text/1'"></memb-text-selector>

            </div>

        </div>

    </div>

@endsection