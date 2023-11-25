<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-----===== css =====----->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
  <!-----===== css =====----->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesProducts.css') }}">
  <!-----===== Boxicons CSS =====----->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-----===== Bootstrap CSS =====----->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <a href="#">
          <i class="bx bx-user-circle -alt-2"></i>
          <span class="title">Perfil</span>
        </a>
        <span class="tooltip">Perfil</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bxs-t-shirt"></i>
          <span class="title">Productos</span>
        </a>
        <span class="tooltip">Productos</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-history"></i>
          <span class="title">Historial de compras</span>
        </a>
        <span class="tooltip">Historial de compras</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bxs-coupon -alt"></i>
          <span class="title">Cupones</span>
        </a>
        <span class="tooltip">Cupones</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-list-plus"></i>
          <span class="title">Lista de deseos</span>
        </a>
        <span class="tooltip">Lista de deseos</span>
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
      <p>Tema oscuro</p>
      <div class="theme-btn">
        <span class="theme-ball"></span>
      </div>
    </div>
  </section>
  <section class="home">
    <p>User Dashboard</p>
    @include('Products')
    @include('RegisterProducts')

    
  </section>
  <!-- Fin de estructura SideBar Menu -->
  <!-- Inicio de estructura para la seccion o el contenido de User.blade.php -->

  <!-- Fin de estructura para la seccion o el contenido de User.blade.php -->
  <script src="{{ asset('js/dashboard-User.js') }}"></script>
  <script src="{{ asset('js/Products.js') }}"></script>
  <script src="{{ asset('js/RegisterProducts.js') }}"></script>
  <!-----===== Bootstrap JS y Popper.js =====----->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</body>

</html>