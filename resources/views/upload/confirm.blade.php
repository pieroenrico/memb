@extends('layouts.app')


@section('header')
    <header class="header small-header mb-0 mt-20 bg-gray header-upload">
        <div class="header-info text-center">
            <h1 class="header-title">
                <strong>Agregá Tags</strong>
                {{--<small>Create the skeleton of your app with popular pre-designed layouts.</small>--}}
            </h1>
        </div>
    </header>
@endsection


@section('content')

    <div class="upload upload-tags">

        @include('upload.partials.progress')


        {!! Form::open(
                            [
                            'method' => 'POST',
                            'enctype' => 'multipart/form-data',
                            'files' => 'true',
                            'class' => 'form-type-fill',
                            'data-provide' => 'validation',
                            'route' => [
                                        'upload.confirm.save',
                                        ]
                             ]) !!}

        <div class="row justify-content-center">

            <div class="col-sm-12 col-xs-12 col-md-8 no-padding">

                <memb-picturext
                        :display-bottom-panel="true"
                        :picture="'/uploads/pictures/{{ $data['picture'] }}'"
                        :location='{{ str_replace("\"", "", $data['location']) }}'
                        :text='{{ $data['text'] }}'
                        :user="{id: 1, fullname: 'Pito Catalan', picture: '/uploads/authors/borges.jpg'}"
                        :tags="{{ $data['tags'] }}"
                        :likes="0"
                ></memb-picturext>


                <div class="card card-transparent form-type-fill">

                    <div class="fab fab-fixed">
                        <button type="submit" class="btn btn-float btn-success btn-submit">
                            <i class="fab-icon-default ti-check"></i>
                        </button>
                    </div>

                </div>

            </div>

        </div>

        {{ Form::close() }}

    </div>

@endsection