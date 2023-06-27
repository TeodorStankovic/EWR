@extends('zaposlen.layout')
@section('content')
<div class="card">
  <div class="card-header"><h3>Dodavanje zaposlenog</h3></div>
  <div class="card-body">
      
      <form action="{{ url('zaposlen') }}" method="post">
        {!! csrf_field() !!}
        <label>Ime</label></br>
        <input type="text" name="ime" id="ime" class="form-control"></br>

        <label>Prezime</label></br>
        <input type="text" name="prezime" id="prezime" class="form-control"></br>

        <label>Status</label></br>
        <select name="status" id="status" class="form-control">
          <option value="Aktivan">Aktivan</option>
          <option value="Ispomoc">Ispomoc</option>
          <option value="Odmor">Odmor</option>
        </select></br>

        <label>Username</label></br>
        <input type="text" name="username" id="username" class="form-control"></br>

        <label>Password</label></br>
        <input type="text" name="password" id="password" class="form-control"></br>

        <input type="submit" value="Sacuvaj" class="btn btn-success">
        <a href="http://127.0.0.1:8000/zaposlen" class="btn btn-info">Nazad</a>

    </form>
  
  </div>
</div>
@stop