<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-----===== Bootstrap CSS =====----->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>
        #search-container {
            position: relative;
        }

        #search-box {
            display: none;
            position: absolute;
            top: 0px;
            right: 230px; /* Cambiado de 'left' a 'right' */
            width: 100%;
            z-index: 1000;
        }
    </style>
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #b71c1c;">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" height="30" class="d-inline-block align-top">
        HOME
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"> Lista de deseos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Top de la tienda <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categorias
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Categoria 1</a>
                    <a class="dropdown-item" href="#">CAtegoria 2</a>        
            </li>               
        </ul>
        <div id="search-container" class="nav-item">
            <button class="btn btn-outline-light my-2 my-sm-0" id="search-icon">
                <!-- Icono de búsqueda -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
            <!-- Cuadro de búsqueda -->
            <form class="form-inline" id="search-box">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                
            </form>
        </div>
        <ul class="navbar-nav ">
        <li class="nav-item active">
                <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
        <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
        </svg></button>         
            </li>
            
        </ul>
  </div>
</nav>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
        // Muestra u oculta el cuadro de búsqueda al hacer clic en el icono
        $("#search-icon").click(function(){
            $("#search-box").toggle();
        });
    });
</script>
</script>
</body>
</html>