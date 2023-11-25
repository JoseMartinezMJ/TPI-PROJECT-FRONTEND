@extends('Admin')

@section('title')
Productos
@endsection

@section('content')
<div class="container" data-alert>
			
</div>
<div class="container mt-2 rounded p-5">
    <h2 class="container-fluid text-center text-white">Registro de Productos</h2>

    <form class="">
        <div class="form-row">
            <!-- Primera columna -->
            <div class="col-md-6 mb-3 text-center text-white h2">
                <label for="imagen">Imagen</i></label>
                <input type="file" class="form-control text-dark font-weight-bold h4" id="imagen" name="imagen" accept="image/*" onchange="previewImage()" data-img_product>
                <div class="d-flex flex-column align-items-center">
                    <img id="preview" class="preview-image" src="#" alt="Vista previa de la imagen" style="display: none;">
                </div>
            </div>

            <!-- Segunda columna -->
            <div class="col-md-6 text-white p-5 h4">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control text-dark font-weight-bold h4" id="nombre" name="nombre" required data-name>

                <label for="nombre">Descripión:</label>
                <input type="text" class="form-control text-dark font-weight-bold h4" id="nombre" name="nombre" required data-description>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="font-weight-bold">Categoria</label>
                        <select class="form-control" required data-category>
                            
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="font-weight-bold">Proveedor</label>
                        <select class="form-control" required data-supplier>
                            
                        </select>
                    </div>
                </div>
                <label for="stock">Stock:</label>
                <input type="number" class="form-control text-dark font-weight-boldh h4" id="stock" name="stock" required data-stock>

                <label for="costo">Costo:</i></label>
                <input type="text" class="form-control text-dark font-weight-bold h4" id="costo" name="costo" required data-cost>

                <label for="precio_venta">Precio de venta:</label>
                <input type="text" class="form-control text-dark font-weight-bold h4" id="precio_venta" name="precio_venta" required data-price>
            </div>
        </div>
        <div class="text-center text">
            <button class="btn-success h3" style="width: 150px;" type="submit" data-save>Guardar</button>
        </div>
    </form>
</div>
<script src="{{ asset('js/RegisterProducts.js') }}"></script>
<script src="{{ asset('js/admin/loadSupplierCategory.js') }}" type="module"></script>
<script src="{{ asset('js/admin/storeProduct.js') }}" type="module"></script>
@endsection