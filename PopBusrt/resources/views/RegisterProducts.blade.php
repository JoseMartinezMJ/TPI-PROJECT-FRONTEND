<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div class="container mt-2 rounded p-5">
        <h2 class="container-fluid text-center text-white">Registro de Productos</h2>

        <form class="">
            <div class="form-row">
                <!-- Primera columna -->
                <div class="col-md-6 mb-3 text-center text-white h2">
                    <label for="imagen">Imagen</i></label>
                    <input type="file" class="form-control text-dark font-weight-bold h4" id="imagen" name="imagen" accept="image/*" onchange="previewImage()">
                    <div class="d-flex flex-column align-items-center">
                        <img id="preview" class="preview-image" src="#" alt="Vista previa de la imagen" style="display: none;">
                    </div>
                </div>

                <!-- Segunda columna -->
                <div class="col-md-6 text-white p-5 h4">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control text-dark font-weight-bold h4" id="nombre" name="nombre" required>

                    <label for="categoria">Categoría:</label>
                    <input type="text" class="form-control text-dark font-weight-bold h4" id="categoria" name="categoria" required>

                    <label for="proveedor">Proveedor</label>
                    <input type="text" class="form-control text-dark font-weight-bold h4" id="proveedor" name="proveedor" required>

                    <label for="stock">Stock:</label>
                    <input type="number" class="form-control text-dark font-weight-boldh h4" id="stock" name="stock" required>

                    <label for="costo">Costo:</i></label>
                    <input type="text" class="form-control text-dark font-weight-bold h4" id="costo" name="costo" required>

                    <label for="precio_venta">Precio de Venta:</label>
                    <input type="text" class="form-control text-dark font-weight-bold h4" id="precio_venta" name="precio_venta" required>
                </div>
            </div>
            <div class="text-center text">
                <button class="btn-success h3" style="width: 150px;" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</body>

</html>