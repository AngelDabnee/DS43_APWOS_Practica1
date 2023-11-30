@extends('layouts.main')
@section('title','Nutrition')
@section('body')
<!--Segunda Parte-->
<div class="container-fluid mt-5 mb-3">
        <div class="container">
            <div class="row">
                <h1 class="title text-center">
                    <i class="fas fa-apple-alt">
                        AD-Nutricion
                    </i>
                </h1>
            </div>
        </div>
    </div>
    <!--Segunda Parte 2.1-->
    <div class="slider" id = "segundaParte">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle = "collapse" data-bs-target = "#navbarNav" aria-controls = "navbarNav" aria-expanded = "false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto me-auto">
                        <li class="nav-item">
                            <a class="nav-link active text-black" aria-current="page" href="{{route('nutrients.list')}}">DICCIONARIOS DE NUTRIENTES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-black" aria-current="page" href="#mitos">MITOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-black" aria-current="page" href="#alimentos">BENEFICIOS DE LOS ALIMENTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-black" aria-current="page" href="#">RECOMENDACIÓN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--Carrusel, tercera parte-->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src= "{{asset('images/planodelbiencomer.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="textRed">¿Sabes Cómo Porcionar tu Plato? </h5>
              <p class="textRed">El Plato del Bien Comer, es un indicador de racionamiento alimentario</p>
              <button class="btn btn-outline-light"><a class = "nav-link active text-black" aria-current="page" href="{{route('foods.list')}}">¿Quieres Saber Más?</a>
            </div>
          </div>
          <div class="carousel-item">
            <img id = "cuidadoNutricio" src="{{asset('images/cuidadoNutricional.png')}}" class="d-block w-100 h-75 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="textRed">¿Quieres conocer sobre el cuidado Nutricional?</h5>
                <p class="textRed">La evaluación es muy compleja, por ello debemos de seguir una serie de instrucciones </p>
                <button class="btn btn-outline-light"><a class = "nav-link active text-black" aria-current="page" href="#">¿Quieres Saber Más?</a>
            </div>
          </div>
          <div class="carousel-item">
            <img id = "quesonlosmacro" src="{{asset('/images/quesonlosmacro.png')}}" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="textRed">¿Sabes que son los MacronNutrientes?</h5>
                <p class="textRed">Son compuestos químicos formados principalmente por Carbono, Oxígeno e Hidrógeno</p>
                <button class="btn btn-outline-light"><a class = "nav-link active text-black" aria-current="page" href="{{route('compositions.list')}}">¿Quieres Saber Más?</a>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!--Cuarta parte-->
    <section id="nutricion">
        <div class="container">
            <div class="row mt-5">
                <h3 id = "tituloConocerNutricion" class="title text-center">¿Quieres conocer sobre Nutrición?</h3>
                <hr class="hr-orange-lg">
            </div>
            <div class="row my-5">
                <div id = "seccionMacro" class="col-md-3 col-sm-12">
                    <h4 id = "titleMacro" class="title mb-3">MacroNutrientes</h4>
                    <p id = "parrafoMacro">Los macronutrientes son aquellos tipos de nutrientes que se encuentran en grandes cantidades en los alimentos.</p>
                    <ul id = "listaMacro" class="list-unstyled">
                        <li class="nav-item my-2">
                            <a class = "nav-link active text-black" aria-current="page" href="#">Proteínas</a>
                        </li>
                        <li class="nav-item my-2">
                            <a class = "nav-link active text-black" aria-current="page" href="#">Hidratos de Carbono</a>
                        </li>
                        <li class="nav-item my-2">
                            <a class = "nav-link active text-black" aria-current="page" href="#">Lípidos</a>
                        </li>
                    </ul>
                    <button id = "btnMacro" class="btn btn-outline-info mb-3"><a class = "nav-link active text-black" aria-current="page" href="{{route('nutrients.list')}}">¿Quieres Saber Más?</a>
                </div>
                <div id = "seccionMacro" class="col-md-3 col-sm-12 text-center py-5">
                    <img src="https://static.wixstatic.com/media/d7291c_b9ab6ce969b2409cb207ee255e6939c1~mv2.png/v1/fill/w_921,h_514,al_c,q_90,enc_auto/d7291c_b9ab6ce969b2409cb207ee255e6939c1~mv2.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-3 col-sm-12">
                    <h4 id = "titleMicro" class="title mb-3">MicroNutrientes</h4>
                    <p id = "parrafoMicro" >Los micronutrientes, generalmente derivados de la ingesta de alimentos, son pequeñas cantidades de vitaminas y minerales requeridos por el cuerpo para la mayoría de las funciones celulares.</p>
                    <button id = "btnMicro" class="btn btn-outline-info"><a class = "nav-link active text-black" aria-current="page" href="{{route('nutrients.list')}}">¿Quieres Saber Más?</a>
                </div>
                <div class="col-md-3 col-sm-12">
                    <img src="{{asset('/images/micronutrientes.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <!------Quinta Parte------>
    <section id="mitos">
        <div class="container-fluid mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 p-2">
                        <h1 id = "tituloVitaminas" class="title-orange mt-5">¿Las Vitaminas Engordan?</h1>
                        <hr class="hr-white">
                        <p id = "parrafoVitaminas" class="light-text">Las vitaminas son nutrientes que no aportan energía, por lo tanto no es posible que hagan subir de peso. Las cantidades necesarias son diferentes según la persona.</p>
                        <button id = "btnVitaminas" class="btn btn-outline-info"><a class = "nav-link active text-black" aria-current="page" href="#">¿Quieres Saber Más?</a>
                        </button>
                    </div>
                    <div class="col-md-6 col-sm-12 right">
                        <img src="{{asset('/images/mitosNutricionales.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img src="{{asset('/images/mitosfruta.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 right">
                        <h1 id = "tituloFruta" class="title-dark mt-5">¿La Fruta Engorda?</h1>
                        <hr class="hr-orange">
                        <p id = "parrafoFruta" class="dark-text">Debemos mantener una ingesta de 1 a 2 porciones de frutas al día, el consumo en exceso aumenta las kilocalorías recomendadas, lo cual puede resultar perjudicial. </p>
                        <button id = "btnFrutas" class="btn btn-outline-info"><a class = "nav-link active text-black" aria-current="page" href="#">¿Quieres Saber Más?</a>
                        </button>
                    </div>
                </div>
            </div>	
        </div>
    </section>
    <!--Sexta Parte cartas (ESTO ES CON BASE DE DATOS)-->
    <section id="alimentos">
        <div class="container">
            <div class="row mt-5">
                <h1 class="title text-center">¿CÓNOCIAS ESTOS BENEFICIOS ALIMENTARIOS?</h1>
                <hr class="hr-orange-lg">
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div id = "cardCanela" class="card p-4 mt-3">
                        <img id = "beneficiosDeLaCanela" class = "img-fluid" src="{{asset('/images/beneficiosDeLaCanela.jpeg')}}" alt="">
                        <div class="card-body">
                            <h5 class="mt-3 text-black">Té de Canela</h5>
                            <p id = "parrafoCanela" class="my-3 text-black">Ayuda al control de la Diabetes, además de que tiene propiedades antioxidantes que fortalecen el sistema inmunológico y ayudan a prevenir cáncer y enfermedades del corazón.</p>
                            <button id = "btnCanela" class="btn btn-link"><a class = "nav-link active text-black" aria-current="page" href="{{route('foods.list')}}">¿Quieres Saber Más?</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div id = "cardFibra" class="card p-4 mt-3">
                        <img id = "beneficiosDeFibra" class = "img-fluid" src="{{asset('/images/beneficiosdeFibra.png')}}" alt="">
                        <div class="card-body">
                            <h5 class="mt-3 text-black">¿Sabes los Beneficios del Consumo?</h5>
                            <p id = "parrafoFibra" class="my-3 text-black">Ayuda a Reducir el Colesterol en la Sangre</p>
                            <button id = "btnFibra" class="btn btn-link"><a class = "nav-link active text-black" aria-current="page" href="{{route('foods.list')}}">¿Quieres Saber Más?</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div id = "cardJamaica" class="card p-4 mt-3">
                        <img id = "beneficioDeJamaica" class = "img-fluid" src="{{asset('/images/beneficioConsumoJamaica.jpg')}}" alt="">
                        <div class="card-body">
                            <h5 class="mt-3 text-black">¿Cónocias esto del consumo de Jamaica?</h5>
                            <p id = "parrafoJamaica" class="my-3 text-black">La flor de jamaica, contiene vitaminas (A, C, B1, E) y minerales como el hierro, fosfato y calcio. Es una fibra natural, conteniendo propiedades antioxidantes, antisépticas, purgativas, diuréticas, astringentes, emolientes y sedantes.</p>
                            <button id = "btnJamaica" class="btn btn-link"><a class = "nav-link active text-black" aria-current="page" href="{{route('foods.list')}}">¿Quieres Saber Más?</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Septima Sección proteinas carbohidraots y grasas(ESTO ES CON BASE DE DATOS)-->
    <section id="macroNutrientes">
        <div class="container-fluid hero">
            <div class="container">
                <div class="row mt-5">
                    <h1 id = "titleSeccionMacro" class="title text-center">Macro Nutrientes</h1>
                    <hr class="hr-orange-lg">
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-3 my-5">
                        <img id = "consumoDeProteina" src="{{asset('/images//beneficiosDelConsumoDeProteina.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6 align-self-center">
                        <h2 id = "titleProteinas" class="title">Proteínas</h2>
                        <hr class="hr-white-md">
                        <p id = "proteinasParrafo" class="justificaProteina">Las proteínas están formadas por aminoácidos.Piensa en ellos como piezas para armar que se pueden descomponer y volver a montar de diferentes maneras. Las proteínas y los aminoácidos son los componentes principales de nuestros músculos, huesos, piel, tejidos y órganos.</p>
                    </div>
                    <div class="col-md-3 my-5 ms-auto align-self-end right"> 
                        <button id = "btnProteina" class="btn btn-outline-info"><a class = "nav-link active text-black" aria-current="page" href="#">¿Quieres Saber Más?</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 p-2">
                        <h1 id = "titleHC" class="title">Hidratos de Carbono</h1>
                        <hr class="hr-white">
                        <p id = "parrafoHC" class="light-text">Brindan energía a todos los órganos del cuerpo, desde el cerebro hasta los músculos y funcionan como un combustible rápido y fácil de obtener por parte del cuerpo humano. Intervienen reduciendo la fatiga y en la recuperación tras realizar alguna actividad física.</p>
                        <button id = "btnHC" class="btn btn-outline-info"><a class = "nav-link active text-black" aria-current="page" href="#">¿Quieres Saber Más?</a>
                        </button>
                    </div>
                    <div class="col-md-6 col-sm-12 right">
                        <img src="{{asset('/images/funcionesDeLosHC.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div id = "seccionLip" class="container-fluid mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 right">
                        <img id = "tiposDeGrasa" src="{{asset('/images/tiposDeGrasa.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 p-2">
                        <h1 id = "titleLp" class="title">Lípidos</h1>
                        <hr class="hr-white">
                        <p id = "parrafoLip" class="light-text">
                            Las grasas o lípidos se dividen en tres grupos: lípidos de alta densidad (colesterol bueno), lípidos de baja densidad (colesterol malo) y triglicéridos.
                            <br> Los lípidos de alta densidad ayudan a limpiar tu organismo de las grasas malas, evitando que estas se peguen en las arterias y las tapen. 
                        </p>
                        <button id = "btnLip" class="btn btn-outline-info"><a class = "nav-link active text-black" aria-current="page" href="#">¿Quieres Saber Más?</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Octaba parte MicroNutrientes (esto va con base de datos)-->
    <section id="microNutrientes">
        <div class="container">
            <div class="row mt-5">
                <h1 id = "tituloMicro" class="title text-center">Micro Nutrientes</h1>
                <hr class="hr-orange-lg">
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div id = "acidoFolico" class="card p-4 mt-3 mb-5">
                        <img id = "beneficiosDelAcidoFolico" class = "img-fluid" src="{{asset('/images/acidoFolico.png')}}" alt="">
                        <div class="card-body mb-5">
                            <h5 id = "tituloAC" class="mt-3 text-black">¿Sabes en qué te ayuda el Ácido Fólico?</h5>
                            <h5 class="mt-2 text-black">Además</h5>
                            <p id = "parrafoAC" class="my-3 text-black">El ácido fólico es una vitamina del complejo B9, que es fundamental para prevenir enfermedades degenerativas como la diabetes.</p>
                            <button id = "saberMasAC" class="btn btn-link"><a class = "nav-link active text-black" aria-current="page" href="#">¿Quieres Saber Más?</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div id = "beneficiosDeBDoce" class="card p-4 mt-3 mb-5">
                        <img id = "beneficiosDeBDoceIMG" class = "img-fluid" src="{{asset('/images/carenciaDeBDoce.png')}}" alt="">
                        <div class="card-body mb-5">
                            <h5 id = "tituloDeficiencias" class="mt-3 text-black">¿Sabes que la deficiencia es peligrosa?</h5>
                            <p id = "parrafoDeficiencias" class="my-3 text-black">La carencia de vitamina B12 puede ocasionar una reducción de los glóbulos rojos saludables (anemia). El sistema nervioso también puede resultar afectado.</p>
                            <button id = "saberMasVit" class="btn btn-link"><a class = "nav-link active text-black" aria-current="page" href="#">¿Quieres Saber Más?</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div id = "beneficioDeHierro" class="card p-4 mt-3 mb-5">
                        <img id = "beneficioDeHierroIMG" class = "img-fluid" src="{{asset('/images/hierroConsumo.jpeg')}}" alt="">
                        <div class="card-body mb-5">
                            <h5 id = "tituloHierro" class="mt-3 text-black">El Hierro es Importante</h5>
                            <h5 class="mt-2 text-black">¿Quieres saber por qué?</h5>
                            <p id = "parrafoHierro" class="my-3 text-black">El hierro es un mineral necesario para el crecimiento y desarrollo del cuerpo. El cuerpo utiliza el hierro para fabricar la hemoglobina, una proteína de los glóbulos rojos que transporta el oxígeno.</p>
                            <button id = "saberMasHe" class="btn btn-link"><a class = "nav-link active text-black " aria-current="page" href="#">¿Quieres Saber Más?</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Novena Parte HERO (va con base de datos amikos)-->
    <div id = "esElHero" class="container-fluid ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 mt-4">
                    <h1 id = "tituloSuplementos" class="title">Suplementos Nutricionales</h1>
                    <hr class="hr-orange-lg">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-4 right">
                    <img id = "consumoDeCreatina" class = "img-fluid mb-5" src="{{asset('/images/consumoCreatina.jpg')}}" alt="creatina">
                </div>
                <div class="col-lg-6">
                    <h1 id = "tituloQueSonSuplementos" class="title">¿Qué son los Suplementos</h1>
                    <hr class="hr-white">
                    <p id = "parrafoSuplementos" class="light-text">Se definen como aquellos productos a base de hierbas, extractos vegetales, alimentos tradicionales, deshidratados o concentrados de frutas, adicionados o no, de vitaminas o minerales, que se puedan presentar en forma farmacéutica y cuya finalidad de uso es incrementar la ingesta dietética total, complementarla o suplir algún componente, no pudiendo estar compuestos únicamente de vitaminas y minerales.</p>
                    <hr class="hr-orange-lg">
                    <h2 id="tituloCuandoConsumirlos" class="title">¿Cuando Consumirlos?</h2>
                    <p id = "parrafoConsumirlos" class="light-text">Los complementos alimenticios sólo están indicados cuando la dieta no pueda satisfacer por completo los requerimientos nutricionales.
                    </p>
                </div>
                <div class="col-md-2 my-5 ms-auto align-self-end right"> 
                    <button id = "btnSuplementos" class="btn btn-outline-danger"><a class = "nav-link active text-black" aria-current="page" href="{{route('suplements.list')}}">Conoce Más</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--Decima Parte-->
    <div id = "laMentira" class="container-fluid">
        <div class="container">
            <div class="row mb-2 text-center">
                <div class="col-lg-12">
                    <h4 id = "enterateDelChisme" >Sabes lo que Sucedió!! </h4>
                    <div class="col-lg-12 col-sm-12">
                        <button id = "btnCTA" class="">
                            <a class = "nav-link active text-black" aria-current="page" href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiiotLguo2CAxU5lWoFHdYxCwUQFnoECAYQAQ&url=https%3A%2F%2Fwww.who.int%2Fes&usg=AOvVaw15Lu2ldifRaXQCKX-8dL-_&opi=89978449">DA CLICK!</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--onceava parte--->
    <section id = "sectionContact">
        <div id = "onceaba" class="container-fluid">
            <div class="container">
                <div class="row">
                    <hr class="hr-orange-lg">
                    <div class="col-lg-6 col-sm-12">
                        <h5 id = "tituloInfoPag" class="text-center mb-5">Información de la Página</h5>
                        <ul id = "listaColumna" class="list-unstyled lista-columns border-separacion">
                            <li>Macro Nutrientes</li>
                            <li>Micro Nutrientes</li>
                            <li>Mitos</li>
                            <li>Beneficios</li>
                            <li>Proteina</li>
                            <li>Lípidos</li>
                            <li>Hidratos de Carbono</li>
                        </ul>
                    </div>
                    <div id = "sectionContact" class="col-lg-6 col-sm-12">
                        <h5 id = "tituloContacto" class="text-center mb-5">Contacto</h5>
                        <ul id = "listaColumna" class="list-unstyled lista-columns border-separacion">
                            <li>Celular : +52 665588</li>
                            <li>Correo: A@gmail.com</li>
                            <li>Facebook</li>
                            <li>Twiter</li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>
    </div>

    @endsection

