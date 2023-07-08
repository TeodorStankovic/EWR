@extends('uloga.layout')
@section('content')
<link rel="stylesheet" href="../css/style.css">
<div class="details">
  <div class="info">
      <div class="cardHeader">
          <h2>Lista uloga</h2>
          <a href="{{ url('/uloga') }}" class="btn">Nazad</a>
      </div>
      <table>
          <thead>
              <tr>
              <td>Ime</td>
              <td>Opcije</td>
              </tr>
          </thead>
          <tbody>
              @foreach($uloga as $item)
              <tr>
                
                  <td>{{ $item->naziv_uloge }}</td>
                  <td>
                    <a href="{{ url('/uloga/' . $item->id_uloge . '/edit') }}" title="Edit uloga"><button class="edit "> Izmeni</button></a>
                    <form method="POST" action="{{ url('/uloga' . '/' . $item->id_uloge) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="delete " title="Delete uloga" onclick="return confirm(&quot;Da li ste sigurni da zelite da obrisete ulogu?&quot;)" aria-hidden="true"> Obrisi</button>
                    </form></td>
              </tr>
              @endforeach
              </tbody>
      </table>
  </div>
</div>
@endsection