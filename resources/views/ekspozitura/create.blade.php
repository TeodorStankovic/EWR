@extends('ekspozitura.layout')
@section('content')
<link rel="stylesheet" href="../css/styleAdd.css"
    <div class="box">
        <form action="{{ url('ekspozitura') }}" method="post" autocomplete="off">
          {!! csrf_field() !!}
            <h2 class="naslov">Dodaj ekspozituru</h2>

            <div class="inputBox">
                <input type="text"  name="naziv" id="naziv" required="required">
                <span>Naziv ekspoziture</span>
                <i></i>
            </div>
            <div class="inputBox">
              <input type="text"  name="mesto" id="mesto" required="required">
              <span>Mesto ekspoziture</span>
              <i></i>
          </div>
          <div class="inputBox">
            <input type="text"  name="sef" id="sef" required="required">
            <span>Direktor ekspoziture</span>
            <i></i>
        </div>
        <div class="inputBox">
          <input type="text"  name="kapacitet" id="kapacitet" required="required">
          <span>Kapacitet ekspoziture</span>
          <i></i>
      </div>
          <a style="text-decoration:none;">
               <input type="submit" value="Dodaj ekspozituru">
          </a>
          <a style="text-decoration:none;" href="http://127.0.0.1:8000/ekspozitura" >
            <input type="button" value="Nazad"></a>
        </form>

    </div>
</body>
</html>
@endsection