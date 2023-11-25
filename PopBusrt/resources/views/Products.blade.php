<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Agregar en la parte superior del archivo Products.blade.php, dentro del body -->
        <div class="busqueda">
            <input type="text" id="nombre" placeholder="Buscar por nombre">
            <select id="categoria">
                <option value="">Todas las categorías</option>
                <option value="categoria1">Categoría 1</option>
                <option value="categoria2">Categoría 2</option>
                <!-- Agrega más opciones según tus categorías -->
            </select>
            <input type="number" id="precioMin" placeholder="Precio mínimo">
            <input type="number" id="precioMax" placeholder="Precio máximo">
            <button onclick="buscarProductos()">Buscar</button>
        </div>
    <section class="contenedor">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <div class="item">
                <i class='bx bx-heart' style='float: right; color:green; font-size:20px;'></i>
                <span class="titulo-item">Marvel Azul</span>
                <img src="img/Camisa-Marvel-Azul.png" alt="" class="img-item img-thumbnail">
                <span class="precio-item">$15.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <i class='bx bx-heart' style='float: right; color:green; font-size:20px;'></i>
                <span class="titulo-item">Marvel Gris</span>
                <img src="img/Camisa-Marvel-Gris.png" alt="" class="img-item img-thumbnail">
                <span class="precio-item">$25.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <i class='bx bx-heart' style='float: right; color:green; font-size:20px;'></i>
                <span class="titulo-item">Marvel Negra</span>
                <img src="img/Camisa-Marvel-Negra.png" alt="" class="img-item img-thumbnail">
                <span class="precio-item">$35.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <i class='bx bx-heart' style='float: right; color:green; font-size:20px;'></i>
                <span class="titulo-item">Marvel Roja</span>
                <img src="img/Camisa-Marvel-Roja.png" alt="" class="img-item img-thumbnail">
                <span class="precio-item">$18.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <i class='bx bx-heart' style='float: right; color:green; font-size:20px;'></i>
                <span class="titulo-item">DC-1</span>
                <img src="img/Zapatos-DC-1.png" alt="" class="img-item img-thumbnail">
                <span class="precio-item">$32.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <i class='bx bx-heart' style='float: right; color:green; font-size:20px;'></i>
                <span class="titulo-item">DC-2</span>
                <img src="img/Zapatos-DC-2.png" alt="" class="img-item img-thumbnail">
                <span class="precio-item">$18.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <i class='bx bx-heart' style='float: right; color:green; font-size:20px;'></i>
                <span class="titulo-item">DC-3</span>
                <img src="img/Zapatos-DC-3.png" alt="" class="img-item img-thumbnail">
                <span class="precio-item">$54.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <i class='bx bx-heart' style='float: right; color:green; font-size:20px;'></i>
                <span class="titulo-item">DC-4</span>
                <img src="img/Zapatos-DC-4.png" alt="" class="img-item img-thumbnail">
                <span class="precio-item">$32.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <i class='bx bx-heart' style='float: right; color:green; font-size:20px;'></i>
                <span class="titulo-item">Funko Groot</span>
                <img src="img/Funko-Groot.png" alt="" class="img-item img-thumbnail">
                <span class="precio-item">$42.800</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
        </div>
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2><i class='bx bx-cart' style='color:#ffffff' ></i> Carrito</h2>
            </div>

            <div class="carrito-items">
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class='bx bxs-shopping-bag' style='color:#ffffff' ></i> </button>
            </div>
        </div>
    </section>
</body>
</html>