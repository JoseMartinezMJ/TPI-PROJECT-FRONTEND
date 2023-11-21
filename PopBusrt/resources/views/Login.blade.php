<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="index.css">
    <!-----===== css =====----->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <!-----===== Boxicons CSS =====----->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Agrega el script de validación -->
<script src="{{ asset('js/validation.js') }}"></script>
    <meta charset="UTF-8">
    <title>PopBurst</title>
</head>
<body>
    <!-- NAVBAR CREATION -->
   <header class="header">
    
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, repellendus?</p>
                <div class="social-icon">
                    <a  href="#"><i class='bx bxl-facebook'></i></a>
                    <a  href="#"><i class='bx bxl-twitter'></i></a>
                    <a  href="#"><i class='bx bxl-youtube'></i></a>
                    <a  href="#"><i class='bx bxl-instagram'></i></a>
                    <a  href="#"><i class='bx bxl-linkedin'></i></a>
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
                        <input type="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-password">
                        <label for=""><input type="checkbox">Remember Me</label>
                        <a style="color: black;" href="#">Forget Password</a>
                    </div>
                    <button class="btn">Login In</button>
                    <a style="color: black;" href="#" class="guest-login">Login as Guest</a>
                    <div class="create-account">
                        <p>Create A New Account? <a style="color: black;" href="#" class="register-link">Sign Up</a></p>
                    </div>
                </form>
            </div>
        </div>
                    </div>
                    
    </div>
</body>
</html>
