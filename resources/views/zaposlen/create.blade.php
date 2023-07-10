@extends('zaposlen.layout')
@section('content')
<link rel="stylesheet" href="../css/styleAdd.css"
    <div class="box">
        <form class="forma" action="{{ url('zaposlen') }}" method="post" autocomplete="off">
          {!! csrf_field() !!}
            <h2 class="naslov">Dodaj zaposlenog</h2>

            <div class="inputBox">
                <input type="text"  name="ime" id="ime" required="required">
                <span>Ime</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text"  name="prezime" id="prezime" required="required">
                <span>Prezime</span>
                <i></i>
            </div>
            <div class="inputBox">
              <select  class="inputField" name="status" id="status" value="status ">
                <option value="Aktivan">Aktivan</option>
                <option value="Ispomoc">Ispomoc</option>
                <option value="Odmor">Odmor</option>
              </select>
            </div>
            <div class="inputBox">
              <select  class="inputField" name="naziv" id="naziv" value="naziv">
                @foreach ($ekspoziture as $item )
                  <option value="{{ $item->id_ex }}">{{ $item->naziv }}</option>
                @endforeach
              </select>
              <br>
              <br>
              <select  class="inputField" name="naziv_posla" id="naziv_posla" value="naziv_posla">
                @foreach ($poslovi as $item )
                  <option value="{{ $item->id_posla }}">{{ $item->naziv_posla}}</option>
                @endforeach
              </select>
              <br>
              <br>
              <select  class="inputField" name="tip_smene" id="tip_smene" value="tip_smene">
                @foreach ($smene as $item )
                  <option value="{{ $item->id_smene }}">{{ $item->tip_smene}}</option>
                @endforeach
              </select>
              <br>
              <br>
              <select  class="inputField" name="naziv_uloge" id="naziv_uloge" value="naziv_uloge">
                @foreach ($uloga as $item )
                  <option value="{{ $item->id_uloge}}">{{ $item->naziv_uloge}}</option>
                @endforeach
              </select>


            </div>
            <div class="inputBox">
              <input type="text"  name="username" id="username" required="required">
              <span>Username</span>
              <i></i>
          </div>
          <div class="inputBox">
            <input type="text"  name="password" id="password" required="required">
            <span>Password</span>
            <i></i>
        </div>
          <a style="text-decoration:none;">
               <input type="submit" value="Dodaj zaposlenog">
          </a>
          <a style="text-decoration:none;" href="http://127.0.0.1:8000/zaposlen" >
            <input type="button" value="Nazad"></a>
        </form>

    </div>
</body>
</html>
@endsection