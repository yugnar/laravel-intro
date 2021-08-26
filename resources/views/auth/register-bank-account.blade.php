@extends('layouts.main')

@section('content')
<div>
    <h1>Registro de nueva cuenta bancaria</h1>

    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


    <form action="{{ route('auth.save-bank-account') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="John 117">
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Registrar cuenta bancaria</button>
            </div>
        </div>
    </form>
</div>

{{-- Identificación oficial con fotografía. Puede ser la credencial para votar o la licencia para conducir, pero es importante que esté vigente.
Comprobante de domicilio. Puedes usar cualquier tipo de recibo como el del teléfono, el agua o la luz.
Monto mínimo. Dependiendo del tipo de cuenta es posible que te pidan un monto mínimo de apertura.
Un número de teléfono móvil. Ya que es la forma más sencilla de localizarte, es importante que puedas proporcionar un número activo de teléfono móvil.
Tener correo electrónico. De la misma manera que con el número de teléfono móvil, se usa como información de contacto, la única diferencia es que se pueden enviar los estados de cuenta por correo.
Firmar el contrato. Una vez que te presentes en la sucursal bancaria donde se quedará la información de tu cuenta, deberás firmar el contrato de apertura en el que se explican todo tipo de términos y condiciones del servicio. --}}

@endsection
