<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-----===== css =====----->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/styleHistorialC.css') }}">
  <!-----===== Boxicons CSS =====----->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-----===== Bootstrap CSS =====----->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>PopBurst</title>
</head>
<body>
@include('Navbar')

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <p class="fuente-encabezado">Mi lista de deseos</p>
        </div>
    </div>
</div>

<!-----contenedor de lista de deseos----->
<div class="container-fluid contenedor">
    <!-----contenedor del encabezado----->
    <div class="row contenedor-fecha">
        <div class="col-2">
            <p>X</p>
        </div>
        <div class="col-3">
            <p>DATOS</p>
        </div>
        <div class="col-2">
            <p>ESTADO DEL STOCK</p>
        </div>
    </div>
    <!-----contenedor de imagen----->
    <div class="row">
        <div class="col-2 contenedor-imagen">
            <img src="" alt="imagen">
        </div>
<!-----contenedor de descripciones del producto----->
        <div class="col-md-3">
            <div class="row fuente-nombre">
                <p>Batman funko</p>
            </div>
            <div class="row">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, esse quo minima consequatur dolorum repellat labore qui earum eos a quam saepe quaerat id inventore voluptatibus voluptatem dicta ut. Quae?</p>
            </div>
        </div>
        <div class="col-md-2 d-flex justify-content-center">
            <p class="fuente-disponibilidad">Disponible</p>
        </div>
        <div class="col-md-5 d-flex justify-content-center">
            <button class="botonAniadir">
                Aniadir al carro
            </button>
        </div>
    </div>

</div>    

</body>
@include('Footer')
</html>