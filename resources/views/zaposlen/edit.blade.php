@extends('zaposlen.layout')
@section('content')
<div class="card">
  <div class="card-header"><h3>Izmene zaposlenog</h3></div>
  <div class="card-body">
      
      <form action="{{ url('zaposlen/' .$zaposlen->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$zaposlen->id}}" id="id" />

        <label>Ime</label></br>
        <input type="text" name="ime" id="ime" value="{{$zaposlen->ime}}" class="form-control"></br>
        <label>Prezime</label></br>
        <input type="text" name="prezime" id="prezime" value="{{$zaposlen->prezime}}" class="form-control"></br>

        <label>Status</label></br>
        <select name="status" id="status" value="{{$zaposlen->status}}" class="form-control">
          <option value="Aktivan">Aktivan</option>
          <option value="Ispomoc">Ispomoc</option>
          <option value="Odmor">Odmor</option>
        </select></br>

        <label>Username</label></br>
        <input type="text" name="username" id="username" value="{{$zaposlen->username}}" class="form-control"></br>
        <label>Password</label></br>
        <input type="text" name="password" id="password" value="{{$zaposlen->password}}" class="form-control"></br>

        <input type="submit" value="Sacuvaj izmene" class="btn btn-success">
        <a href="http://127.0.0.1:8000/zaposlen" class="btn btn-info">Nazad</a>

    </form>
  
  </div>
</div>
@stop