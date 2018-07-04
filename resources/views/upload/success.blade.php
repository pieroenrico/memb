@extends('layouts.app')


@section('header')
    <header class="header small-header mb-0 mt-20 bg-gray header-upload">
        <div class="header-info text-center">
            <h1 class="header-title">
                <strong>Felicitaciones! Tu imagen fue subida!</strong>
                {{--<small>Create the skeleton of your app with popular pre-designed layouts.</small>--}}
            </h1>
        </div>
    </header>
@endsection


@section('content')

    <div class="upload upload-tags">



        <div class="row justify-content-center">

            <div class="col-sm-12 col-xs-12 col-md-8 no-padding">

                <memb-picturext
                        :display-bottom-panel="true"
                        :picture="'/uploads/pictures/{{ $data['picture'] }}'"
                        :location='{{ str_replace("\"", "", $data['location']) }}'
                        :text='{{ $data['text'] }}'
                        :user="{{ $data['user'] }}"
                        :tags="{{ $data['tags'] }}"
                        :likes="0"
                ></memb-picturext>

                <div class="text-center">
                    <a href="{{ route('home') }}" class="btn btn-primary mt-20 mb-100">Regresar al feed</a>
                </div>
            </div>

        </div>


    </div>

@endsection