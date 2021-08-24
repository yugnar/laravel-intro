@extends('layouts.main')

@section('content')

<!-- <body class="c-app flex-row align-items-center">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card mx-4">
<div class="card-body p-4">
<h1>Register</h1>
<p class="text-muted">Create your account</p>
<div class="input-group mb-3">
<div class="input-group-prepend"><span class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
</svg></span></div>
<input class="form-control" type="text" placeholder="Email">
</div>
<div class="input-group mb-3">
<div class="input-group-prepend"><span class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
</svg></span></div>
<input class="form-control" type="password" placeholder="Password">
</div>
<div class="input-group mb-4">
<div class="input-group-prepend"><span class="input-group-text">
<svg class="c-icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
</svg></span></div>
<input class="form-control" type="password" placeholder="Repeat password">
</div>
<button class="btn btn-block btn-success" type="button">Create Account</button>
</div>
</div>
</div>
</div>
</div>
</div>

<script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>

</body> -->

<div class="row">
    <div class="col-12">
        <h1>Registro</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('auth.save-user') }}" method="POST">
        @csrf    
        <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="John Doe">
            </div>
        <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmar contraseña</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection