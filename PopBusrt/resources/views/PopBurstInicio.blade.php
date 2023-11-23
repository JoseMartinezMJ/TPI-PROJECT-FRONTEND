<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-----===== bootstrap<link href="{{asset('/css/app.css')}}" rel="stylesheet"> =====----->
    <!-----===== Bootstrap CSS =====----->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-----===== Boxicons CSS =====----->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="{{ asset('js/dashboard-User.js') }}"></script>
    <!-----===== css =====----->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesPopBurst.css') }}">
    <title>PopBurst</title>
    
</head>
    <body>
        @include('Navbar')
        <div class="container-all" id="move-content">
        <!--Inicio de estructura para la portada-->
        <div class="container-cover" id="home">
            <div class="container-info-cover">
                <h1>¡Welcome to PopBurst!</h1>
                <p id="About blog">At PopBurst, we are passionate about bringing the magic of cinema into your everyday life. We are an online store dedicated to offering a wide range of products inspired by your favorite movies. From timeless classics to the latest blockbusters, PopBurst is the perfect place for film enthusiasts to find authentic and exciting products that celebrate their love for the seventh art.</p>
                <a href="./html/SignUp.html">Sign up</a>
            </div>
        </div>
        <!--Fin de estructura para la portada-->
    
        <div class="container-content">
            <!--Inicio de estructura para el contenido del blog-->
            <article>
                <h1>What is codeNexus?</h1>
                <p>CodeNexus is a blog dedicated to providing relevant content and resources for programmers of all levels. With a focus on various areas of programming, CodeNexus has become a popular destination for those looking to learn, improve, and keep up with the latest trends in the world of software development.</p>
                <p>The blog offers a wide range of topics, including popular programming languages like Python, Java, JavaScript, C++, and many more. In addition, it covers fundamental programming concepts such as algorithms, data structures, design patterns, and development principles.</p>
                <h1>What can you do in codenexus?</h1>
                <p>CodeNexus is also noted for its specialized content in specific areas of programming, such as web development, mobile applications, artificial intelligence, machine learning, game development, and computer security. Readers can find detailed tutorials, step-by-step guides, how-to tips, and code samples to help them sharpen their skills and tackle technical challenges.</p>
                <img src="./img/img1.jpg"alt="Error img">
                <p>In addition, CodeNexus stays up to date with the latest news and developments in the field of technology, making sure that developers are aware of the most relevant developments. Readers can also find interviews with industry experts, tool reviews, and useful resources to help them in their daily work.</p>
                <p>In short, CodeNexus is a comprehensive and accessible blog that provides programmers with a central place to gain knowledge, stay up-to-date, and find inspiration on their path to coding excellence.<span reset></span></p>
            </article>
    
            <div class="container-aside">	
    
                <aside>
                    <img src="./img/img2.png" alt="">
                    <h2>Web programming</h2>kkkkkkkkkk
                    <p>Web programming refers to the development of websites and web applications using specific programming languages and technologies.</p>
                    <a href="#"><button>read more</button></a>
                </aside>
    
                <aside>
                    <img src="./img/img3.png" alt="Error">
                    <h2>CodeNexus project</h2>
                    <p>Visit our github repository to learn about our project.</p>
                    <a href="https://github.com/ShinesparkSR388/CodeNexus"><button>read more</button></a>
                </aside>
    
                <aside>
                    <img src="./img/img4.avif" alt="Error">
                    <h2>Visit our publications</h2>
                    <p>For that register and be part of our blog</p>
                    <a href="./html/SignUp.html"><button>I'm ready</button></a>
                </aside>
    
            </div>
            <!--Fin de estructura para el contenido del blog-->
        </div>
        <!--Inicio de estructura para pie de pagina-->
        @include('Footer')
        <!--Fin de estructura para pie de pagina-->
    </div>
        
    </body>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</html>
