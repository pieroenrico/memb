@extends('layouts.app')

@section('content')

    <div class="row">

        @forelse($authors as $author)
        <div class="col-md-6 col-xs-12">
            <div class="card">
                <h4 class="card-title"><strong>{{ $author->fullname }}</strong></h4>

                <div class="card-body">
                    <i class="ti-user"></i>
                </div>
            </div>
        </div>
            @empty
                <p class="no-results">No hay autores</p>
        @endforelse

    </div>

@endsection