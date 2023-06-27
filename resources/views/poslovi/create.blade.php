@extends('poslovi.layout')
@section('content')
<div class="card">
  <div class="card-header"><h3>Dodavanje poslova</h3></div>
  <div class="card-body">
      
      <form action="{{ url('poslovi') }}" method="post">
        {!! csrf_field() !!}
        <label>Naziv</label></br>
        <input type="text" name="naziv_posla" id="naziv_posla" class="form-control"></br>

        <input type="submit" value="Sacuvaj" class="btn btn-success">
        <a href="http://127.0.0.1:8000/poslovi" class="btn btn-info">Nazad</a>

    </form>
  
  </div>
</div>
@stop