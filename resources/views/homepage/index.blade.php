@extends('layouts.main')

@section('content')
    <!-- Verificar si hay un usuario con login -->
    {{-- Esta porción de código solo se muestra cuando hay login --}}
    <div class="container">
        @auth
            <h1 class="text-center">Súper banco</h1>
            <div class="row">
                <div class="row text-center">
                    <p> {{ auth()->user()->email }} </p>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <a href="{{ route('auth.logout')}}" class="btn btn-primary">Cerrar sesión</a>
                    </div>
                    <div class="col">
                        <a href="{{ route('auth.register-bank-account')}}" class="btn btn-primary">Registrar nueva cuenta bancaria</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <h1 class="text-center"> Cuentas bancarias</h1>
                </div>
                @foreach ($accounts as $key => $data)
                    <div class="row">
                    <div class="col d-flex justify-content-end">
                        <h4>{{$data->name}}</h4>
                    </div>
                    <div class="col">
                        <a href="{{route('movements.movements', $data->name)}}" class="btn btn-primary">
                            crear movimiento
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{route('history.history', $data->id)}}" class="btn btn-primary">
                            Ver Historial
                        </a>
                    </div>
                    </div> 
                @endforeach
            </div>
        @else
            <p>
                <!-- Agrega botón para que te mande a la vista de register -->
                <a href="{{ route('auth.register') }}" class="btn btn-primary">Regístrate aquí</a>
            </p>
        @endauth
    </div>
@endsection
