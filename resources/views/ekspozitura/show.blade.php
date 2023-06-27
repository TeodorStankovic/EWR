@extends('ekspozitura.layout')
@section('content')
<div class="card">
  <div class="card-header"><h3>Detalji ekspoziture</h3></div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Naziv : {{ $ekspozitura->naziv }}</h5>
        <h5 class="card-text">Mesto : {{ $ekspozitura->mesto }}</h5>
        <h5 class="card-text">Sef : {{ $ekspozitura->sef }}</h5></>
        <h5 class="card-text">Kapacitet : {{ $ekspozitura->kapacitet }}</h5></>
        <br>
        <a href="http://127.0.0.1:8000/ekspozitura" class="btn btn-info">Nazad</a>
        <a href="{{ url('/ekspozitura/' . $ekspozitura->id_ex . '/edit') }}" title="Edit Ekspoziture"><button class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Izmeni</button></a>


  </div>
      
    </hr>
  
  </div>
</div>
@stop