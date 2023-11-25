@extends('Admin')

@section('title')
Proveedor
@endsection

@section('content')
<div class="container" data-alert>
			
</div>
<div class="container">
      <form>
        <div class="form-group">
          <p><label for="nombre" class="h4">Nombre del Proveedor:</label></p>
          <input type="text" class="form-control h4" id="nombre" placeholder="Ingrese el nombre" required data-name>
        </div>
        <div class="form-group">
          <p><label for="correo" class="h4">Correo de Contacto:</label></p>
          <input type="email" class="form-control h4" id="correo" placeholder="Ingrese el correo electrónico" required data-contact>
        </div>
        <div class="container text-center p-5">
          <button type="submit" class="btn btn-outline-primary text-center" style="width: 150px; font: size 20px;" data-save>Registrar</button>
        </div>
      </form>
</div>
<script src="{{ asset('js/admin/storeSupplier.js') }}" type="module"></script>
@endsection