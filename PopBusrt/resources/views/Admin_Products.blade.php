@extends('Admin')

@section('title')
Productos
@endsection

@section('content')
<div class="container" data-alert>
			
</div>
<a href="{{route('admin.product.create')}}" type="submit" class="btn btn-outline-info">Agregar producto</a>

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
				<th>Descripción</th>
				<th>Precio</th>
				<th>stock</th>
				<th>costo</th>
				<th>Proveedor</th>
				<th>Acciones</th>
			</tr>
		</thead>
			<tbody class="table-group-divider" data-products>
				
			</tbody>
			<tfoot>
				
			</tfoot>
	</table>
</div>
<script src="{{ asset('js/admin/products.js') }}" type="module"></script>
<script src="{{ asset('js/admin/helpers.js') }}"></script>
@endsection