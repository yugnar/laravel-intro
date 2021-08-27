@extends('layouts.main') 

@section('content')
  <div class="row">
    <div class="col-12">
      <h1>Crear movimiento en cuenta de banco</h1>
      <form action="{{route('movements.create', $account)}}" method="POST">
        @csrf
        <select name="mnt_type" id="mnt_type">
          <option value="income">income</option>
          <option value="expense">expense</option>
        </select>
        <input type="text" name="desc" id="desc" placeholder="Descripcion">
        <input type="number" name="amount" id="amount" placeholder="cantidad">
        <button type="submit">Crear movimiento</button>
      </form>
    </div>
  </div>
@endsection
