@extends('auth.layouts.base')

@section('content')

    <div class="col-md-6 col-lg-5 col-xl-4 align-self-center">
        <div class="px-80 py-30">
            <h4>Ingresar</h4>
            <p><small>Ingresa a tu cuenta</small></p>
            <br>

            @if ($errors->has('email'))
                <div class="alert alert-danger">
                    {{ $errors->first('email') }}
                </div>
            @endif

            <form class="form-type-fill" method="post" action="{{ route('login') }}" data-provide="validation">

                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="email require">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required autofocus>

                </div>

                <div class="form-group">
                    <label for="password require">Contraseña</label>
                    <input type="password" class="form-control" id="password" required name="password">

                </div>

                <div class="form-group flexbox">
                    {{--<label class="custom-control custom-control-info custom-checkbox">
                        <input type="checkbox" class="custom-control-input" {{ old('remember') ? 'checked' : '' }} name="remember">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Remember me</span>
                    </label>--}}

                    <a class="text-muted hover-primary fs-13" href="{{ route('password.request') }}">Olvidaste tu contraseña?</a>
                </div>

                <div class="form-group">
                    <button class="btn btn-bold btn-block btn-success" type="submit">Ingresar</button>
                </div>
            </form>

            <hr class="w-30px">

            <p class="text-center text-muted fs-13 mt-20 text-info">No tenés una cuenta? <a class="text-primary fw-500" href="/register">Crea una</a></p>
        </div>
    </div>
@endsection