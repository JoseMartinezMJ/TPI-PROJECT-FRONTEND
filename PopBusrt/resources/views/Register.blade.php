<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <style>
        :root {
            --color-dark: #15181f;
            --color-dark-x: #2d343f;
            --color-dark-xx: #1f232b;
            --color-light: #ffffff;
            --color-grey: #f5f6f8;
        }

        body {
            font-family: 'Roboto', sans-serif;
            font-size: 1.1rem;
            font-weight: 300;
            background-color: var(--color-grey);
            color: var(--color-light);
        }



        .img-fluid.animate-image {
          
            background-size: contain;
            background-position: center;
            width: 70%;
            height: 70%;
        }

        .contact-box {
             padding: 1.5rem;
             max-width: 1000px;
             margin: 0 auto;
}
        .bg-light {
            background-color: var(--color-light)!important;
        }

        .bg-dark {
            background-color: var(--color-dark)!important;
        }

        .p-6 {
            padding: 1rem;
        }


        .box {
            border: 1px solid var(--color-dark);
            border-radius: 10px;
            margin-bottom: 10px;
            line-height: 0.8;
        }

        .animate-image {
            animation: moveImage 5s infinite alternate;
        }

        .btn {
            font-weight: 400;
            padding: 1rem 1.5rem;
            border-radius: 5rem;
            min-width: 8rem;
        }

        .btn-outline-dark {
            border: 2px solid var(--color-dark-xx);
        }

        .form-control {
            background-color: var(--color-dark-xx);
            border: 2px solid var(--color-dark-xx);
            border-radius: .2rem;
            padding: 1rem 0.8rem;
            margin-bottom: 1rem;
        }

        @media (max-width: 575.98px) {
            .p-6 {
                padding: 1.5rem;
            }

            .contact-box {
                padding: 0.5rem;
            }

            .width-100 {
                width: 0%;
            }
        }

        @media (max-width: 1200px) {
            .contact-box {
                min-height: 50vh;
            }
        }

        .animate-image {
            animation: moveImage 5s infinite alternate;
        }

        @keyframes moveImage {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(20px);
            }
        }

        .store-description {
            margin-top: 1.5rem;
            font-size: 1.2rem;
            color: var(--color-light);
        }
    </style>

    <title>Register PopBurst</title>
  </head>
  <body>
    <section class="contact-box">
    <form action="" autocomplete="off">
        <div class="row no-gutters bg-dark row-no-gutters-dark">
            <div class="col-lg-6 d-flex">
                <div class="container align-self-center p-3 p-md-5 box">
                    <img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid animate-image">
                    <h1 class="font-weight-bold mb-3">Register PopBurst</h1>
                    <div class="form-group">
                        <button  class="btn btn-outline-dark d-inline-block text-light mb-3 width-100"><i class="icon ion-logo-github lead align-middle mr-2"></i> Github</button>
                    </div>
                    <p class="text-muted mb-4">Ingresa la siguiente información para registrarte.</p>

                    <form>
                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Nombre <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Tu nombre">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Apellido <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Tu apellido">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" placeholder="Ingresa tu correo electrónico">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" placeholder="Ingresa una contraseña">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <div class="container align-self-center p-3 p-md-5 box">
                    <form>
                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Edad</label>
                                <input type="number" class="form-control" placeholder="Tu edad">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Género</label>
                                <select class="form-control">
                                    <option value="masculino">Masculino</option>
                                    <option value="femenino">Femenino</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Fotografía</label>
                            <input type="file" class="form-control" accept="image/*">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Usuario</label>
                            <input type="text" class="form-control" placeholder="Tu usuario">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">País</label>
                            <input type="text" class="form-control" placeholder="Tu país">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Dirección Principal</label>
                            <input type="text" class="form-control" placeholder="Tu dirección principal">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Dirección de Envío</label>
                            <textarea class="form-control" placeholder="Tus direcciones de envío"></textarea>
                        </div>
                        <div class="form-group mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label text-muted">Al seleccionar esta casilla aceptas nuestro aviso de privacidad y los términos y condiciones</label>
                            </div>
                        </div>
                        <button class="btn btn-primary width-100">Regístrate</button>
                    </form>
                    <small class="d-inline-block text-muted mt-3">Todos los derechos reservados | © 2023 PopBurst</small>
                </div>
           </div>
       </div>
   </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
