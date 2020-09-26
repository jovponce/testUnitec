@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido {{ Auth::user()->name }}
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Cerrar la sesión') }}
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
