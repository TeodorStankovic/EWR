@extends('uloga.layout')
@section('content')
<div class="card">
  <div class="card-header"><h3>Detalji poslova</h3></div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Naziv : {{ $uloga->naziv_uloge }}</h5>
          <br>
        <a href="http://127.0.0.1:8000/uloga" class="btn btn-info">Nazad</a>
        <a href="{{ url('/uloga/' . $uloga->id_uloge . '/edit') }}" title="Edit Uloga"><button class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Izmeni</button></a>

        

  </div>
      
    </hr>
  
  </div>
</div>
@stop