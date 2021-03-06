@extends('layouts.app')

@section('header')
    <header class="header small-header mb-0 mt-20 bg-gray header-upload">
        <div class="header-info text-center">
            <h1 class="header-title">
                <strong>A qué parte del cuento se refiere tu foto?</strong>
                {{--<small>Create the skeleton of your app with popular pre-designed layouts.</small>--}}
            </h1>
        </div>
    </header>
@endsection

@section('content')

    <div class="upload upload-text">

        @include('upload.partials.progress')

        {!! Form::open(
                            [
                            'method' => 'POST',
                            'enctype' => 'multipart/form-data',
                            'files' => 'true',
                            'class' => 'form-type-fill',
                            'data-provide' => 'validation',
                            'route' => [
                                        'upload.text.save',
                                        ]
                             ]) !!}

        <div class="row justify-content-center">

            <div class="col-sm-12 col-xs-12 col-md-8 no-padding">

                {{--<memb-paragraph-selector :endpoint="'/api/text/{id}/paragraphs'" :text="1"></memb-paragraph-selector>--}}
                {{--<memb-author-selector :endpoint="'/api/authors/'"></memb-author-selector>--}}
                {{--<memb-text-selector :endpoint="'/api/texts/'" :author="5"></memb-text-selector>--}}

                <memb-text-paragraph-selector
                :start-in="1"></memb-text-paragraph-selector>

            </div>

        </div>

        {{ Form::close() }}

    </div>

@endsection