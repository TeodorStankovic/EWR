{{-- @extends('ekspozitura.layout')
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
 --}}

@extends('ekspozitura.layout')
@section('content')
<link rel="stylesheet" href="../css/style.css">
<div class="details">
  <div class="info">
      <div class="cardHeader">
          <h2>Lista ekspozitura</h2>
          <a href="{{ url('/ekspozitura') }}" class="btn">Nazad</a>
      </div>
      <table>
          <thead>
              <tr>
                <td>Naziv Ekspoziture</td>
                <td>Lokacija</td>
                <td>Sef</td>
                <td>Kapacitet</td>
                <td>Opcije</td>
              </tr>
          </thead>
          <tbody>
              @foreach($ekspozitura as $item)
              <tr>
                
                <td>{{ $item->naziv }}</td>
                <td>{{ $item->mesto }}</td>
                <td>{{ $item->sef }}</td>
                <td>{{ $item->kapacitet }}</td>
                  <td>
                    <a href="{{ url('/ekspozitura/' . $item->id_ex . '/edit') }}" title="Edit ekspozitura"><button class="edit "> Izmeni</button></a>
                    <form method="POST" action="{{ url('/ekspozitura' . '/' . $item->id_ex) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="delete " title="Delete ekspozitura" onclick="return confirm(&quot;Da li ste sigurni da zelite da obrisete ekspozituru?&quot;)" aria-hidden="true"> Obrisi</button>
                    </form></td>
              </tr>
              @endforeach
              </tbody>
      </table>
  </div>
</div>
@endsection