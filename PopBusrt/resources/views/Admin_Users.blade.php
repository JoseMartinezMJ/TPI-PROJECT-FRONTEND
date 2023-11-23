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
          <i class="bx bxs-user-account -alt-2"></i>
          <span class="title">Users</span>
        </a>
        <span class="tooltip">Users</span>
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
          <i class="bx bxs-coupon -alt"></i>
          <span class="title">Coupons</span>
        </a>
        <span class="tooltip">Coupons</span>
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
    <p>Admin Dashboard - Usuarios</p>
    
    <section class="container">
        <button type="submit" class="btn btn-outline-info">Crear usuario</button>

        <div class="table-responsive mt-4">
            <table class="table table-striped
            table-hover	
            table-borderless
            table-primary
            align-middle">
                <thead class="table-light">
                    <caption>USUARIOS</caption>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Correo</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>Pais</th>
                        <th>Dirección Principal</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                    <tbody class="table-group-divider" data-users>
                        
                    </tbody>
                    <tfoot>
                        
                    </tfoot>
            </table>
        </div>
    </section>

  </section>
  <!-- Fin de estructura SideBar Menu -->
  <!-- Inicio de estructura para la seccion o el contenido de User.blade.php -->

  <!-- Fin de estructura para la seccion o el contenido de User.blade.php -->
  <script src="{{ asset('js/Users.js') }}" type="module"></script>
  <script src="{{ asset('js/dashboard-Admin.js') }}"></script>
  <!-----===== Bootstrap JS y Popper.js =====----->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</body>

</html>