@extends('Admin')

@section('title')
Categorias
@endsection

@section('content')
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
        color: var(--color-light);
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
<div class="container">
      <form>
        <div class="form-group">
          <p><label for="nombre" class="h4">Nombre de la categoria:</label></p>
          <input type="text" class="form-control h4" id="nombre" placeholder="Ingrese el nombre de la categoria" required data-category_name>
        </div>
        
        <div class="container text-center p-5">
          <button type="submit" class="btn btn-outline-primary text-center" style="width: 150px; font: size 20px;" data-save>Registrar</button>
        </div>
      </form>
</div>
<div class="container" data-alert>			
</div>

<script src="{{ asset('js/category/storeCategory.js') }}" type="module"></script>
@endsection
