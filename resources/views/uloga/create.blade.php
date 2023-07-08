@extends('uloga.layout')
@section('content')
<link rel="stylesheet" href="../css/styleAdd.css"
    <div class="box">
        <form action="{{ url('uloga') }}" method="post" autocomplete="off">
          {!! csrf_field() !!}
            <h2 class="naslov">Dodaj ulogu</h2>

            <div class="inputBox">
                <input type="text"  name="naziv_uloge" id="naziv_uloge" required="required">
                <span>Naziv uloge</span>
                <i></i>
            </div>
          <a style="text-decoration:none;">
               <input type="submit" value="Dodaj ulogu">
          </a>
          <a style="text-decoration:none;" href="http://127.0.0.1:8000/uloga" >
            <input type="button" value="Nazad"></a>
        </form>

    </div>
</body>
</html>
@endsection