@extends('layouts.app')

@section('header')
    <header class="header small-header mb-10">
        <div class="header-info">
            <h1 class="header-title">
                <strong>Julio Cortázar</strong>
                {{--<small>Create the skeleton of your app with popular pre-designed layouts.</small>--}}
            </h1>
        </div>

        {{--<div class="header-action">
            <nav class="nav">
                <a class="nav-link active" href="#">All</a>
                <a class="nav-link" href="#">Add new</a>
                <a class="nav-link d-none d-sm-block" href="#">Categories</a>
                <a class="nav-link d-none d-sm-block" href="#">Tags</a>
            </nav>

            <div class="buttons">
                <div class="fab fab-dir-left">
                    <button class="btn btn-float btn-primary" data-toggle="button">
                        <i class="fab-icon-default ti-plus"></i>
                        <i class="fab-icon-active ti-close"></i>
                    </button>

                    <ul class="fab-buttons">
                        <li><a class="btn btn-float btn-sm btn-info" href="#"><i class="fa fa-calendar"></i></a></li>
                        <li><a class="btn btn-float btn-sm btn-info" href="#"><i class="fa fa-music"></i></a></li>
                        <li><a class="btn btn-float btn-sm btn-info" href="#"><i class="fa fa-video-camera"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>--}}
    </header>
@endsection

@section('content')

    <div class="feed" style="display: none">
        <div class="row">

            @for($i=0;$i<=20;$i++)
                <div class="feed-picture col-md-4 col-xs-12">
                    <div class="card">

                        <h4 class="card-title">
                            <strong>Casa Tomada</strong> <small>Julio Cortázar</small>
                        </h4>

                        <div class="card-body no-padding">
                            <img class="img-fluid" src="/uploads/a.jpg" alt="...">
                        </div>

                        <footer class="card-footer">
                            <div class="row">
                                <div class="col-md-6">Subida por <a href="">Valeria</a></div>
                                <div class="col-md-6 text-right">122 <i class="ti-heart"></i></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <a href="" class="tag">#casa</a>
                                    <a href="" class="tag">#tomada</a>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            @endfor

        </div>
    </div>


    <div class="picture-detail">

        <div class="row">
            <div class="offset-2 col-md-8 col-sm-offset-0">

                <div class="row">
                    <div class="col-md-12">

                        <h3>Casa Tomada</h3>
                        <h4>Julio Cortázar</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <img class="img-fluid" src="/uploads/a.jpg" alt="..." style="width:100%">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <p>Nos gustaba la casa porque aparte de espaciosa y antigua (hoy que las casas antiguas sucumben a la mas ventajosa liquidación de sus materiales) guardaba los recuerdos de nuestros bisabuelos, el abuelo paterno, nuestros padres y toda la infancia.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 h-300px bg-pale-gray">

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">Subida por <a href="">Valeria</a></div>
                    <div class="col-md-6 text-right">122 <i class="ti-heart"></i></div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <a href="" class="tag">#casa</a>
                        <a href="" class="tag">#tomada</a>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <img class="img-fluid rounded-circle w-200px h-200px" src="/uploads/a.jpg" alt="..." style="width:100%">
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection