@extends('smene.layout')
@section('content')
<div class="card">
  <div class="card-header"><h3>Izmene Smena</h3></div>
  <div class="card-body">
      
      <form action="{{ url('smene/' .$smene->id_smene) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id_smene" id="id_smene" value="{{$smene->id_smene}}" id="id_smene" />

        <label>Tip smene</label></br>
        <input type="text" name="tip_smene" id="tip_smene" value="{{$smene->tip_smene}}" class="form-control"></br>

        <label>Trajanje smene od</label></br>
        <input type="time" name="traj_od" id="traj_od" value="{{$smene->traj_od}}" class="form-control"></br>

        <label>Trajanje smene do</label></br>
        <input type="time" name="traj_do" id="traj_do" value="{{$smene->traj_do}}" class="form-control"></br>


        
        <input type="submit" value="Sacuvaj izmene" class="btn btn-success">
        <a href="http://127.0.0.1:8000/smene" class="btn btn-info">Nazad</a>

    </form>
  
  </div>
</div>
@stop