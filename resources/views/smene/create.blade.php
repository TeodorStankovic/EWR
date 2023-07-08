@extends('smene.layout')
@section('content')
<link rel="stylesheet" href="../css/styleAdd.css"
    <div class="box">
        <form action="{{ url('smene') }}" method="post" autocomplete="off">
          {!! csrf_field() !!}
            <h2 class="naslov">Dodaj smenu</h2>

            <div class="inputBox">
                <input type="text"  name="tip_smene" id="tip_smene" required="required">
                <span>Tip smene</span>
                <i></i>
            </div>
            <div class="inputBoxActive">
              <input type="time"  name="traj_od" id="traj_od" required="required">
              <span>Pocetak smene</span>
              <i></i>
          </div>
          <div class="inputBoxActive">
            <input type="time"  name="traj_do" id="traj_do" required="required">
            <span>Zavrsetak smene</span>
            <i></i>
        </div>
          <a style="text-decoration:none;">
               <input type="submit" value="Dodaj smenu">
          </a>
          <a style="text-decoration:none;" href="http://127.0.0.1:8000/smene" >
            <input type="button" value="Nazad"></a>
        </form>

    </div>
</body>
</html>
@endsection