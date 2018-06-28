@extends('layouts.app')


@section('header')
    <header class="header small-header mb-0 mt-30">
        <div class="header-info text-center">
            <h1 class="header-title">
                <strong>Confirma y agrega Tags</strong>
                {{--<small>Create the skeleton of your app with popular pre-designed layouts.</small>--}}
            </h1>
        </div>
    </header>
@endsection


@section('content')

    <div class="upload upload-tags">

        @include('upload.partials.progress')

        <div class="row justify-content-center">

            <div class="col-sm-12 col-xs-12 col-md-8 no-padding">

                <div class="card card-transparent">
                    <div class="card-body form-type-fill">
                        <img src="/uploads/a.jpg" class="img-fluid w-100" alt="">

                        <div class="row mt-20">
                            <div class="col-12">
                                <p class="">Nos habituamos Irene y yo a persistir solos en ella, lo que era una locura pues en esa casa podían vivir ocho personas sin estorbarse. Hacíamos la limpieza por la mañana, levantándonos a las siete, y a eso de las once yo le dejaba a Irene las últimas habitaciones por repasar y me iba a la cocina. Almorzábamos al mediodía, siempre puntuales; ya no quedaba nada por hacer fuera de unos platos sucios. Nos resultaba grato almorzar pensando en la casa profunda y silenciosa y cómo nos bastábamos para mantenerla limpia. A veces llegábamos a creer que era ella la que no nos dejó casarnos. Irene rechazó dos pretendientes sin mayor motivo, a mí se me murió María Esther antes que llegáramos a comprometernos. Entramos en los cuarenta años con la inexpresada idea de que el nuestro, simple y silencioso matrimonio de hermanos, era necesaria clausura de la genealogía asentada por nuestros bisabuelos en nuestra casa. Nos moriríamos allí algún día, vagos y esquivos primos se quedarían con la casa y la echarían al suelo para enriquecerse con el terreno y los ladrillos; o mejor, nosotros mismos la voltearíamos justicieramente antes de que fuese demasiado tarde.</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="h-300px bg-pale-gray w-100"></div>
                            </div>
                        </div>

                        <div class="form-group mt-20">
                            <label for="input-normal">Agregar Tags</label>
                            <input type="text" class="form-control" id="input-normal" value="HTML5,CSS3,Javascript,Bootstrap,jQuery,Grunt" data-provide="tagsinput">
                        </div>

                        {{--<div class="form-group text-center float-bottom-center">
                            <button class="btn btn-bold btn-primary">Continuar <i class="ti-arrow-right"></i></button>
                        </div>--}}

                        <div class="fab fab-fixed">
                            <button class="btn btn-float btn-danger" data-toggle="button" style="border-radius: 50%">
                                <i class="fab-icon-default ti-arrow-right"></i>
                            </button>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection