@extends('Admin')

@section('title')
Usuarios
@endsection

@section('content')
<div class="container" data-alert>
			
</div>
<a href="{{route('admin.user.create')}}" type="submit" class="btn btn-outline-info">Crear Categoria</a>

<div class="table-responsive mt-4">
	<table class="table table-striped
	table-hover	
	table-borderless
	table-primary
	align-middle">s
		<thead class="table-light">
			<caption>USUARIOS REGISTRADOS</caption>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Creacion</th>
				<th>Modificaion</th>
				<th>Acciones</th>
			</tr>
		</thead>
			<tbody class="table-group-divider" data-categorys>
				
			</tbody>
			<tfoot>
				
			</tfoot>
	</table>
</div>
<script src="{{ asset('js/category/category.js') }}" type="module"></script>

@endsection