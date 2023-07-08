{{-- 
@extends('najave.layout')
@section('content')
<div class="card">
  <div class="card-header"><h3>Dodavanje najave</h3></div>
  <div class="card-body">
      
      <form action="{{ url('najave') }}" method="post">
        {!! csrf_field() !!}
        <label>Datum postavljanja najave</label></br>
        <input type="date" name="dat_najave" id="dat_najave" class="form-control"></br>
        <label>Tip najave</label></br>
        <select name="tip_najave" id="tip_najave" class="form-control">
          <option value="Ispomoc">Ispomoc</option>
          <option value="Odmor">Odmor</option>
        </select></br>
        <label>Datum najave od</label></br>
        <input type="date" name="dat_od" id="dat_od" class="form-control"></br>
        <label>Datum najave do</label></br>
        <input type="date" name="dat_do" id="dat_do" class="form-control"></br>



        <input type="submit" value="Sacuvaj" class="btn btn-success">
        <a href="http://127.0.0.1:8000/najave" class="btn btn-info">Nazad</a>

    </form>
  
  </div>
</div>
@stop --}}

@extends('najave.layout')
@section('content')
<link rel="stylesheet" href="../css/styleAdd.css"
    <div class="box">
        <form action="{{ url('najave') }}" method="post" autocomplete="off">
          {!! csrf_field() !!}
            <h2 class="naslov">Dodaj najavu</h2>

            <div class="inputBoxActive">
                <input type="date"  name="dat_najave" id="dat_najave" required="required">
                <span>Datum podnosenja najave</span>
                <i></i>
            </div>
            <div class="inputBox">
              <select  class="inputField" name="tip_najave" id="tip_najave" value="tip_najave ">
                <option value="Ispomoc">Ispomoc</option>
                <option value="Odmor">Odmor</option>
              </select>
            </div>
            <div class="inputBoxActive">
              <input type="date"  name="dat_od" id="dat_od" required="required">
              <span>Datum najave od</span>
              <i></i>
          </div>
          <div class="inputBoxActive">
            <input type="date"  name="dat_do" id="dat_do" required="required">
            <span>Datum najave do</span>
            <i></i>
        </div>
          <a style="text-decoration:none;">
               <input type="submit" value="Dodaj najavu">
          </a>
          <a style="text-decoration:none;" href="http://127.0.0.1:8000/najave" >
            <input type="button" value="Nazad"></a>
        </form>

    </div>
</body>
</html>
@endsection