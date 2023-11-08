<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>@yield('title','Nutrition')</title>
</head>
<body id = "color">
    <!--Primera Parte Barra Navegación-->
    <div class="slider" id = "primeraParte">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <i class="fas fa-apple-alt"><a class= "text-black" href="#">ADNutricion</a></i>
                <button class="navbar-toggler" type="button" data-bs-toggle = "collapse" data-bs-target = "#navbarNav" aria-controls = "navbarNav" aria-expanded = "false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active text-black" aria-current="page" href="#">NUTRICIÓN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-black" aria-current="page" href="#">QUIENES SOMOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-black" aria-current="page" href="#">CONTACTO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-black" aria-current="page" href="#">INICIAR SESIÓN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @yield('body')
    
    <!--DoceabaParte-->
    <div id = "doceavaParte" class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-sm-12 py-3">
                <i class="fas fa-apple-alt"><a class= "text-black" href="#">ADNutricion</a></i>
            </div>
            <div class="col-lg-4 col-sm-4">
                <p id = "saberCuidadoNutricional" class="text-center mt-3">Nutrición ADNutricion, en donde encontrarás todo lo que debemos de saber sobre el cuidado nutricional</p>
                <p id = "ventaIlegal" class="text-center">Prohibida la venta ilegal</p>
            </div>
            <div class="col-lg-4 col-sm-12 text-center mt-3">
                <i class="fab fa-facebook rounded-5 facebook-item p-2"></i>
                <i class="fab fa-twitter rounded-5 twitter-item p-2"></i>
                <i class="fab fa-google rounded-5 google-item p-3"></i>
                <i class="fab fa-linkedin rounded-5 linkedin-item p-3"></i>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>