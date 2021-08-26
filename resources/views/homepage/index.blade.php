@extends('layouts.main')

@section('content')
<h1>Súper banco</h1>
    <!-- Verificar si hay un usuario con login -->
    @auth
    {{-- Esta porción de código solo se muestra cuando hay login --}}
    <p>
        {{ auth()->user()->email }}
        <!-- Botón para cerrar sesión -->
        <a href="{{ route('auth.logout')}}" class="btn btn-primary">Cerrar sesión</a>
        <a href="{{ route('auth.register-bank-account')}}" class="btn btn-primary">Registrar nueva cuenta bancaria</a>
    </p>

    <div>
        <table>
            <thead>
                <th>Cuentas bancarias</th>
            </thead>
            <tbody>
                <th>Cuenta</th>
            </tbody>
        </table>
    </div>
    @endauth
    <p>
        <!-- Agrega botón para que te mande a la vista de register -->
        <a href="{{ route('auth.register') }}" class="btn btn-primary">Regístrate aquí</a>
    </p>
@endsection
