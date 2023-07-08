@extends('smene.layout')
@section('content')
<link rel="stylesheet" href="../css/style.css">
<div class="details">
  <div class="info">
      <div class="cardHeader">
          <h2>Lista smene</h2>
          <a href="{{ url('/smene') }}" class="btn">Nazad</a>
      </div>
      <table>
          <thead>
              <tr>
              <td>Tip Smene</td>
              <td>Pocetak smene</td>
              <td>Zavrsetak smene</td>
              </tr>
          </thead>
          <tbody>
              @foreach($smene as $item)
              <tr>
                
                  <td>{{ $item->tip_smene }}</td>
                  <td>{{ $item->traj_od }}</td>
                  <td>{{ $item->traj_do }}</td>

                  <td>
                    <a href="{{ url('/smene/' . $item->id_smene . '/edit') }}" title="Edit smene"><button class="edit "> Izmeni</button></a>
                    <form method="POST" action="{{ url('/smene' . '/' . $item->id_smene) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="delete " title="Delete smene" onclick="return confirm(&quot;Da li ste sigurni da zelite da obrisete smenu?&quot;)" aria-hidden="true"> Obrisi</button>
                    </form></td>
              </tr>
              @endforeach
              </tbody>
      </table>
  </div>
</div>
@endsection