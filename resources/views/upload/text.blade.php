@extends('layouts.app')


@section('content')

    <div class="upload upload-text">

        <div class="row justify-content-center">

            <div class="col-sm-12 col-xs-12 col-md-8">

                <memb-text-selector :endpoint="'/api/text/1'"></memb-text-selector>

            </div>

        </div>

    </div>

@endsection