@extends('Admin')

@section('title')
Usuarios
@endsection

@section('content')
<div class="container" data-alert>
			
</div>
<a href="{{route('admin.user.create')}}" type="submit" class="btn btn-outline-info">Crear usuario</a>

<div class="table-responsive mt-4">
	<table class="table table-striped
	table-hover	
	table-borderless
	table-primary
	align-middle">
		<thead class="table-light">
			<caption>USUARIOS REGISTRADOS</caption>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Usuario</th>
				<th>Correo</th>
				<th>Edad</th>
				<th>Genero</th>
				<th>Pais</th>
				<th>Dirección Principal</th>
				<th>Rol de usuario</th>
				<th>Acciones</th>
			</tr>
		</thead>
			<tbody class="table-group-divider" data-users>
				
			</tbody>
			<tfoot>
				
			</tfoot>
	</table>
</div>
<script src="{{ asset('js/admin/users.js') }}" type="module"></script>
<script src="{{ asset('js/admin/helpers.js') }}"></script>
@endsection