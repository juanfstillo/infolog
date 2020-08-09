@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Logueado exitosamente</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    Accedé al tablero
<a class="nav-link" href="{{ url('tablero') }}">{{ __('Tablero') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
