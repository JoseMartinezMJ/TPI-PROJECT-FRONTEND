@extends('Admin')

@section('title')
Usuarios
@endsection

@section('styles')
<style>
    :root {
        --color-dark: #15181f;
        --color-dark-x: #2d343f;
        --color-dark-xx: #1f232b;
        --color-light: #ffffff;
        --color-grey: #f5f6f8;
    }

    .contact-box {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        font-weight: 300;
        background-color: var(--color-grey);
        color: var(--color-light);
        letter-spacing: .05rem;
    }

    .bg-light {
        background-color: var(--color-light)!important;
    }

    .bg-dark {
        background-color: var(--color-dark)!important;
    }

    .contact-box .p-6 {
        padding: 2rem;
    }

    .contact-box .img-fluid.animate-image {
        display: block;
        background-size: contain;
        background-position: center;
        width: 60%;
        height: 60%;
        margin: 0 auto;

    }

    .contact-box {
        max-width: 1000px; 
        min-height: 752px;
        margin: 0 auto;
        border-radius: 10px;
    }

    .contact-box .box {
        border: 1px solid var(--color-dark);
        border-radius: 10px;
        margin-bottom: 10px;
    }

    .contact-box .animate-image {
        animation: moveImage 5s infinite alternate;
    }

    .contact-box .btn {
        font-weight: 400;
        padding: 1rem 1.5rem;
        border-radius: 5rem;
        min-width: 8rem;
    }

    .contact-box .btn-outline-dark {
        border: 2px solid var(--color-dark-xx);
    }

    .contact-box .form-control {
        background-color: var(--color-dark-xx);
        border: 2px solid var(--color-dark-xx);
        border-radius: .2rem;
        padding: 1rem 0.8rem;
        margin-bottom: 1rem;
    }

    .contact-box .foto{
        padding: 2rem;
        margin-bottom: 5px;
    }

    @media (max-width: 575.98px) {
        .p-6 {
            padding: 1.5rem;
        }

        .contact-box {
            padding: 0.5rem;
        }

        .width-100 {
            width: 100%;
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

    .contact-box .store-description {
        margin-top: 1.5rem;
        font-size: 1.2rem;
        color: var(--color-light);
    }
</style>
@endsection

@section('content')
<div class="container" data-alert>
			
</div>
<section class="contact-box mt-4">
    <form action="#" autocomplete="off">
        <div class="row no-gutters bg-dark row-no-gutters-dark">
            <div class="col-lg-6 d-flex">
                <div class="container align-self-center p-3 p-md-5 box">
                    <img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid animate-image">
                    <h1 class="font-weight-bold mb-3">Registro PopBurst</h1>
                    <form>
                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Nombre <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Tu nombre" required data-name>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Apellido <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Tu apellido" required data-lastname>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" placeholder="Ingresa tu correo electrónico" required data-email>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" placeholder="Ingresa una contraseña" required data-password>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Edad</label>
                                <input type="number" class="form-control" placeholder="Tu edad" required data-age>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Género</label>
                                <select class="form-control" required data-gender>
                                    <option value="masculino">Masculino</option>
                                    <option value="femenino">Femenino</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Rol</label>
                                <select class="form-control" required data-rol>
                                    <option value="Cliente">Cliente</option>
                                    <option value="Administrador">Administrador</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <div class="container align-self-center p-2 p-md-5 box">
                    <form>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Usuario</label>
                            <input type="text" class="form-control" placeholder="Tu usuario" required data-user>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">País</label>
                            <input type="text" class="form-control" placeholder="Tu país" required data-country>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Dirección Principal</label>
                            <input type="text" class="form-control" placeholder="Tu dirección principal" required data-mainaddr>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Dirección de Envío</label>
                            <textarea class="form-control" placeholder="Tus dirección de envío" required data-shippingaddr></textarea>
                        </div>
                        <div class="form-group mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label text-muted">Al seleccionar esta casilla aceptas nuestro aviso de privacidad y los términos y condiciones</label>
                            </div>
                        </div>
                        <button class="btn btn-primary width-100" type="submit" data-save>Crear</button>
                    </form>
                    <small class="d-inline-block text-muted mt-3">Todos los derechos reservados | © 2023 PopBurst</small>
                </div>
           </div>
       </div>
   </section>
<script src="{{ asset('js/admin/storeUser.js') }}" type="module"></script>
@endsection