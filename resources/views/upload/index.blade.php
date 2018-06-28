@extends('layouts.app')


@section('header')
    <header class="header small-header mb-0 mt-30">
        <div class="header-info text-center">
            <h1 class="header-title">
                <strong>Subir foto</strong>
                {{--<small>Create the skeleton of your app with popular pre-designed layouts.</small>--}}
            </h1>
        </div>
    </header>
@endsection


@section('content')

    <div class="upload upload-picture">

        @include('upload.partials.progress')

        <div class="row justify-content-center">

            <div class="col-sm-12 col-xs-12 col-md-8 no-padding">

                <div class="card card-transparent">

                    <div class="card-body form-type-fill">

                        {{--<div class="form-group">
                            <label for="input-normal">Normal input</label>
                            <input type="text" class="form-control" id="input-normal" value="Input value">
                        </div>--}}

                        <div class="form-group">
                            <input type="file" data-provide="dropify" data-height="400">
                        </div>

                        <div class="fab fab-fixed">
                            <button class="btn btn-float btn-danger" data-toggle="button" style="border-radius: 50%">
                                <i class="fab-icon-default ti-arrow-right"></i>
                            </button>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection