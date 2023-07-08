<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="slike/logo.png" type="image/icon type">
    <title>EWR</title>
</head>
<body>
@extends('najave.layout')
@section('content')

<div class="container">
    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="logo-apple"></ion-icon></span>
                    <span class="title">Employee Work Regulator </span>
                </a>
            </li>
            <li>
                <a href="http://127.0.0.1:8000/ekspozitura">
                    <span class="icon"><ion-icon name="business-outline"></ion-icon> </span>
                    <span class="title">Ekspoziture</span>
                </a>
            </li>
            <li>
                <a href="http://127.0.0.1:8000/zaposlen">
                    <span class="icon"><ion-icon name="body-outline"></ion-icon></span>
                    <span class="title">Zaposleni </span>
                </a>
            </li>
            <li>
                <a href="http://127.0.0.1:8000/poslovi">
                    <span class="icon"> <ion-icon name="file-tray-full-outline"></ion-icon></span>
                    <span class="title">Poslovi</span>
                </a>
            </li>
            <li>
                <a href="http://127.0.0.1:8000/uloga">
                    <span class="icon"><ion-icon name="finger-print-outline"></ion-icon></span>
                    <span class="title">Uloge</span>
                </a>
            </li>
            <li>
                <a href="http://127.0.0.1:8000/smene">
                    <span class="icon"> <ion-icon name="sync-outline"></ion-icon></span>
                    <span class="title">Smene</span>
                </a>
            </li>
            <li>
                <a href="http://127.0.0.1:8000/najave" class="active">
                    <span class="icon"> <ion-icon name="calendar-outline"></ion-icon></span>
                    <span class="title">Najave</span>
                </a>
            </li>
            <li>
                <a href="http://127.0.0.1:8000">
                    <span class="icon"> <ion-icon name="log-out-outline"></ion-icon></span>
                    <span class="title">Odjavi se</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
            <div class="user">
                <ion-icon name="person-circle-outline"></ion-icon>
            </div>
        </div>
        <div class="cardBox">
            <a class="card" href="{{ url('/najave/show') }}">
                <div>
                    <div class="cardName">Lista najava</div>
                </div>
                <div class="iconBx"><ion-icon name="calendar-outline"></ion-icon></div>

            </a>
            <a class="card" href="{{ url('/najave/create') }}">
                <div>
                    <div class="cardName">Dodaj najavu</div>
                </div>
                <div class="iconBx"><ion-icon name="add-outline"></ion-icon></div>

            </a>
            <a class="card" href="{{ url('/najave/show') }}">
                <div>
                    <div class="cardName">Izmeni najavu</div>
                </div>
                <div class="iconBx"><ion-icon name="repeat-outline"></ion-icon></div>

            </a>
            <a class="card" >
                <div>
                    <div class="number">10</div>
                    <div class="cardName">Broj najava</div>
                </div>
                <div class="iconBx"><ion-icon name="calculator-outline"></ion-icon></div>

            </a>


        </div>
        <div class="details">
            <div class="info">
                <div class="cardHeader">
                    <h2>Najave</h2>
                    <a  href="{{ url('/najave/show') }}" class="btn">Prikazi</a>
                </div>
                <table id="tableId">
                    <thead>
                        <tr>
                        <td>ID</td>
                        <td>Datum podnosenja najave</td>
                        <td>Tip najave</td>
                        <td>Trajanje najave od</td>
                        <td>Trajanje najave do</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($najave as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->tip_najave }}</td>
                            <td>{{ $item->dat_od }}</td>
                            <td>{{ $item->dat_do }}</td>
                            <td>
                        </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
</body>
</html>