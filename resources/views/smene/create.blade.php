
@extends('smene.layout')
@section('content')
<div class="card">
  <div class="card-header"><h3>Dodavanje smena</h3></div>
  <div class="card-body">
      
      <form action="{{ url('smene') }}" method="post">
        {!! csrf_field() !!}
        <label>Tip smene</label></br>
        <input type="text" name="tip_smene" id="tip_smene" class="form-control"></br>
        <label>Trajanje smene od</label></br>
        <input type="time" name="traj_od" id="traj_od" class="form-control"></br>
        <label>Trajanje smene do</label></br>
        <input type="time" name="traj_do" id="traj_do" class="form-control"></br>



        <input type="submit" value="Sacuvaj" class="btn btn-success">
        <a href="http://127.0.0.1:8000/smene" class="btn btn-info">Nazad</a>

    </form>
  
  </div>
</div>
@stop