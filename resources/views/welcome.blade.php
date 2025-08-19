<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Cultura Charra</title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
        <link rel="stylesheet" href="{{ asset('css/simplegrid.css')}}">
        <link rel="stylesheet" href="{{ asset('css/icomoon.css')}}">
        <link rel="stylesheet" href="{{ asset('css/lightcase.css')}}">
        <link rel="stylesheet" href="{{ asset('js/owl-carousel/owl.carousel.css')}}" />
        <link rel="stylesheet" href="{{ asset('js/owl-carousel/owl.theme.css')}}" />
        <link rel="stylesheet" href="{{ asset('js/owl-carousel/owl.transitions.css')}}" />
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">

        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        </head>
        <body id="home">
            <!-- Inicio Header -->
            <header id="top-header" class="header-home">
                <div class="grid">
                    <div class="col-1-1">
                        <div class="content">
                            <div class="logo-wrap">
                                <a href="/" class="logo">CulturaCharra</a>
                            </div>
                            <nav class="navigation">
                                <input type="checkbox" id="nav-button">
                                <label for="nav-button" onclick></label>
                                <ul class="nav-container">
                                    <li><a href="#home" class="current">Inicio</a></li>
                                    <li><a href="#services">Servicios</a></li>
                                    <li><a href="#work">Galería</a></li>
                                    <li><a href="#blog">Socios</a></li>
                                    <li><a href="#pricing">Precios</a></li>
                                    <li><a href="#team">Equipo</a></li>
                                    <li><a href="#contact">Contacto</a></li>
                                    <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Fin Header -->

            <!-- Inicio sección principal -->
            <div class="parallax-section parallax1">
                <div class="grid grid-pad">
                    <div class="col-1-1">
                        <div class="content content-header" >
                            <h2>Festeja con identidad y cultura.</h2>
                            <p>Nos dedicamos a honrar y promover la rica tradición del mariachi, ese símbolo de identidad que une corazones y trasciende fronteras. Nuestro propósito es ser un puente entre el pasado y el presente, impulsando esta invaluable expresión cultural que representa el alma de México.</p>
                            <a class="btn read-more" href="{{ url('/cultura') }}">Ver Mas</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Parallax Section -->

            <!-- CurveUp -->
            <svg class="curveUpColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 C 20 0 50 0 100 100 Z"></path>
            </svg>

            <!-- Services Section -->
            <div class="wrap services-wrap" id="services">
                <section class="grid grid-pad services">
                    <h2>Nuestros Servicios</h2>
                    <div class="col-1-4 service-box service-1" >
                        <div class="content">
                            <div class="service-icon">
                                <i class="circle-icon icon-user6"></i>
                            </div>
                            <div class="service-entry">
                                <h3>Contacta fácilmente con un mariachi</h3>
                                <p>Encuentra y contacta con mariachis profesionales 
                                    en tu ciudad de manera rápida y sencilla. Solo ve 
                                    a nuestro apartado de <a href="#blog">Socios</a>
                                    y contacta con el mariachi de tu preferencia. 
                                    ¡Haz de tu evento un momento inolvidable con el 
                                    mejor mariachi!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-4 service-box service-2" >
                        <div class="content">
                            <div class="service-icon">
                                <i class="circle-icon icon-heart4"></i>
                            </div>
                            <div class="service-entry">
                                <h3>Revisa nuestra amplia galería</h3>
                                <p>Descubre la magia y alegría que un mariachi puede 
                                    aportar a cualquier celebración. En nuestra galería, 
                                    encontrarás fotos de eventos inolvidables. ¡Déjate 
                                    inspirar y haz de tu evento algo único con el mejor 
                                    mariachi!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-4 service-box service-3">
                        <div class="content">
                            <div class="service-icon">
                                <i class="circle-icon icon-star4"></i>
                            </div>
                            <div class="service-entry">
                                <h3>Mariachis con equipo de sonido de calidad</h3>
                                <p> Asegura un espectáculo inolvidable para tus 
                                    clientes, con un sonido de calidad a la altura de 
                                    tu talento. Ya sea para un evento al aire libre o 
                                    en un salón cerrado, asegúrate de que todos te 
                                    escuchen y te acompañen en tus canciones.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-4 service-box service-4" >
                        <div class="content">
                            <div class="service-icon">
                                <i class="circle-icon icon-display"></i>
                            </div>
                            <div class="service-entry">
                                <h3>El equipo de sonido con excelente gestión</h3>
                                <p>Nosotros garantizamos una excelente gestión de tu 
                                    equipo de sonido, desde el manejo del inventario 
                                    y la creación de nóminas hasta la organización de 
                                    tu itinerario de eventos y la disponibilidad para 
                                    cubrirlos. Esto y mucho más podemos ofrecerte.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </section>
                <a class="btn read-more" href="{{ url('/servicios') }}" style="display: block; margin: 0 auto; width: fit-content;">Ver Más</a>
            </div>
            <!-- End Services Section -->
            
            <!-- CurveDown -->
            <svg class="curveDownColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 0 C 50 100 80 100 100 0 Z"></path>
            </svg>

            <!-- Inico seccion de trabajo -->
            <div class="wrap grey recent-wrap" id="work">
                <section class="grid grid-pad">
                    <h2>Galería</h2>
                    <!-- Start of Filter section -->
                    <div class="col-1-1 mix">
                        <ul class="filters" >
                            <li class="filter active" data-filter="all">Todo</li>
                            <li class="filter" data-filter=".illustration">Bodas</li>
                            <li class="filter" data-filter=".web-design">XV</li>
                            <li class="filter" data-filter=".photography">Cumpleaños</li>
                        </ul>
                    </div>
                    <!-- End of Filter section -->
                    <div class="portfolio-items" >
                        <div class="col-1-3 mix illustration">
                            <div class="content">
                                <div class="recent-work">
                                    <img src="images/work/1-small.jpg" alt="">                                    
                                    <div class="overlay">
                                        <span>Boda</span>
                                        <h2><a class="img-wrap" data-rel="lightcase:Boda" title="Mariachi Guadalajara" href="images/work/1-big.jpg">Mariachi Guadalajara</a></h2>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-1-3 mix photography">
                            <div class="content">
                                <div class="recent-work">
                                    <img src="images/work/5-small.jpg" alt="">
                                    <div class="overlay">
                                        <span>Cumpleaños</span>
                                        <h2><a class="img-wrap" data-rel="lightcase:Cumpleaños" title="Los Galleros" href="images/work/5-big.jpg">Los Galleros</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1-3 mix illustration">
                            <div class="content">
                                <div class="recent-work">
                                    <img src="images/work/2-small.jpg" alt="">
                                    <div class="overlay">
                                        <span>Boda</span>
                                        <h2><a class="img-wrap" data-rel="lightcase:Boda" title="Mariachi Guadalajara" href="images/work/2-big.jpg">Mariachi Guadalajara</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1-3 mix photography">
                            <div class="content">
                                <div class="recent-work">
                                    <img src="images/work/8-small.jpg" alt="">
                                    <div class="overlay">
                                        <span>Cumpleaños</span>
                                        <h2><a class="img-wrap" data-rel="lightcase:photography" title="Así es Tecolotlán" href="images/work/8-big.jpg">Asi es Tecolotlán</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1-3 mix web-design">
                            <div class="content">
                                <div class="recent-work">
                                    <img src="images/work/6-small.jpg" alt="">
                                    <div class="overlay">
                                        <span>XV</span>
                                        <h2><a class="img-wrap" data-rel="lightcase:XV" title="Femenil Nuevo Tecatitlán" href="images/work/6-big.jpg">Femenil Nuevo Tecatitlán</a></h2>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-1-3 mix web-design">
                            <div class="content">
                                <div class="recent-work">
                                    <img src="images/work/3-small.jpg" alt="">
                                    <div class="overlay">
                                        <span>XV</span>
                                        <h2><a class="img-wrap" data-rel="lightcase:XV" title="Mariachi Guadalajara" href="images/work/3-big.jpg">Mariachi Guadalajara</a></h2>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-1-3 mix photography">
                            <div class="content">
                                <div class="recent-work">
                                    <img src="images/work/7-small.jpg" alt="">
                                    <div class="overlay">
                                        <span>Cumpleaños</span>
                                        <h2><a class="img-wrap" data-rel="lightcase:Cumpleaños" title="Femenil Nuevo Tecatitlán" href="images/work/7-big.jpg">Femenil Nuevo Tecatitlán</a></h2>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-1-3 mix illustration">
                            <div class="content">
                                <div class="recent-work">
                                    <img src="images/work/4-small.jpg" alt="">
                                    <div class="overlay">
                                        <span>Bodas</span>
                                        <h2><a class="img-wrap" data-rel="lightcase:Bodas" title="Los Galleros" href="images/work/4-big.jpg">Los Galleros</a></h2>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-1-3 mix illustration">
                            <div class="content">
                                <div class="recent-work">
                                    <img src="images/work/9-small.jpg" alt="">
                                    <div class="overlay">
                                        <span>Bodas</span>
                                        <h2><a class="img-wrap" data-rel="lightcase:Bodas" title="Los Galleros" href="images/work/9-big.jpg">Los Galleros</a></h2>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1-1"><a class="btn" href="{{ url('/galeria') }}">Ver Más</a></div>

                </section>  
            </div>
            <!-- Fin seccion de trabajo-->

            <!-- CurveUp -->
            <svg class="curveUpColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 C 20 0 50 0 100 100 Z"></path>
            </svg>

            <!-- Inicio seccion canciones -->
            <div class="wrap services-wrap" >
                <section class="grid grid-pad">
                    <div class="col-1-1 service-box cl-client-carousel-container">
                        <div class="content">
                            <div class="cl-client-carousel">
                                
                                <div class="item client-carousel-item"><!-- Start of item -->
                                <div class="quotes-icon">
                                    <i class="icon-quotes-left"></i>
                                </div>
                                <p>Acá entre nos<br>
                                    Siempre te voy a recordar<br>
                                    Y hoy que a mi lado ya no estás<br>
                                    No queda más que confesar<br>
                                    Que ya no puedo soportar<br>
                                    Que estoy odiando sin odiar<br>
                                    Porque respiro por la herida</p>
                                <h4>-Vicente Fernández</h4>
                                </div><!-- End of item -->
                                
                                <div class="item client-carousel-item"><!-- Start of item -->
                                <div class="quotes-icon">
                                    <i class="icon-quotes-left"></i>
                                </div>
                                <p>Cuando estoy entre tus brazos<br>
                                    Siempre me pregunto yo<br>
                                    Cuanto me debía el destino<br>
                                    Que contigo me pagó<br>
                                    Por eso es que ya mi vida<br>
                                    Toda te la entrego a ti<br>
                                    Tú que me diste en un beso<br>
                                    Lo que nunca te pedí</p>
                                <h4>-Pedro Infante</h4>
                                </div><!-- End of item -->
                                <div class="item client-carousel-item"><!-- Start of item -->
                                <div class="quotes-icon">
                                    <i class="icon-quotes-left"></i>
                                </div>
                                <p>Si nos dejan<br>
                                    Buscamos un rincón cerca del cielo<br>
                                    Si nos dejan<br>
                                    Hacemos con las nubes terciopelo<br>
                                    Y ahí, juntitos los dos<br>
                                    Cerquita de Dios, será lo que soñamos<br>
                                    Si nos dejan<br>
                                    Te llevo de la mano corazón y allí nos vamos</p>
                                <h4>-José Alfredo Jiménez</h4>
                                </div>
                                <!-- End of item -->
                                
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Fin seecion canciones -->

            <!-- CurveDown -->
            <svg class="curveDownColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 0 C 50 100 80 100 100 0 Z"></path>
            </svg>

            <!-- Inicio seccion de socios -->
            <div class="wrap blog-grid grey" id="blog">
                <div class="grid grid-pad">
                    <div class="content" >
                        <h2>Mariachis Asociados </h2>
                        <div class="col-1-2" >
                            <article class="post-wrap">
                                <div class="post-img">
                                    <a href="#0"><img src="images/post/post-n1.jpg" alt=""></a>
                                </div>
                                <div class="post">
                                    <h2 class="entry-title"><a>Mariachi Guadalajara</a></h2>
                                    <div class="post-meta">
                                        <a href="https://www.instagram.com/mariachi_guadalajara_de_luis/">Instagram</a> <span class="mid-sep">·</span> <a href="https://www.facebook.com/MariachiGuadalajaraDeLuisGallardo">Facebook</a>
                                    </div>
                                    <p>El Mariachi Guadalajara es una agrupación de música vernácula mexicana creada por Luis Alberto Gallardo Diaz<br><br><br></p>
                                    <a class="btn read-more" href="https://wa.me/3311507976?text=Hola%2C%20quiero%20más%20información" target="_blank">Contactar</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-1-2" >
                            <article class="post-wrap">
                                <div class="post-img">
                                    <a><img src="images/post/post-n2.jpg" alt=""></a>
                                </div>
                                <div class="post">
                                    <h2 class="entry-title"><a>Mariachi Los Galleros</a></h2>
                                    <div class="post-meta">
                                        <a href="https://www.instagram.com/gallerosdedannyrey/">Instagram</a> <span class="mid-sep">·</span> <a href="https://mariachidanny.com/?fbclid=IwZXh0bgNhZW0CMTAAAR2zt86ypAxur7ilVHOQvBYXSbUuFmx0v3vmb-7oo2Pm_ppJrpfn2bDktAI_aem_YTlQmoKaRd9QCxhPvMZo-Q">Pagina web</a>
                                    </div>
                                    <p>Mariachi Los Galleros De Danny Rey, conocido como "El Mariachi más querido de México," ha sido reconocido por su excelencia durante más de cinco décadas. Han acompañado a artistas de talla mundial como The Beatles, Linda Ronstadt, Vicente Fernández y muchos más.</p>
                                    <a class="btn read-more" href="https://wa.me/3339507510?text=Hola%2C%20quiero%20más%20información" target="_blank">Contactar</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-1-2" >
                            <article class="post-wrap">
                                <div class="post-img">
                                    <a href="#0"><img src="images/post/post-n3.jpg" alt=""></a>
                                </div>
                                <div class="post">
                                    <h2 class="entry-title"><a>Mariachi Femenil Nuevo Tecatitlán</a></h2>
                                    <div class="post-meta">
                                        <a href="https://www.instagram.com/mariachifemenilnuevotecalitlan/">Instagram </a> <span class="mid-sep">·</span> <a href="https://www.facebook.com/mariachifemenilnuevotecalitlan">Facebook</a>
                                    </div>
                                    <p>Nace un 1ero  de Mayo del 2006, en la ciudad de Guadalajara, agrupándose mujeres jóvenes ,talentosas, alegres y profesionales de la música mexicana; logrando posicionarse como uno de los mejores Mariachis dentro del gusto y la preferencia del público, con un estilo muy particular y único en este genero como Mariachi Femenil.</p>
                                    <a class="btn read-more" href="https://wa.me/3334004647?text=Hola%2C%20quiero%20más%20información" target="_blank">Contactar</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-1-2" >
                            <article class="post-wrap">
                                <div class="post-img">
                                    <a href="#0"><img src="images/post/post-n4.jpg" alt=""></a>
                                </div>
                                <div class="post">
                                    <h2 class="entry-title"><a>Mariachi Así es Tecolotlán</a></h2>
                                    <div class="post-meta">
                                        <a href="https://www.instagram.com/asies_tecolotlan/">Instagram</a> <span class="mid-sep">·</span> <a href="https://www.facebook.com/profile.php?id=100063705480477">Facebook</a>
                                    </div>
                                    <p>Somos sus amigos del Mariachi Así es Tecolotlán, un grupo de jovenes con mucha pasión y amor por la musica, que de la mano de nuestro maestro y director Agustin Perez aspiramos a ser de los mejores Mariachis de México, esperamos que nuestra musica sea de su agrado. "𝓙𝓤𝓥𝓔𝓝𝓣𝓤𝓓 𝓨 𝓣𝓡𝓐𝓓𝓘𝓒𝓘𝓞𝓝"</p>
                                    <a class="btn read-more" href="https://wa.me/3751074018?text=Hola%2C%20quiero%20más%20información" target="_blank">Contactar</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-1-1"><a class="btn" href="{{ url('/socios') }}">Ver Todo</a></div>
                    </div>
                </div>
            </div>
            <!-- Fin seccion socios -->

            <!-- CurveUp -->
            <svg class="curveUpColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 C 20 0 50 0 100 100 Z"></path>
            </svg>
            
            <!-- Seccion de precios -->
            <div class="wrap" id="pricing">
                <div class="grid grid-pad">
                    <div class="content" >
                        <div class="col-1-1">
                            <section id="price-tables">
                                <h2>Precios</h2>
                                <ul id="plans">
                                    <li class="plan" >
                                        <ul class="plan-wrap">
                                            <li class="title"><h2>Así es Tecolotlán</h2></li>
                                            <li class="price"><p>$5000/h</p></li>
                                            <li>
                                                <ul class="options">
                                                    <li>5 <span>Violines</span></li>
                                                    <li>2 <span>Trompetas</span></li>
                                                    <li>1 <span>Guitarra</span></li>
                                                    <li>1 <span>Vihuela</span></li>
                                                    <li>1 <span>Guitarrón</span></li>
                                                    <li>1 <span>Arpa</span></li>
                                                </ul>
                                            </li>
                                            <li><a class="btn btn-price" href="https://wa.me/3751074018?text=Hola%2C%20quiero%20más%20información" target="_blank">Contactar</a></li>
                                        </ul>
                                    </li>
                                    <li class="plan best-plan" >
                                        <ul class="plan-wrap">
                                            <li class="title"><h2 class="best-plan-title">Mariachi Guadalajara</h2></li>
                                            <li class="price"><p class="best-plan-price">$7000/h</p></li>
                                            <li>
                                                <ul class="options">
                                                    <li>6 <span>Violines</span></li>
                                                    <li>2 <span>Trompetas</span></li>
                                                    <li>2 <span>Guitarra</span></li>
                                                    <li>1 <span>Vihuela</span></li>
                                                    <li>1 <span>Guitarrón</span></li>
                                                    <li>1 <span>Arpa</span></li>
                                                </ul>
                                            </li>
                                            <li><a class="btn btn-price btn-best-plan" href="https://wa.me/3311507976?text=Hola%2C%20quiero%20más%20información" target="_blank">Contactar</a></li>
                                        </ul>
                                    </li>
                                    <li class="plan" >
                                        <ul class="plan-wrap">
                                            <li class="title"><h2>Femenil Nuevo Tecatitlán</h2></li>
                                            <li class="price"><p>$9000/h</p></li>
                                            <li>
                                                <ul class="options">
                                                    <li>7 <span>Violines</span></li>
                                                    <li>3 <span>Trompetas</span></li>
                                                    <li>2 <span>Guitarra</span></li>
                                                    <li>1 <span>Vihuela</span></li>
                                                    <li>1 <span>Guitarrón</span></li>
                                                    <li>1 <span>Arpa</span></li>
                                                </ul>
                                            </li>
                                            <li><a class="btn btn-price" href="https://wa.me/3334004647?text=Hola%2C%20quiero%20más%20información" target="_blank">Contactar</a></li>
                                        </ul>
                                    </li>
                                    <li class="plan" >
                                        <ul class="plan-wrap">
                                            <li class="title"><h2>Los Galleros de Danny Rey</h2></li>
                                            <li class="price"><p>$10,000/h</p></li>
                                            <li>
                                                <ul class="options">
                                                    <li>7 <span>Violines</span></li>
                                                    <li>3 <span>Trompetas</span></li>
                                                    <li>2 <span>Guitarra</span></li>
                                                    <li>1 <span>Vihuela</span></li>
                                                    <li>1 <span>Guitarrón</span></li>
                                                    <li>1 <span>Arpa</span></li>
                                                </ul>
                                            </li>
                                            <li><a class="btn btn-price" href="https://wa.me/3339507510?text=Hola%2C%20quiero%20más%20información" target="_blank">Contactar</a></li>
                                        </ul>
                                    </li>
                                    </ul>
                                    <a target="_blank" class="btn btn-ghost" href="{{ url('/precios') }}">Ver mas</a>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Pricing Section -->

                <!-- CurveDown -->
                <svg class="curveDownColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M0 0 C 50 100 80 100 100 0 Z"></path>
                </svg>

                <!-- Parallax Section - Counter -->
                <div class="parallax-section parallax2">                    
                    <div class="wrap">
                        <section class="grid grid-pad callout">
                            <div class="col-1-3">
                                <div class="content" >
                                <div class="info-counter">
                                        <div class="info-counter-row">
                                            <i class="info-counter-icon icon-mug"></i>
                                        </div>
                                        <div class="info-counter-content">
                                            <h5 class="info-counter-number">
                                            <span class="counter">10</span>
                                            <span class="info-counter-units">Colaboradores</span>
                                            </h5>
                                        <div class="info-counter-text">Trabajando para nuestra Cultura</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1-3">
                                <div class="content" >
                                <div class="info-counter">
                                        <div class="info-counter-row">
                                            <i class="info-counter-icon icon-glass"></i>
                                        </div>
                                        <div class="info-counter-content">
                                            <h5 class="info-counter-number">
                                            <span class="counter">1000</span>
                                            <span class="info-counter-units">Festejos</span>
                                            </h5>
                                        <div class="info-counter-text">Dandonos a conocer en todo lugar</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-1-3">
                                <div class="content" >
                                <div class="info-counter">
                                        <div class="info-counter-row">
                                            <i class="info-counter-icon icon-trophy"></i>
                                        </div>
                                        <div class="info-counter-content">
                                            <h5 class="info-counter-number">
                                            <span class="counter">100000</span>
                                            <span class="info-counter-units">Sonrisas</span>
                                            </h5>
                                        <div class="info-counter-text">Quedandonos en los corazones</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- End Parallax Section -->

                <!-- CurveUp -->
                <svg class="curveUpColor curveGrey" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M0 100 C 20 0 50 0 100 100 Z"></path>
                </svg>

                <!-- Team Section -->
                <div class="wrap team-wrap grey" id="team">
                    <div class="grid grid-pad">
                        <div class="content" >
                            <h2>Nuestro Equipo</h2>
                            <div class="col-1-4" >
                                <div class="content staff-content">
                                    <div class="recent-work ">
                                        <div class="work-info staff-info">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-1-4" >
                                <div class="content staff-content ">
                                    <div class="recent-work staff-img" >
                                        <div class="img-wrap staff-img">
                                            <img src="images/team/user2.png" alt="" >
                                            <div class="team-social">
                                                <a class="sl-fb" href="https://www.facebook.com/andres.navarrovelazquez/"><i class="icon-facebook"></i></a>
                                                <a class="sl-tw" href="https://www.instagram.com/andres_navarro_el_moreno/"><i class="icon-instagram"></i></a>
                                                <a class="sl-gp" href="https://github.com/AndresNavarroV"><i class="icon-github"></i></a>
                                                <a class="sl-ln" href="https://www.linkedin.com/in/andres-navarro-velazquez-62994931a/"><i class="icon-linkedin"></i></a>
                                            </div>
                                        </div>
                                        <div class="work-info staff-info">
                                            <h5>Andres Navarro</h5>
                                            <span>Líder de Proyecto, Desarrollador y Diseñador</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1-4" >
                                <div class="content staff-content">
                                    <div class="recent-work staff-img">
                                        <div class="img-wrap staff-img">
                                            <img src="images/team/user1.png" alt="">
                                            <div class="team-social">
                                                <a class="sl-gp" href="https://github.com/DiegoGasparMtz"><i class="icon-github"></i></a>
                                                <a class="sl-ln" href="https://github.com/DiegoGasparMtz"><i class="icon-linkedin"></i></a>
                                            </div>
                                        </div>
                                        <div class="work-info staff-info">
                                            <h5>Diego Gaspar</h5>
                                            <span>Diseñador, Documentador y Analista</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Team Section -->

                <!-- CurveUp -->
                <svg class="curveUpColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M0 100 C 20 0 50 0 100 100 Z"></path>
                </svg>

                <!-- Clients Logos Section -->
                <div class="wrap" >
                    <div class="grid grid-pad">
                        <div class="col-1-1">
                            <div class="content">
                                <!-- Start of Carousel Container -->
                                
                                <!-- End of Carousel Container -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Clients Logos Section -->

                <!-- CurveDown -->
                <svg class="curveDownColor curveMapUp" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M0 0 C 50 100 80 100 100 0 Z"></path>
                </svg>
                
                <!-- Parallax Section -->
                <div class="map">                    
                    <div class="wrap">
                        <section id="cd-google-map">
                            <div id="google-container"></div>
                            <div id="cd-zoom-in"></div>
                            <div id="cd-zoom-out"></div>
                        </section>
                    </div>
                </div>
                <!-- End Parallax Section -->

                <!-- CurveUp -->
                <svg class="curveUpColor curveMapDown" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M0 100 C 20 0 50 0 100 100 Z"></path>
                </svg>

                <!-- Contact Section -->
                <div class="wrap contact" id="contact">
                    <div class="grid grid-pad" >
                        <h2>Contacto <br><br></h2>
                        <div class="col-1-2" >
                            <div class="content address">
                                <h3>Contactanos</h3>
                                <p>Estamos aquí para ayudarte con cualquier duda, comentario o sugerencia que tengas. No dudes en ponerte en contacto con nosotros a través de nuestro formulario, correo electrónico o redes sociales.</p>
                                <address>
                                    <div>
                                        <div class="box-icon">
                                            <i class="icon-location"></i>
                                        </div>
                                        <span>Dirección:</span>
                                        <p>Centro Universitario de Ciencias Exactas e Ingenierías</p>
                                    </div>
                                    
                                    <div>
                                        <div class="box-icon">
                                            <i class="icon-clock"></i>
                                        </div>
                                        <span>Horario de Trabajo:</span>
                                        <p>Lunes - Viernes de 9:00 am - 5:00 pm</p>
                                    </div>
                                    
                                    <div>
                                        <div class="box-icon">
                                            <i class="icon-phone"></i>
                                        </div>
                                        <span>Telefono:</span>
                                        <p>+52 3326340808</p>
                                    </div>                                  
                                </address>
                            </div>
                        </div>
                        <div class="col-1-2 pleft-25" >
                            <div class="content contact-form">
                                <form class="form">
                                    <input type="text" class="comment-name" placeholder="Nombre*" required>
                                    <input type="email" class="comment-email" placeholder="Email*" required>
                                    <input type="text" class="comment-subject" placeholder="Asunto">
                                    <textarea class="required comment-text" placeholder="Mensaje..." required></textarea>
                                    <input type="submit" value="Mandar Mensaje" class="btn submit comment-submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Contact Section -->

                <!-- CurveDown -->
                <svg class="curveDownColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M0 0 C 50 100 80 100 100 0 Z"></path>
                </svg>

                <!-- Footer -->
                <footer class="wrap">
                    <div class="grid grid-pad">
                        <div class="col-1-4">
                            <div class="content">
                                <div class="footer-widget">
                                    <h3>Sobre Nosotros</h3>
                                    <div class="textwidget">
                                        <p>Promovemos y preservamos la rica tradición de los mariachis, un símbolo de la cultura mexicana.</p><br>
                                        <p>Unimos generaciones a través de la música, las historias y el arte del mariachi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1-4">
                            <div class="content">
                                <div class="footer-widget">
                                    <h3>Publicaciones Recientes</h3>
                                    <div class="fwidget">
                                        <ul>
                                            <li><a href="#services">Nuestros Servicios</a></li>
                                            <li><a href="#work">Nuestra galería</a></li>
                                            <li><a href="#blog">Mariachis socios</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1-4">
                            <div class="content">
                                <div class="footer-widget">
                                    <h3>Más Información</h3>
                                    <div class="textwidget">
                                        <p>Descubre talleres, eventos y recursos para fomentar la tradición del mariachi.</p><br>
                                        <p>¡Sé parte de la comunidad que mantiene viva esta hermosa cultura!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1-4">
                            <div class="content">
                                <div class="footer-widget">
                                    <h3>Galería</h3>
                                    <div class="flickr-widget">
                                        <ul class="flickr-list">
                                            <li><a href="{{ url('/galeria') }}"><img src="images/flickr-widget/flickr1.jpg" alt="Mariachi IA"></a></li>
                                            <li><a href="{{ url('/galeria') }}"><img src="images/flickr-widget/flickr2.jpg" alt="Mariachi IA2"></a></li>
                                            <li><a href="{{ url('/galeria') }}"><img src="images/flickr-widget/flickr3.jpg" alt="Mariachi peluche"></a></li>
                                            <li><a href="{{ url('/galeria') }}"><img src="images/flickr-widget/flickr4.jpg" alt="Mariachi peluche2"></a></li>
                                            <li><a href="{{ url('/galeria') }}"><img src="images/flickr-widget/flickr5.jpg" alt="Mariachi animado"></a></li>
                                            <li><a href="{{ url('/galeria') }}"><img src="images/flickr-widget/flickr6.jpg" alt="Mariachi animado2"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social-footer">
                        <div class="grid grid-pad">
                            <div class="col-1-1">
                                <div class="content">
                                    <div class="social-set">
                                        <a href="https://www.facebook.com/andres.navarrovelazquez"><i class="icon-facebook"></i></a>
                                        <a href="https://www.instagram.com/andres_navarro_el_moreno/"><i class="icon-instagram"></i></a>
                                        <a href="https://github.com/AndresNavarroV"><i class="icon-github"></i></a>
                                        <a href="https://www.linkedin.com/in/andres-navarro-velazquez-62994931a/"><i class="icon-linkedin"></i></a>
                                    </div>
                                    <p class="source-org copyright">© 2025 | Todos los derechos reservados. Creado por <a href="http://tuculturamariachi.com">White Dragon Estudios</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

                <div class="loader-overlay">
                    <div class="loader">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                </div>

                <!-- JS -->
                <script src="{{ url('js/jquery.js') }}"></script>
                <script src="{{ url('js/main.js') }}"></script>
                <script src="{{ url('js/mixitup.js') }}"></script>
                <script src="{{ url('js/smoothscroll.js') }}"></script>
                <script src="{{ url('js/jquery.nav.js') }}"></script>
                <script src="{{ url('js/owl-carousel/owl.carousel.min.js') }}"></script>
                <script src="{{ url('https://maps.googleapis.com/maps/api/js') }}"></script>
                <script src="{{ url('http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js') }}"></script>
                <script src="{{ url('js/jquery.counterup.min.js') }}"></script>
                <script src="{{ url('js/lightcase.min.js') }}"></script>
            </body>
        </html>