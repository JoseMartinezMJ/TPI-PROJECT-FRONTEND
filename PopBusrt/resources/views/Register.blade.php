<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleLogin.css') }}">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Agrega el script de validación -->
    <script src="{{ asset('js/validation.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PopBurst Registration</title>

</head>
<body>
    <!-- CONTAINER FOR WELCOME AND REGISTRATION FORM -->
    <div class="container">
        <!-- Sección de bienvenida -->
        <div class="item">
            <span class="image">
                <img src="{{ asset('img/logo.png') }}" alt="logo">
            </span>
            <div class="text-item">
                <h2>Welcome! <br><span>Merch Online</span></h2>
                <p>Lorem ipsum dolor </p>
                <div class="social-icon">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="https://github.com/JoseMartinezMJ/TPI-PROJECT-FRONTEND/tree/Jose-Martinez"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                </div>
            </div>
        </div>

        <!-- Sección de registro -->
        <div class="login-section">
            <div class="form-box login">
            <form action="" autocomplete="off">
                <div class="login-section2">
                    <form action="/registro" method="post" enctype="multipart/form-data">
                        @csrf <!-- Agrega un token CSRF para protección contra CSRF -->
                        <h2>Register</h2>

                        <!-- Campos del formulario de registro -->
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-user'></i></span>
                            <input type="text" name="nombre" placeholder="" required>
                            <label>User</label>
                        </div>

                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-user'></i></span>
                            <input type="number" name="edad" placeholder="" required>
                            <label>Age</label>
                        </div>

                        <div class="input-box">
                             
                               <input style="color: white;"  type="date" name="fecha_nacimiento" required>
                                   </div>
                        <button class="btn" type="submit">Sign Up</button>
                        <div class="create-account">
                            <p>Already have an account? <a style="color: white;" href="#" class="register-link">Log In</a></p>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
        
    </div>
</body>
</html>
