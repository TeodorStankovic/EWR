@extends('najave.layout')
@section('content')
<div class="card">
  <div class="card-header"><h3>Izmene najava</h3></div>
  <div class="card-body">
      
      <form action="{{ url('najave/' .$najave->id_najave) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id_najave" id="id_najave" value="{{$najave->id_najave}}" id="id_najave" />

        <label>Tip najave</label></br>
        <select name="tip_najave" id="tip_najave" value="{{$najave->tip_najave}}" class="form-control">
          <option value="Ispomoc">Ispomoc</option>
          <option value="Odmor">Odmor</option>
        </select></br>


        <label>Trajanje najave od</label></br>
        <input type="date" name="dat_od" id="dat_od" value="{{$najave->dat_od}}" class="form-control"></br>

        <label>Trajanje najave do</label></br>
        <input type="date" name="dat_do" id="dat_do" value="{{$najave->dat_do}}" class="form-control"></br>


        
        <input type="submit" value="Sacuvaj izmene" class="btn btn-success">
        <a href="http://127.0.0.1:8000/najave" class="btn btn-info">Nazad</a>

    </form>
  
  </div>
</div>
@stop