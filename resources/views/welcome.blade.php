

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="slike/logo.png" type="image/icon type">
    <link rel="stylesheet" href="app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Employee Work Regulator</title>
</head>
<body data-bs-theme="dark">
    <nav class="sidebar">
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

                        <div class="toggle-switch" >
                            <span class="switch" onclick="DarkModeB()"></span>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <script src="script.js"></script>
</body>
</html>