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
                <a class="nav-link" href="#">Top de la tienda <span class="sr-only">(current)</span></a>
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