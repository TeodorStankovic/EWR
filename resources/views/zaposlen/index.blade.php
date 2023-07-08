<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="slike/logo.png" type="image/icon type">
    <title>EWR</title>
</head>
<body>
@extends('zaposlen.layout')
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
                <a href="http://127.0.0.1:8000/zaposlen" class="active">
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
                <a href="http://127.0.0.1:8000/najave">
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
            <a class="card" href="{{ url('/zaposlen/show') }}">
                <div>
                    <div class="cardName">Lista zaposlenih</div>
                </div>
                <div class="iconBx"><ion-icon name="person-outline"></ion-icon></div>

            </a>
            <a class="card" href="{{ url('/zaposlen/create') }}">
                <div>
                    <div class="cardName">Dodaj zaposlenog</div>
                </div>
                <div class="iconBx"><ion-icon name="person-add-outline"></ion-icon></div>

            </a>
            <a class="card" href="{{ url('/zaposlen/show') }}">
                <div>
                    <div class="cardName">Izmeni zaposlenog</div>
                </div>
                <div class="iconBx"><ion-icon name="person-remove-outline"></ion-icon></div>

            </a>
            <a class="card" >
                <div>
                    <div class="number">10</div>
                    <div class="cardName">Broj zaposlenih</div>
                </div>
                <div class="iconBx"><ion-icon name="people-outline"></ion-icon></div>

            </a>


        </div>
        <div class="details">
            <div class="info">
                <div class="cardHeader">
                    <h2>Zaposleni</h2>
                    <a  href="{{ url('/zaposlen/show') }}" class="btn">Prikazi</a>
                </div>
                <table id="tableId">
                    <thead>
                        <tr>
                        <td>Ime</td>
                        <td>Prezime</td>
                        <td>Username</td>
                        <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($zaposlen as $item)
                        <tr>
                            <td>{{ $item->ime }}</td>
                            <td>{{ $item->prezime }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->status }}</td>
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