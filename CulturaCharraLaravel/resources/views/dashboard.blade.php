<x-app-layout>

    <!doctype html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            <title>Eventos Mariachis</title>
    
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
    
            <style>
                body {
                    overflow-x:visible; /* Oculta el scrollbar horizontal */
                }
    
            </style>
            </head>
            <body id="home">
                <!-- Inicio Header -->
                <header id="top-header" class="header-home">
                    <div class="grid">
                        <div class="col-1-1">
                            <div class="content">
                                <div class="logo-wrap">
                                    <a href="index.html" class="logo">CulturaCharra</a>
                                </div>
    <nav class="navigation">
        <input type="checkbox" id="nav-button">
        <label for="nav-button" onclick></label>
        <ul class="nav-container">
            <li><a href="{{ url('/') }}" class="current">Inicio</a></li>
            <li><a href="{{ url('eventos/create') }}">Registrar nuevo evento</a></li>
            <li><a href="#">Socios</a></li>
            <li><a></a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-link" style="border:none; background:none; padding:0; cursor:pointer;">
                        Cerrar sesión
                    </button>
                </form>
            </li>
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
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Parallax Section -->
    
                <!-- CurveUp -->
                <svg class="curveUpColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M0 100 C 20 0 50 0 100 100 Z"></path>
                </svg>
    
    <!-- Aquiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii -->

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
                                <li><a href="#work">Nuestra galeria</a></li>
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
    
</x-app-layout>
