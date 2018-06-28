@extends('layouts.app')


@section('content')

    <div class="upload">

        <div class="row justify-content-center">

            <div class="col-sm-12 col-xs-12 col-md-8">

                <div class="card">

                    <div class="card-title">
                        <h4>Subir foto</h4>
                    </div>
                    <div class="card-title">
                        <ul class="nav nav-process nav-process-circle">
                            <li class="nav-item complete">
                                <a class="nav-link" href="#"></a>
                            </li>
                            <li class="nav-item processing">
                                <a class="nav-link" href="#"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body form-type-fill">

                        {{--<div class="form-group">
                            <label for="input-normal">Normal input</label>
                            <input type="text" class="form-control" id="input-normal" value="Input value">
                        </div>--}}

                        <div class="form-group">
                            <input type="file" data-provide="dropify" data-height="400">
                        </div>

                        <div class="form-group text-center">
                            <button class="btn btn-bold btn-primary">Continuar <i class="ti-arrow-right"></i></button>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection