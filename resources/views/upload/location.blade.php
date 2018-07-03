@extends('upload.layouts.base')

@section('header-upload')
    <header class="header small-header mb-0 mt-20 bg-gray header-upload">
        <div class="header-info text-center">
            <h1 class="header-title">
                <strong>Selecciona la ubicación de la foto</strong>
                {{--<small>Create the skeleton of your app with popular pre-designed layouts.</small>--}}
            </h1>
        </div>
    </header>
@endsection

@section('content-upload')


    <div class="upload upload-location">
        <div class="card card-transparent">

            <div class="card-body form-type-fill">

                {!! Form::open(
                            [
                            'method' => 'POST',
                            'enctype' => 'multipart/form-data',
                            'files' => 'true',
                            'class' => 'form-type-fill',
                            'data-provide' => 'validation',
                            'route' => [
                                        'upload.location.save',
                                        ]
                             ]) !!}

                <memb-location-selector></memb-location-selector>

                {{ Form::close() }}

            </div>

        </div>
    </div>

@endsection