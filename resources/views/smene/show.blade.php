@extends('smene.layout')
@section('content')
<link rel="stylesheet" href="app.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<div class="card">
  <div class="card-header"><h3>Detalji Smena</h3></div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Tip smene : {{ $smene->tip_smene }}</h5>
        <h5 class="card-title">Trajanje smene <br> od {{ $smene->traj_od }} <br>do {{ $smene->traj_do }}</h5>
          <br>

        <a href="http://127.0.0.1:8000/smene" class="btn btn-info">Nazad</a>
        <a href="{{ url('/smene/' . $smene->id_smene . '/edit') }}" title="Edit smene"><button class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Izmeni</button></a>

  </div>
      
    </hr>
  
  </div>
</div>
@stop