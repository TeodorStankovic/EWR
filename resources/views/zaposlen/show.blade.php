@extends('zaposlen.layout')
@section('content')
<link rel="stylesheet" href="../css/style.css">
<div class="details">
  <div class="info">
      <div class="cardHeader">
          <h2>Zaposleni</h2>
          <a href="{{ url('/zaposlen') }}" class="btn">Nazad</a>
      </div>
      <table>
          <thead>
              <tr>
              <td>Ime</td>
              <td>Prezime</td>
              <td>Username</td>
              <td>Sifra</td>
              <td>Status</td>
              <td>Opcije</td>
              </tr>
          </thead>
          <tbody>
              @foreach($zaposlen as $item)
              <tr>
                  <td>{{ $item->ime }}</td>
                  <td>{{ $item->prezime }}</td>
                  <td>{{ $item->username }}</td>
                  <td>{{ $item->password }}</td>
                  <td>{{ $item->status }}</td>
                  <td>
                    <a href="{{ url('/zaposlen/' . $item->id . '/edit') }}" title="Edit Zaposlen"><button class="edit "> Izmeni</button></a>
                    <form method="POST" action="{{ url('/zaposlen' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="delete " title="Delete Zaposlen" onclick="return confirm(&quot;Da li ste sigurni da zelite da obrisete zaposlenog?&quot;)" aria-hidden="true"> Obrisi</button>
                    </form></td>
              </tr>
              @endforeach
              </tbody>
      </table>
  </div>

</div>
@endsection
