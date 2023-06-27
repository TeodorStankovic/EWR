@extends('uloga.layout')
@section('content')
<div class="card">
  <div class="card-header"><h3>Dodavanje Uloga</h3></div>
  <div class="card-body">
      
      <form action="{{ url('uloga') }}" method="post">
        {!! csrf_field() !!}
        <label>Naziv</label></br>
        <input type="text" name="naziv_uloge" id="naziv_uloge" class="form-control"></br>

        <input type="submit" value="Sacuvaj" class="btn btn-success">
        <a href="http://127.0.0.1:8000/uloga" class="btn btn-info">Nazad</a>

    </form>
  
  </div>
</div>
@stop