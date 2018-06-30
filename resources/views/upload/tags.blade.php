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


                <div class="card card-transparent picturext">

                    <div class="card-body form-type-fill">

                        <div class="row row-eq-height">

                            <div class="col-sm-12 col-xs-12 col-md-7">
                                <img src="/uploads/a.jpg" class="img-fluid w-100" alt="">
                                <gmap-map
                                        :center="{lat:-34.6066663, lng:-58.4336508}"
                                        :zoom="14"
                                        map-type-id="roadmap"
                                        style="width: 100%; height: 200px"
                                >
                                    <gmap-marker
                                            :key="1"
                                            {{--v-for="(m, index) in markers"--}}
                                            :position="{lat:-34.6066663, lng:-58.4336508}"
                                            :clickable="true"
                                            :draggable="true"
                                            @click="center={lat:-34.6066663, lng:-58.4336508}"
                                    />
                                </gmap-map>
                            </div>

                            <div class="col-sm-12 col-xs-12 col-md-5 text-left">

                                <div class="panel-user row mb-30">
                                    <div class="col-4"><img src="/uploads/authors/cortazar.jpg" class="rounded-circle w-100px h-100px" alt=""></div>
                                    <div class="col-8 h-100px">
                                        <span class="center-v">
                                            <a href="">Piero Bona</a>
                                            <small>Subida el 13 de Junio 14:44</small>
                                        </span>
                                    </div>
                                </div>

                                <div class="panel-paragraph">
                                    <div class="fade-long-text">
                                        <p class="">Nos habituamos Irene y yo a persistir solos en ella, lo que era una locura pues en esa casa podían vivir ocho personas sin estorbarse. Hacíamos la limpieza por la mañana, levantándonos a las siete, y a eso de las once yo le dejaba a Irene las últimas habitaciones por repasar y me iba a la cocina. Almorzábamos al mediodía, siempre puntuales; ya no quedaba nada por hacer fuera de unos platos sucios. Nos resultaba grato almorzar pensando en la casa profunda y silenciosa y cómo nos bastábamos para mantenerla limpia. A veces llegábamos a creer que era ella la que no nos dejó casarnos. Irene rechazó dos pretendientes sin mayor motivo, a mí se me murió María Esther antes que llegáramos a comprometernos. Entramos en los cuarenta años con la inexpresada idea de que el nuestro, simple y silencioso matrimonio de hermanos, era necesaria clausura de la genealogía asentada por nuestros bisabuelos en nuestra casa. Nos moriríamos allí algún día, vagos y esquivos primos se quedarían con la casa y la echarían al suelo para enriquecerse con el terreno y los ladrillos; o mejor, nosotros mismos la voltearíamos justicieramente antes de que fuese demasiado tarde.</p>
                                        <p class="read-more">
                                            <a href="#" class="btn btn-default"><i class="pe-7s-more fs-30"></i></a>
                                        </p>
                                    </div>
                                </div>


                                <div class="panel-text align-to-bottom"><h3>Casa tomada <small>Julio Cortázar</small></h3></div>

                            </div>

                        </div>

                        <div class="row my-10 bt-1 bb-1 py-10">

                            <div class="col-6">
                                <div class="panel-tags">
                                    <a href="">#casa</a>
                                    <a href="">#tomada</a>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <div class="panel-likes">
                                    122 <i class="ti-heart"></i>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>



                <div class="card card-transparent picturext">

                    <div class="card-body form-type-fill">

                        <div class="row row-eq-height">

                            <div class="col-sm-12 col-xs-12 col-md-7">
                                <img src="/uploads/a.jpg" class="img-fluid w-100" alt="">
                                <gmap-map
                                        :center="{lat:-34.6066663, lng:-58.4336508}"
                                        :zoom="14"
                                        map-type-id="roadmap"
                                        style="width: 100%; height: 200px"
                                >
                                    <gmap-marker
                                            :key="1"
                                            {{--v-for="(m, index) in markers"--}}
                                            :position="{lat:-34.6066663, lng:-58.4336508}"
                                            :clickable="true"
                                            :draggable="true"
                                            @click="center={lat:-34.6066663, lng:-58.4336508}"
                                    />
                                </gmap-map>
                            </div>

                            <div class="col-sm-12 col-xs-12 col-md-5">

                                <div class="panel-user row mb-30">
                                    <div class="col-4"><img src="/uploads/authors/cortazar.jpg" class="rounded-circle w-100px h-100px" alt=""></div>
                                    <div class="col-8 h-100px">
                                        <span class="center-v">
                                            <a href="">Piero Bona</a>
                                            <small>Subida el 13 de Junio 14:44</small>
                                        </span>
                                    </div>
                                </div>

                                <div class="panel-paragraph">
                                    <div class="fade-long-text">
                                        <p class="">Nos habituamos Irene y yo a persistir solos en ella, lo que era una locura pues en esa casa podían vivir ocho personas sin estorbarse. Hacíamos la limpieza por la mañana, levantándonos a las siete, y a eso de las once yo le dejaba a Irene las últimas habitaciones por repasar y me iba a la cocina. Almorzábamos al mediodía, siempre puntuales; ya no quedaba nada por hacer fuera de unos platos sucios. Nos resultaba grato almorzar pensando en la casa profunda y silenciosa y cómo nos bastábamos para mantenerla limpia. A veces llegábamos a creer que era ella la que no nos dejó casarnos. Irene rechazó dos pretendientes sin mayor motivo, a mí se me murió María Esther antes que llegáramos a comprometernos. Entramos en los cuarenta años con la inexpresada idea de que el nuestro, simple y silencioso matrimonio de hermanos, era necesaria clausura de la genealogía asentada por nuestros bisabuelos en nuestra casa. Nos moriríamos allí algún día, vagos y esquivos primos se quedarían con la casa y la echarían al suelo para enriquecerse con el terreno y los ladrillos; o mejor, nosotros mismos la voltearíamos justicieramente antes de que fuese demasiado tarde.</p>
                                        <p class="read-more">
                                            <a href="#" class="btn btn-default"><i class="pe-7s-more fs-30"></i></a>
                                        </p>
                                    </div>
                                </div>


                                <div class="panel-text align-to-bottom"><h3>Casa tomada <small>Julio Cortázar</small></h3></div>

                            </div>

                        </div>

                        <div class="row my-10 bt-1 bb-1 py-10">

                            <div class="col-6">
                                <div class="panel-tags">
                                    <a href="">#casa</a>
                                    <a href="">#tomada</a>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <div class="panel-likes">
                                    122 <i class="ti-heart"></i>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>



                <div class="card card-transparent" style="display: none">
                    <div class="card-body form-type-fill">

                        <img src="/uploads/a.jpg" class="img-fluid w-100" alt="">

                        <div class="row mt-20">
                            <div class="col-12">
                                <p class="">Nos habituamos Irene y yo a persistir solos en ella, lo que era una locura pues en esa casa podían vivir ocho personas sin estorbarse. Hacíamos la limpieza por la mañana, levantándonos a las siete, y a eso de las once yo le dejaba a Irene las últimas habitaciones por repasar y me iba a la cocina. Almorzábamos al mediodía, siempre puntuales; ya no quedaba nada por hacer fuera de unos platos sucios. Nos resultaba grato almorzar pensando en la casa profunda y silenciosa y cómo nos bastábamos para mantenerla limpia. A veces llegábamos a creer que era ella la que no nos dejó casarnos. Irene rechazó dos pretendientes sin mayor motivo, a mí se me murió María Esther antes que llegáramos a comprometernos. Entramos en los cuarenta años con la inexpresada idea de que el nuestro, simple y silencioso matrimonio de hermanos, era necesaria clausura de la genealogía asentada por nuestros bisabuelos en nuestra casa. Nos moriríamos allí algún día, vagos y esquivos primos se quedarían con la casa y la echarían al suelo para enriquecerse con el terreno y los ladrillos; o mejor, nosotros mismos la voltearíamos justicieramente antes de que fuese demasiado tarde.</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="h-300px bg-pale-gray w-100">
                                    <gmap-map
                                            :center="{lat:-34.6066663, lng:-58.4336508}"
                                            :zoom="14"
                                            map-type-id="roadmap"
                                            style="width: 100%; height: 300px"
                                    >
                                        <gmap-marker
                                                :key="1"
                                                {{--v-for="(m, index) in markers"--}}
                                                :position="{lat:-34.6066663, lng:-58.4336508}"
                                                :clickable="true"
                                                :draggable="true"
                                                @click="center={lat:-34.6066663, lng:-58.4336508}"
                                        />
                                    </gmap-map>

                                </div>
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