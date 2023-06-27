@extends('poslovi.layout')
@section('content')
<div class="card">
  <div class="card-header"><h3>Izmene poslova</h3></div>
  <div class="card-body">
      
      <form action="{{ url('poslovi/' .$poslovi->id_posla) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id_posla" id="id_posla" value="{{$poslovi->id_posla}}" id="id_posla" />

        <label>Naziv</label></br>
        <input type="text" name="naziv_posla" id="naziv_posla" value="{{$poslovi->naziv_posla}}" class="form-control"></br>


        
        <input type="submit" value="Sacuvaj izmene" class="btn btn-success">
        <a href="http://127.0.0.1:8000/poslovi" class="btn btn-info">Nazad</a>

    </form>
  
  </div>
</div>
@stop