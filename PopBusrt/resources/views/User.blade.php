<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-----===== css =====----->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
  <!-----===== Boxicons CSS =====----->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-----===== Bootstrap CSS =====----->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>PopBurst</title>
</head>

<body>
  <!-- Inicio de estructura SideBar Menu -->
  <section class="sidebar">
    <div class="nav-header">
      <p class="logo"><img src="{{ asset('img/logo.png') }}" alt="logo"></p>
      <i class="bx bx-menu btn-menu"></i>
    </div>
    <ul class="nav-links">
      <li>
        <i class="bx bx-search search-btn"></i>
        <input type="text" placeholder="search..." />
        <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-user-circle -alt-2"></i>
          <span class="title">Profile</span>
        </a>
        <span class="tooltip">Profile</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bxs-t-shirt"></i>
          <span class="title">Products</span>
        </a>
        <span class="tooltip">Products</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-history"></i>
          <span class="title">Shoping History</span>
        </a>
        <span class="tooltip">Shoping History</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bxs-coupon -alt"></i>
          <span class="title">Coupons</span>
        </a>
        <span class="tooltip">Coupons</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-list-plus"></i>
          <span class="title">Wish List</span>
        </a>
        <span class="tooltip">Wish List</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-shopping-bag"></i>
          <span class="title">Orders</span>
        </a>
        <span class="tooltip">Orders<</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-log-out"></i>
          <span class="title">Logout</span>
        </a>
        <span class="tooltip">Logout<</span>
      </li>
    </ul>
    <div class="theme-wrapper">
      <i class="bx bxs-moon theme-icon"></i>
      <p>Dark Theme</p>
      <div class="theme-btn">
        <span class="theme-ball"></span>
      </div>
    </div>
  </section>
  <section class="home">
    <p>User Dashboard</p>
    <div class="container bg-secondary">
      <h2 class="my-4">Editar Información del Usuario</h2>
      
      <form>
        <!-- Campo de Nombre -->
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
        </div>
        
        <!-- Campo de Edad -->
        <div class="form-group">
          <label for="edad">Edad:</label>
          <input type="number" class="form-control" id="edad" placeholder="Ingrese su edad">
        </div>
        
        <!-- Campo de Género -->
        <div class="form-group">
          <label for="genero">Género:</label>
          <select class="form-control" id="genero">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
          </select>
        </div>
        
        <!-- Campo de Fotografía -->
        <div class="form-group">
          <label for="foto">Fotografía:</label>
          <input type="file" class="form-control-file" id="foto">
        </div>

        <!-- Campo de Correo -->
        <div class="form-group">
          <label for="correo">Correo Electrónico:</label>
          <input type="email" class="form-control" id="correo" placeholder="Ingrese su correo electrónico">
        </div>

        <!-- Campo de Contraseña -->
        <div class="form-group">
          <label for="contrasena">Contraseña:</label>
          <input type="password" class="form-control" id="contrasena" placeholder="Ingrese su contraseña">
        </div>

        <!-- Campo de Usuario -->
        <div class="form-group">
          <label for="usuario">Usuario:</label>
          <input type="text" class="form-control" id="usuario" placeholder="Ingrese su nombre de usuario">
        </div>

        <!-- Campo de País -->
        <div class="form-group">
          <label for="pais">País:</label>
          <input type="text" class="form-control" id="pais" placeholder="Ingrese su país">
        </div>

        <!-- Campo de Dirección Principal -->
        <div class="form-group">
          <label for="direccion">Dirección Principal:</label>
          <textarea class="form-control" id="direccion" rows="3" placeholder="Ingrese su dirección principal"></textarea>
        </div>

        <!-- Campo de Direcciones de Envío -->
        <div class="form-group">
          <label for="direccionesEnvio">Direcciones de Envío:</label>
          <textarea class="form-control" id="direccionesEnvio" rows="3" placeholder="Ingrese sus direcciones de envío"></textarea>
        </div>

        <!-- Botón de Guardar -->
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
      </form>
    </div>

    
  </section>
  <!-- Fin de estructura SideBar Menu -->
  <!-- Inicio de estructura para la seccion o el contenido de User.blade.php -->

  <!-- Fin de estructura para la seccion o el contenido de User.blade.php -->
  <script src="{{ asset('js/dashboard-User.js') }}"></script>
  <!-----===== Bootstrap JS y Popper.js =====----->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</body>

</html>