<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleLogin.css') }}">
    <!-----===== Boxicons CSS =====----->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Agrega el script de validación -->
    <meta charset="UTF-8">
    <title>PopBurst</title>
</head>
<body>

   </header>
    <!-- LOGIN FORM CREATION -->
    <div class="background"></div>
    <div class="container">
        <div class="item">

            <span class="image">
                    <img src="{{ asset('img/logo.png') }}" alt="logo">
                </span>
            <div class="text-item">
                <h2>Welcome! <br><span>
                    Merch Online
                </span></h2>
                <p></p>
                <div class="social-icon">
                    <a  href="#"><i class='bx bxl-facebook'></i></a>
                    <a  href="https://github.com/JoseMartinezMJ/TPI-PROJECT-FRONTEND/tree/Jose-Martinez"><i class='bx bxl-github'></i></a>
                    <a  href="#"><i class='bx bxl-youtube'></i></a>
                </div>
            </div>
        </div>
        <div class="login-section">
            <div class="form-box login">
                    <div class="login-section2">
                    <form action="" autocomplete="off">
                        <h2>Sign In</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="Text" required>
                        <label>User</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-password">
                        <label for=""><input type="checkbox">Remember Me</label>
                        <a style="color: white;" href="#">Forget Password</a>
                    </div>
                    <button class="btn">Login In</button>
                    <a style="color: white;" href="/PopBurst" class="guest-login">Login as Guest</a>
                    <div class="create-account">
                        <p>Create A New Account? <a style="color: white;" href="/Register" class="register-link">Sign Up</a></p>
                    </div>
                </form>
            </div>
        </div>
                    </div>
                    
    </div>
    <script src="{{ asset('js/validation.js') }}"></script>
</body>
</html>
