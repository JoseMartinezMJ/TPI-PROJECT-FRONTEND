<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-----===== Bootstrap CSS =====----->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-----===== css =====----->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesPopBurst.css') }}">
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
                        <li><i class='bx bxs-home'></i><a href="#home"> Home</a></li>
                        <li><i class='bx bxs-shopping-bag-alt' ></i><a href="#About blog"> About Blog</a></li>
                        <li><i class='bx bxs-phone-call' ></i><a href="#footer"> Contact</a></li>
                        <li class="elemento-login"><i class='bx bx-log-in' ></i><a href="./html/Login.html" class="text-login"> Sign in</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="icon-menu">
            <i class="fas fa-bars"></i>
        </div>
    </header>
    <!--Fin de estructura html de Menu (Home)-->
    <script src="{{ asset('js/PopBurst.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>