{{-- @extends('ekspozitura.layout')
@section('content')
<div class="card">
  <div class="card-header"><h3>Dodavanje ekspoziture</h3></div>
  <div class="card-body">
      
      <form action="{{ url('ekspozitura') }}" method="post">
        {!! csrf_field() !!}
        <label>Naziv</label></br>
        <input type="text" name="naziv" id="naziv" class="form-control"></br>
        <label>Mesto</label></br>
        <input type="text" name="mesto" id="mesto" class="form-control"></br>
        <label>Sef</label></br>
        <input type="text" name="sef" id="sef" class="form-control"></br>
        <label>Kapacitet</label></br>
        <input type="text" name="kapacitet" id="kapacitet" class="form-control"></br>

        <input type="submit" value="Sacuvaj" class="btn btn-success">
        <a href="http://127.0.0.1:8000/ekspozitura" class="btn btn-info">Nazad</a>

    </form>
  
  </div>
</div>
@stop
 --}}

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