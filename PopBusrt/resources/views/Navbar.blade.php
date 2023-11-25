<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Inicio de estructura html de Menu (Home)-->
    <header>
        <div class="header-content">
            <div class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="logo">
            </div>
            <div id="show-menu" class="menu">
                <nav>
                    <ul>
                        <li><i class='bx bxs-home'></i><a href="#home">Inicio</a></li>
                        <li><i class='bx bxs-shopping-bag-alt' ></i><a href="#About blog">Productos</a></li>
                        <li><i class='bx bxs-phone-call' ></i><a href="#footer"> Contacto</a></li>
                        <li class="elemento-login"><i class='bx bx-log-in' ></i><a href="./html/Login.html" class="text-login">Iniciar Sesión</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="icon-menu">
            <i class='bx bx-menu'></i>
        </div>
    </header>
    <!--Fin de estructura html de Menu (Home)-->
</body>
</html>