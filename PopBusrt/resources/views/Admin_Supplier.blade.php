@extends('Admin')

@section('title')
Proveedores
@endsection

@section('content')
<div class="container" data-alert>
			
</div>
<a href="{{route('admin.supplier.create')}}" type="submit" class="btn btn-outline-info">Crear proveedor</a>

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
				<th>Contacto</th>
				<th>Acciones</th>
			</tr>
		</thead>
			<tbody class="table-group-divider" data-supplier>
				
			</tbody>
			<tfoot>
				
			</tfoot>
	</table>
</div>
<script src="{{ asset('js/admin/suppliers.js') }}" type="module"></script>
<script src="{{ asset('js/admin/helpers.js') }}"></script>
@endsection