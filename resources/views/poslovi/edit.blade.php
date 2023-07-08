@extends('poslovi.layout')
@section('content')
<link rel="stylesheet" href="../../css/styleAdd.css"
    <div class="box">
      <form action="{{ url('poslovi/' .$poslovi->id_posla) }}" method="post" autocomplete="off">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id_posla" id="id_posla" value="{{$poslovi->id_posla}}" id="id" />

            <h2 class="naslov">Izmeni posao</h2>

            <div class="inputBox">
                <input type="text"  name="naziv_posla" id="naziv_posla" value="{{$poslovi->naziv_posla}}" required="required">
                <span>Naziv posla</span>
                <i></i>
            </div>
          <a style="text-decoration:none;">
               <input type="submit" value="Sacuvaj izmene">
          </a>
          <a style="text-decoration:none;" href="http://127.0.0.1:8000/poslovi/show" >
            <input type="button" value="Nazad"></a>
        </form>

    </div>
</body>
</html>
@endsection