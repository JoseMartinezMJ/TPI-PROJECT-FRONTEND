<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-----===== css =====----->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesPopBurst.css') }}">
    <title>Document</title>
</head>
<body>
  <!--Inicio de estructura para pie de pagina-->
  <div class="container-footer" id="footer">	  
            <footer>
                <div class="logo-footer">
                    <img src="{{ asset('img/logo.png') }}" alt="logo">
                </div>
                <div class="redes-footer">
                    <a href="https://www.facebook.com/"><i class="bx bxl-facebook-circle icon-redes-footer"></i></a>
                    <a href="https://github.com/JoseMartinezMJ/TPI-PROJECT-FRONTEND.git"><i class="bx bxl-github icon-redes-footer"></i></a>
                    <a href="https://www.instagram.com/"><i class="bx bxl-instagram icon-redes-footer"></i></a>
                </div>
                <hr>
                <h4>© 2023 PopBurst - All rights reserved</h4>
            </footer>  
        </div>
  <!--Fin de estructura para pie de pagina-->
  <script src="{{ asset('js/PopBurst.js') }}"></script>
</body>
</html>