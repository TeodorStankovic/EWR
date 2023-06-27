<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="slike/logo.png" type="image/icon type">

    <title>EWR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <title>Poslovi</title>
    <link rel="stylesheet" href="app.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
@extends('poslovi.layout')
@section('content')
<nav class="sidebar ">
    <header>
            
        <div class="image-text">
            <span class="image">
                <img draggable="false" src="slike/logo.png" alt="">
            </span>
            <div class="text header-text">
                <span class="profession">Employee <br>Work Regulator</span>
            </div>
        </div>
        <i class='bx bx-chevron-right toggle'></i>
    </header>
    <div class="menu-bar">
        <div class="menu">
            <ul class="menu-links">
                <li class="nav-links">
                    <a href="ekspozitura">
                        <i class='bx bx-building-house icon'></i>
                        <span class="text nav-text">Ekspoziture</span>
                    </a>
                </li>
                <li class="nav-links">
                    <a href="zaposlen">
                        <i class='bx bx-body icon'></i>
                        <span class="text nav-text">Zaposleni</span>
                    </a>
                </li>
                <li class="nav-links">
                    <a href="poslovi">
                        <i class='bx bxs-report icon'></i>
                        <span class="text nav-text">Poslovi</span>
                    </a>
                </li>
                <li class="nav-links">
                    <a href="uloga">
                        <i class='bx bx-pie-chart-alt-2 icon'></i>
                        <span class="text nav-text">Uloge</span>
                    </a>
                </li>
                <li class="nav-links">
                    <a href="smene">
                        <i class='bx bx-user-circle icon'></i>
                        <span class="text nav-text">Smene</span>
                    </a>
                </li>
                <li class="nav-links">
                    <a href="najave">
                        <i class='bx bxs-bell-ring icon'></i>
                        <span class="text nav-text">Najave</span>
                    </a>
                </li>
            </ul>
            <div class="bottom-content">
                <li class="">
                    <a href="index.html">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Odjavi se</span>
                    </a>
                </li>
                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                        <span class="mode-text text">Dark Mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </div>
</nav>
<script src="script.js"></script>

    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Poslovi </h2>
                        
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/poslovi/create') }}" class="btn btn-success btn-sm" title="Add New poslovi">
                            <i class="fa fa-plus" aria-hidden="true"></i> Dodaj posao
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Naziv Posla</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($poslovi as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        
                                        <td>{{ $item->naziv_posla }}</td>
                                        <td>
                                            <a href="{{ url('/poslovi/' . $item->id_posla) }}" title="View Poslovi"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Pogledaj</button></a>
                                            <a href="{{ url('/poslovi/' . $item->id_posla . '/edit') }}" title="Edit Poslovi"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Izmeni</button></a>
 
                                            <form method="POST" action="{{ url('/poslovi' . '/' . $item->id_posla) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Poslovi" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Obrisi</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    
</body>
</html>