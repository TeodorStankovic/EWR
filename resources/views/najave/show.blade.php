@extends('najave.layout')
@section('content')
<link rel="stylesheet" href="../css/style.css">
<div class="details">
  <div class="info">
      <div class="cardHeader">
          <h2>Najave</h2>
          <a href="{{ url('/najave') }}" class="btn">Nazad</a>
      </div>
      <table>
          <thead>
              <tr>
              <td>Id</td>
              <td>Datum podnosenja najave</td>
              <td>Tip najave</td>
              <td>Trajanje najave od</td>
              <td>Trajanje najave do</td>
              </tr>
          </thead>
          <tbody>
              @foreach($najave as $item)
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->created_at }}</td>
                  <td>{{ $item->tip_najave }}</td>
                  <td>{{ $item->dat_od }}</td>
                  <td>{{ $item->dat_do }}</td>
                  <td>
                    <a href="{{ url('/najave/' . $item->id_najave . '/edit') }}" title="Edit najave"><button class="edit "> Izmeni</button></a>
                    <form method="POST" action="{{ url('/najave' . '/' . $item->id_najave) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="delete " title="Delete najave" onclick="return confirm(&quot;Da li ste sigurni da zelite da obrisete najavu?&quot;)" aria-hidden="true"> Obrisi</button>
                    </form></td>
              </tr>
              @endforeach
              </tbody>
      </table>
  </div>
</div>
@endsection