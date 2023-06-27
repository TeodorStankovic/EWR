@extends('ekspozitura.layout')
@section('content')
<div class="card">
  <div class="card-header"><h3>Dodavanje ekspoziture</h3></div>
  <div class="card-body">
      
      <form action="{{ url('ekspozitura') }}" method="post">
        {!! csrf_field() !!}
        <label>Naziv</label></br>
        <input type="text" name="naziv" id="naziv" class="form-control"></br>
        <label>Mesto</label></br>
        <input type="text" name="mesto" id="mesto" class="form-control"></br>
        <label>Sef</label></br>
        <input type="text" name="sef" id="sef" class="form-control"></br>
        <label>Kapacitet</label></br>
        <input type="text" name="kapacitet" id="kapacitet" class="form-control"></br>

        <input type="submit" value="Sacuvaj" class="btn btn-success">
        <a href="http://127.0.0.1:8000/ekspozitura" class="btn btn-info">Nazad</a>

    </form>
  
  </div>
</div>
@stop