@extends('layouts.main')

@section('content')
    <!-- Verificar si hay un usuario con login -->
    {{-- Esta porción de código solo se muestra cuando hay login --}}
    <div class="container">
        @auth
            <h1 class="text-center">Historial de Movimientos</h1>
            <div class="row">
                <div class="row text-center">
                    <p> Usuario: {{ auth()->user()->email }} </p>
                </div>
            </div>

            <div class="row">
                <table>
                <tr>
                    <th>Tipo</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Fecha</th>
                </tr>
                @foreach ($movementsHistory as $key => $data)
                    <tr>
                        <td>{{$data->mnt_type}}</td>
                        <td>{{$data->mnt_description}}</td>
                        <td>{{$data->amount}}</td>
                        <td>{{$data->created_at}}</td>
                    </tr>
                @endforeach
                </table>
            </div>
        @endauth
    </div>
@endsection
