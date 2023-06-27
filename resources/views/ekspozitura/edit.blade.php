@extends('ekspozitura.layout')
@section('content')
<div class="card">
  <div class="card-header"><h3>Izmene ekspoziture</h3></div>
  <div class="card-body">
      
      <form action="{{ url('ekspozitura/' .$ekspozitura->id_ex) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id_ex" id="id_ex" value="{{$ekspozitura->id_ex}}" id="id_ex" />

        <label>Naziv</label></br>
        <input type="text" name="naziv" id="naziv" value="{{$ekspozitura->naziv}}" class="form-control"></br>
        <label>Mesto</label></br>
        <input type="text" name="mesto" id="mesto" value="{{$ekspozitura->mesto}}" class="form-control"></br>
        <label>Sef</label></br>
        <input type="text" name="sef" id="sef" value="{{$ekspozitura->sef}}" class="form-control"></br>
        <label>Kapacitet</label></br>
        <input type="text" name="kapacitet" id="kapacitet" value="{{$ekspozitura->kapacitet}}" class="form-control"></br>

        
        <input type="submit" value="Sacuvaj izmene" class="btn btn-success">
        <a href="http://127.0.0.1:8000/ekspozitura" class="btn btn-info">Nazad</a>

    </form>
  
  </div>
</div>
@stop