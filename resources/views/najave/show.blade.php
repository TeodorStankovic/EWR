@extends('najave.layout')
@section('content')
<div class="card">
  <div class="card-header"><h3>Detalji Smena</h3></div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Datum podnosenja najave : <br>{{ $najave->created_at }}</h5>
        <h5 class="card-title">Tip najave : {{ $najave->tip_najave }}</h5>
        <h5 class="card-title">Trajanje najave <br>od {{ $najave->dat_od }} <br>do {{ $najave->dat_do }}</h5>

          <br>
        <a href="http://127.0.0.1:8000/najave" class="btn btn-info">Nazad</a>
        <a href="{{ url('/najave/' . $najave->id_najave . '/edit') }}" title="Edit Najava"><button class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Izmeni</button></a>


  </div>
      
    </hr>
  
  </div>
</div>
@stop