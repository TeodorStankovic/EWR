{{-- @extends('poslovi.layout')
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
@stop --}}

@extends('poslovi.layout')
@section('content')
<link rel="stylesheet" href="../css/style.css">
<div class="details">
  <div class="info">
      <div class="cardHeader">
          <h2>Lista poslovi</h2>
          <a href="{{ url('/poslovi') }}" class="btn">Nazad</a>
      </div>
      <table>
          <thead>
              <tr>
              <td>Naziv posla</td>
              <td>Opcije</td>
              </tr>
          </thead>
          <tbody>
              @foreach($poslovi as $item)
              <tr>
                
                  <td>{{ $item->naziv_posla }}</td>
                  <td>
                    <a href="{{ url('/poslovi/' . $item->id_posla . '/edit') }}" title="Edit poslovi"><button class="edit "> Izmeni</button></a>
                    <form method="POST" action="{{ url('/poslovi' . '/' . $item->id_posla) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="delete " title="Delete poslovi" onclick="return confirm(&quot;Da li ste sigurni da zelite da obrisete posao?&quot;)" aria-hidden="true" > Obrisi</button>
                    </form></td>
              </tr>
              @endforeach
              </tbody>
      </table>
  </div>
</div>
@endsection