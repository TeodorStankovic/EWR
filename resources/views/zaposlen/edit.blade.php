
@extends('zaposlen.layout')
@section('content')
<link rel="stylesheet" href="../../css/styleAdd.css"
    <div class="box">
      <form action="{{ url('zaposlen/' .$zaposlen->id) }}" method="post" autocomplete="off">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$zaposlen->id}}" id="id" />

            <h2 class="naslov">Izmeni zaposlenog</h2>

            <div class="inputBox">
                <input type="text"  name="ime" id="ime" value="{{$zaposlen->ime}}" required="required">
                <span>Ime</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text"  name="prezime" id="prezime" value="{{$zaposlen->prezime}}" required="required">
                <span>Prezime</span>
                <i></i>
            </div>
            <div class="inputBox">
              <select  class="inputField" name="status" id="status" value="{{$zaposlen->status}}" >
                <option value="Aktivan">Aktivan</option>
                <option value="Ispomoc">Ispomoc</option>
                <option value="Odmor">Odmor</option>
              </select>
            </div>
            <div class="inputBox">
              <input type="text"  name="username" id="username" value="{{$zaposlen->username}}" required="required">
              <span>Username</span>
              <i></i>
          </div>
          <div class="inputBox">
            <input type="text"  name="password" id="password" value="{{$zaposlen->password}}" required="required">
            <span>Password</span>
            <i></i>
        </div>
          <a style="text-decoration:none;">
               <input type="submit" value="Sacuvaj izmene">
          </a>
          <a style="text-decoration:none;" href="http://127.0.0.1:8000/zaposlen/show" >
            <input type="button" value="Nazad"></a>
        </form>

    </div>
</body>
</html>
@endsection