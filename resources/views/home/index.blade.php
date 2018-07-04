@extends('layouts.app')

@section('content')


    <memb-lister
    :search-text="false"
    :search-author="false"
    :zoom-start="12"
    :mode="'map'"
    {!! isset($author_id) != '' ? ':author="'.$author_id . "\" :author-data='".$author_data. "'" : '' !!}
    {!! isset($text_id) != '' ? ':text="'.$text_id . "\" :text-data='".$text_data. "'" : '' !!}
    ></memb-lister>


    <div class="fab fab-fixed fab-fixed-center fab-fixed-big">
        <a href="{{ route('upload.picture.show') }}" class="btn btn-float btn-danger btn-submit">
            <i class="fab-icon-default fa fa-camera"></i>
        </a>
    </div>

@endsection