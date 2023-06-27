@extends('uloga.layout')
@section('content')
<div class="card">
  <div class="card-header"><h3>Izmene uloga</h3></div>
  <div class="card-body">
      
      <form action="{{ url('uloga/' .$uloga->id_uloge) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id_uloge" id="id_uloge" value="{{$uloga->id_uloge}}" id="id_uloge" />

        <label>Naziv</label></br>
        <input type="text" name="naziv_uloge" id="naziv_uloge" value="{{$uloga->naziv_uloge}}" class="form-control"></br>


        
        <input type="submit" value="Sacuvaj izmene" class="btn btn-success">
        <a href="http://127.0.0.1:8000/uloga" class="btn btn-info">Nazad</a>

    </form>
  
  </div>
</div>
@stop