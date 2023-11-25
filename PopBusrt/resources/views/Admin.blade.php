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
  @yield('styles')

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
        <span class="tooltip">Buscar</span>
      </li>
      <li>
        <a href="{{route('admin.users')}}">
          <i class="bx bxs-user-account -alt-2"></i>
          <span class="title">Usuarios</span>
        </a>
        <span class="tooltip">Usuarios</span>
      </li>
      <li>
        <a href="{{route('admin.product')}}">
          <i class="bx bxs-t-shirt"></i>
          <span class="title">Productos</span>
        </a>
        <span class="tooltip">Productos</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bxs-coupon -alt"></i>
          <span class="title">Coupones</span>
        </a>
        <span class="tooltip">Coupones</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-shopping-bag"></i>
          <span class="title">Pedidos</span>
        </a>
        <span class="tooltip">Pedidos<</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-log-out"></i>
          <span class="title">Cerrar sesión</span>
        </a>
        <span class="tooltip">Cerrar sesión<</span>
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
    <p>Admin Dashboard - @yield('title')</p>
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-light">Light</button>
    <button type="button" class="btn btn-dark">Dark</button>
    <button type="button" class="btn btn-link">Link</button>

    <section class="container-data">
      @yield('content')
    </section>
  </section>
  <!-- Fin de estructura SideBar Menu -->
  <!-- Inicio de estructura para la seccion o el contenido de User.blade.php -->

  <!-- Fin de estructura para la seccion o el contenido de User.blade.php -->
  <script src="{{ asset('js/dashboard-Admin.js') }}"></script>
  <!-----===== Bootstrap JS y Popper.js =====----->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</body>

</html>