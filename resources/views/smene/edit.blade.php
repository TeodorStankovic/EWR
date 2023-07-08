@extends('smene.layout')
@section('content')
<link rel="stylesheet" href="../../css/styleAdd.css"
    <div class="box">
      <form action="{{ url('smene/' .$smene->id_uloge) }}" method="post" autocomplete="off">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id_smene" id="id_smene" value="{{$smene->id_smene}}" id="id" />

            <h2 class="naslov">Izmena smene</h2>

            <div class="inputBox">
                <input type="text"  name="tip_smene" id="tip_smene" value="{{$smene->tip_smene}}" required="required">
                <span>Naziv uloge</span>
                <i></i>
            </div>
            
            <div class="inputBox">
              <input type="time"  name="traj_od" id="traj_od" value="{{$smene->traj_od}}" required="required">
              <span>Pocetak smene</span>
              <i></i>
          </div>
          
          <div class="inputBox">
            <input type="time"  name="traj_do" id="traj_do" value="{{$smene->traj_do}}" required="required">
            <span>Zavrsetak smene</span>
            <i></i>
        </div>
            
          <a style="text-decoration:none;">
               <input type="submit" value="Sacuvaj izmene">
          </a>
          <a style="text-decoration:none;" href="http://127.0.0.1:8000/smene/show" >
            <input type="button" value="Nazad"></a>
        </form>

    </div>
</body>
</html>
@endsection