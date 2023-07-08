@extends('uloga.layout')
@section('content')
<link rel="stylesheet" href="../../css/styleAdd.css"
    <div class="box">
      <form action="{{ url('uloga/' .$uloga->id_uloge) }}" method="post" autocomplete="off">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id_uloge" id="id_uloge" value="{{$uloga->id_uloge}}" id="id" />

            <h2 class="naslov">Izmeni uloge</h2>

            <div class="inputBox">
                <input type="text"  name="naziv_uloge" id="naziv_uloge" value="{{$uloga->naziv_uloge}}" required="required">
                <span>Naziv uloge</span>
                <i></i>
            </div>
          <a style="text-decoration:none;">
               <input type="submit" value="Sacuvaj izmene">
          </a>
          <a style="text-decoration:none;" href="http://127.0.0.1:8000/uloga/show" >
            <input type="button" value="Nazad"></a>
        </form>

    </div>
</body>
</html>
@endsection