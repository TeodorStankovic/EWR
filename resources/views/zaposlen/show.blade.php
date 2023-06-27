@extends('zaposlen.layout')
@section('content')
<div class="card">
  <div class="card-header"><h3>Detalji zaposlenog</h3></div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Ime : {{ $zaposlen->ime }}</h5>
        <h5 class="card-text">Prezime : {{ $zaposlen->prezime }}</h5>
        <h5 class="card-text">Status : {{ $zaposlen->status }}</h5></>
        <h5 class="card-text">Korisnicko ime : {{ $zaposlen->username }}</h5></>
        <h5 class="card-text">Sifra : {{ $zaposlen->password }}</h5></>
        <br>
        <a href="http://127.0.0.1:8000/zaposlen" class="btn btn-info">Nazad</a>
        <a href="{{ url('/zaposlen/' . $zaposlen->id . '/edit') }}" title="Edit Zaposlen"><button class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Izmeni</button></a>

  </div>
      
    </hr>
  
  </div>
</div>
@stop