@extends('poslovi.layout')
@section('content')
<div class="card">
  <div class="card-header"><h3>Detalji poslova</h3></div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Naziv : {{ $poslovi->naziv_posla }}</h5>
        <br>  
        <a href="http://127.0.0.1:8000/poslovi" class="btn btn-info">Nazad</a>
        <a href="{{ url('/poslovi/' . $poslovi->id_posla . '/edit') }}" title="Edit Poslovi"><button class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Izmeni</button></a>


  </div>
      
    </hr>
  
  </div>
</div>
@stop