@extends('layouts.app')

@section('header')
    @yield('header-upload')
@endsection

@section('content')
    <div class="upload upload-picture">

        @include('upload.partials.progress')

        <div class="row justify-content-center">
            <div class="col-sm-12 col-xs-12 col-md-8 no-padding">

                @yield('content-upload')

            </div>
        </div>
    </div>
@endsection