<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-----===== bootstrap<link href="{{asset('/css/app.css')}}" rel="stylesheet"> =====----->
    <!-----===== Bootstrap CSS =====----->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-----===== Boxicons CSS =====----->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="{{ asset('js/dashboard-User.js') }}"></script>

    
    </head>
    <title>PopBurst</title>
    <body>
    @include('Navbar')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active text-center">
            <img class="d-block mx-auto" src="{{ asset('img/logo.png') }}" alt="First slide">
        </div>
        <div class="carousel-item text-center">
            <img class="d-block mx-auto" src="{{ asset('img/logo.png') }}" alt="Second slide">
        </div>
        <div class="carousel-item text-center">
            <img class="d-block mx-auto" src="{{ asset('img/logo.png') }}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container background-split">
    <div class="row">
        <div class="col-md-6 d-flex align-items-center ">
            
            <img src="{{ asset('img/marvel.jpg') }}" class="img-fluid" alt="Imagen">
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <div class="text-center">
                
                <h2>Épico Figura</h2>
                <p>Probablemente no necesites esto, pero ¿no se ve épico? Yo, si fuera tú, lo compraría.</p>
            </div>
        </div>
    </div>
</div>
<div class="container mt-auto background-split">
    <div class="row d-flex align-items-center">
        <div class="col-md-6">
            
            <h2 class="text-center">Figura aun mas epica que la anterior</h2>
            <p >Probablemente no necesites esto, pero ¿no se ve épico? Yo, si fuera tú, lo compraría.</p>
        </div>
        <div class="col-md-6">
            
            <img src="{{ asset('img/dc.webp') }}" class="img-fluid" alt="Imagen">
        </div>
    </div>
</div>
    </body>
    @include('Footer')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</html>
