@extends('poslovi.layout')
@section('content')
<link rel="stylesheet" href="../css/styleAdd.css"
    <div class="box">
        <form action="{{ url('poslovi') }}" method="post" autocomplete="off">
          {!! csrf_field() !!}
            <h2 class="naslov">Dodaj posao</h2>

            <div class="inputBox">
                <input type="text"  name="naziv_posla" id="naziv_posla" required="required">
                <span>Naziv posla</span>
                <i></i>
            </div>
          <a style="text-decoration:none;">
               <input type="submit" value="Dodaj posao">
          </a>
          <a style="text-decoration:none;" href="http://127.0.0.1:8000/poslovi" >
            <input type="button" value="Nazad"></a>
        </form>

    </div>
</body>
</html>
@endsection