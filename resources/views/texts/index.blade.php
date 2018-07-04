@extends('layouts.app')

@section('header')
    <header class="header small-header mb-0 mt-20 bg-gray header-upload">
        <div class="header-info text-center">
            <h1 class="header-title">
                <strong>Textos</strong>
                {{--<small>Create the skeleton of your app with popular pre-designed layouts.</small>--}}
            </h1>
        </div>
    </header>
@endsection

@section('content')

    <memb-text-selector :endpoint="'/api/texts/'" :mode="'url'" {!!  $author_id != '' ?  ':author="'.$author_id.'"' : '' !!}></memb-text-selector>

@endsection