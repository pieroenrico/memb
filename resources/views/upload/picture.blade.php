@extends('upload.layouts.base')

@section('header-upload')
    <header class="header small-header mb-0 mt-20 bg-gray header-upload">
        <div class="header-info text-center">
            <h1 class="header-title">
                <strong>Subí una fotografía</strong>
                {{--<small>Create the skeleton of your app with popular pre-designed layouts.</small>--}}
            </h1>
        </div>
    </header>
@endsection

@section('content-upload')

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
                                    'upload.picture.save',
                                    ]
                         ]) !!}


                <div class="form-group">
                    <input name="picture"
                           type="file"
                           data-provide="dropify"
                           data-height="400"
                           class="file-uploader"
                           {!!  $picturext['file'] != '' ? "data-default-file='/uploads/pictures/".$picturext['file']."'" : ''  !!}
                    >
                </div>

                @include('upload.partials.submit', ['hide' => true])

            {{ Form::close() }}

        </div>

    </div>

@endsection