@extends('layouts.app')

@section('content')

    <div class="feed-show">

        <div class="feed-header" style="background-image: url('/uploads/pictures/{{ $picturext->file }}');">
            {{--<div class="panel-user row mb-30 mt-20">
                <div class="col-3"><img src="/uploads/users/piero.jpg" class="rounded-circle w-50px h-50px" alt=""></div>
                <div class="col-9 h-50px">
                    <span class="center-v">
                        <a href="" class="fs-15">Piero Bona</a>
                        <small>Subida el 13 de Junio 14:44</small>
                    </span>
                </div>
            </div>--}}

            <div class="bgclass"></div>

            <div class="panel-map">
                <gmap-map
                        :center="{lat:{{ $picturext->location->lat }}, lng:{{ $picturext->location->lng }}}"
                        :zoom="14"
                        map-type-id="roadmap"
                        style="width: 100%; height: 200px"
                >
                    <gmap-marker
                            :key="1"
                            :position="{lat:{{ $picturext->location->lat }}, lng:{{ $picturext->location->lng }}}"
                            :clickable="true"
                            :draggable="true"
                            @click="center={lat:{{ $picturext->location->lat }}, lng:{{ $picturext->location->lng }}}"
                            :icon="'/img/pinicon.svg'"
                    />
                </gmap-map>
            </div>

            <div class="panel-text">
                <div class="row">
                    <div class="col-12">
                        <p>"{{ $picturext->paragraph->paragraph }}"</p>
                        <hr style="border-color: #666">
                        <h3>{{ $picturext->text->title }} <small>{{ $picturext->author->name }} {{ $picturext->author->lastname }}</small></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"><img src="/uploads/users/{{ $picturext->user->profile->picture }}" class="rounded-circle w-50px h-50px" alt=""></div>
                    <div class="col-10 h-50px">
                    <span class="center-v">
                        <a href="" class="fs-15">{{ $picturext->user->name }}</a>
                        <small>Subida el 13 de Junio 14:44</small>
                    </span>
                    </div>
                </div>
            </div>

        </div>

        <div class="feed-content my-50 px-30">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="/uploads/users/{{ $picturext->user->profile->picture }}" class="rounded-circle w-150px h-150px mb-20" alt=""> <br>
                    Más fotos de <a href="">{{ $picturext->user->name }}</a>
                    <hr>
                </div>
            </div>
            <div class="row row-eq-height">
                @forelse($relateds as $related)
                <div class="col-xs-12 col-sm-12 col-md-4 mb-20">
                    <a href="{{ route('feed.show', ['id' => $related->id]) }}">
                        <div class="card card-transparent">
                            <div class="card-body" style="height: 300px; background-size: cover; background-position: center center; background-image: url('/uploads/pictures/{{ $related->file }}'">

                            </div>
                        </div>
                    </a>
                </div>
                @empty
                    <p class="no-results">No hay fotos relacionadas</p>
                @endforelse
            </div>
        </div>
    </div>

@endsection