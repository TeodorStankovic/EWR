@extends('ekspozitura.layout')
@section('content')
<link rel="stylesheet" href="../../css/styleAdd.css"
    <div class="box">
      <form action="{{ url('ekspozitura/' .$ekspozitura->id_ex) }}" method="post" autocomplete="off">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id_uloge" id="id_uloge" value="{{$ekspozitura->id_ex}}" id="id" />

            <h2 class="naslov">Izmeni ekspozituru</h2>

            <div class="inputBox">
                <input type="text"  name="naziv" id="naziv" value="{{$ekspozitura->naziv}}" required="required">
                <span>Naziv ekspoziture</span>
                <i></i>
            </div>
            <div class="inputBox">
              <input type="text"  name="mesto" id="mesto" value="{{$ekspozitura->mesto}}" required="required">
              <span>Mesto ekspoziture</span>
              <i></i>
          </div>
          <div class="inputBox">
            <input type="text"  name="sef" id="sef" value="{{$ekspozitura->sef}}" required="required">
            <span>Direktor ekspoziture</span>
            <i></i>
        </div>
        <div class="inputBox">
          <input type="text"  name="kapacitet" id="kapacitet" value="{{$ekspozitura->kapacitet}}" required="required">
          <span>Kapacitet ekspoziture</span>
          <i></i>
      </div>
          <a style="text-decoration:none;">
               <input type="submit" value="Sacuvaj izmene">
          </a>
          <a style="text-decoration:none;" href="http://127.0.0.1:8000/ekspozitura/show" >
            <input type="button" value="Nazad"></a>
        </form>

    </div>
</body>
</html>
@endsection