
@extends('najave.layout')
@section('content')
<div class="card">
  <div class="card-header"><h3>Dodavanje najave</h3></div>
  <div class="card-body">
      
      <form action="{{ url('najave') }}" method="post">
        {!! csrf_field() !!}
        <label>Datum postavljanja najave</label></br>
        <input type="date" name="dat_najave" id="dat_najave" class="form-control"></br>
        <label>Tip najave</label></br>
        <select name="tip_najave" id="tip_najave" class="form-control">
          <option value="Ispomoc">Ispomoc</option>
          <option value="Odmor">Odmor</option>
        </select></br>
        <label>Datum najave od</label></br>
        <input type="date" name="dat_od" id="dat_od" class="form-control"></br>
        <label>Datum najave do</label></br>
        <input type="date" name="dat_do" id="dat_do" class="form-control"></br>



        <input type="submit" value="Sacuvaj" class="btn btn-success">
        <a href="http://127.0.0.1:8000/najave" class="btn btn-info">Nazad</a>

    </form>
  
  </div>
</div>
@stop