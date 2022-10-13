<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Bienvenido a Dalitso Shop</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.min.css') }}" />

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container"> <a class="navbar-brand text-light" data-scroll-nav="0" href="">Gestión de
                productos</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="fas fa-bars"></span> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-dark" href="{{ route('productos.index') }}">Ver</a></li>
                            @can(['administrador'])
                                <li><a class="dropdown-item text-dark" href="{{ route('productos.create') }}">Crear
                                        nuevo</a></li>
                            @endcan
                        </ul>
                    </li>
                    @can(['administrador'])
                        <li class="nav-item " data-scroll-nav="2">
                            <a class="nav-link text-light" href="{{ route('productos.index') }}">Usuarios</a>
                        </li>
                    @endcan
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar..." name="buscar"
                        aria-label="Buscar">
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                </form>
                <ul class="navbar-nav text-dark ms-3">
                    @can(['administrador'])
                        <li class="nav-item dropdown" data-scroll-nav="3">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu text-dark">
                                <li>
                                    <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Cerrar sesión
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="post">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endcan
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Banner Image -->

    <div class="banner text-center" data-scroll-index='0'>
        <div class="banner-overlay">
            <div class="container">
                <h1 class="text-capitalize">Bienvenido a Dalitso Shop</h1>
                <p>Estar más allá de la moda, ese es nuestro arquetipo de estilo.</p>
                <a href="{{ route('productos.index') }}" class="banner-btn">Iniciar sesion</a>
            </div>
        </div>
    </div>

    <!-- End Banner Image -->

    <!-- About -->

    <div class="about-us section-padding" data-scroll-index='1'>
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title text-center">
                    <h3>Descubre nuestros nuevos productos.</h3>
                    <span class="section-title-line"></span>
                </div>
                <div class="">
                    <div class="section-info">
                        <div class="sub-title-paragraph">
                            <div class="w-100 d-flex justify-content-between">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <img src="..." class="card-img-top" alt="...">
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Nombre</li>
                                        <li class="list-group-item">Descripcion</li>
                                        <li class="list-group-item">precio</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="card-link">Ver producto</a>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up
                                            the bulk of the card's content.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up
                                            the bulk of the card's content.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="anchor-btn">Learn more <i
                                class="fas fa-arrow-right pd-lt-10"></i></a>
                    </div>
                </div>
                <div class="col-md-6 mb-50">
                    <div class="section-img"> <img src="images/about.jpg" alt="" class="img-responsive" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End About -->

    <!-- Services -->
    {{-- <div class="services section-padding bg-grey" data-scroll-index='2'>
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title text-center">
                    <h3>We Are Best At Our Service</h3>
                    <p>Vestibulum elementum dui tempus dolor gravida, vel mattis erat fermentum.</p>
                    <span class="section-title-line"></span>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                    <div class="service-box bg-white text-center">
                        <div class="icon"> <i class="fas fa-chart-line"></i> </div>
                        <div class="icon-text">
                            <h4 class="title-box">Chart Line</h4>
                            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                    <div class="service-box bg-white text-center">
                        <div class="icon"> <i class="fas fa-bullhorn "></i> </div>
                        <div class="icon-text">
                            <h4 class="title-box">Quick Anouncement</h4>
                            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                    <div class="service-box bg-white text-center">
                        <div class="icon"> <i class="fas fa-map-marked"></i> </div>
                        <div class="icon-text">
                            <h4 class="title-box">Mark Location</h4>
                            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                    <div class="service-box bg-white text-center">
                        <div class="icon"> <i class="fas fa-bug"></i> </div>
                        <div class="icon-text">
                            <h4 class="title-box">Bug Solution</h4>
                            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                    <div class="service-box bg-white text-center">
                        <div class="icon"> <i class="fas fa-comments"></i> </div>
                        <div class="icon-text">
                            <h4 class="title-box">Fast Communication</h4>
                            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                    <div class="service-box bg-white text-center">
                        <div class="icon"> <i class="fas fa-paint-brush"></i> </div>
                        <div class="icon-text">
                            <h4 class="title-box">Clean Design</h4>
                            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
                        </div>
                    </div>
                </div> --}}
    </div>
    </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>
    <!-- owl carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- magnific-popup -->
    <script src="js/jquery.fancybox.min.js"></script>

    <!-- scrollIt js -->
    <script src="js/scrollIt.min.js"></script>

    <!-- isotope.pkgd.min js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <script>
        $(window).on("scroll", function() {

            var bodyScroll = $(window).scrollTop(),
                navbar = $(".navbar");

            if (bodyScroll > 130) {

                navbar.addClass("nav-scroll");
                $('.navbar-logo img').attr('src', 'images/logo-black.png');


            } else {

                navbar.removeClass("nav-scroll");
                $('.navbar-logo img').attr('src', 'images/logo-white.png');

            }

        });

        $(window).on("load", function() {



            var bodyScroll = $(window).scrollTop(),
                navbar = $(".navbar");

            if (bodyScroll > 130) {

                navbar.addClass("nav-scroll");
                $('.navbar-logo img').attr('src', 'images/logo-black.png');


            } else {

                navbar.removeClass("nav-scroll");
                $('.navbar-logo img').attr('src', 'images/logo-white.png');

            }

            /* smooth scroll
              -------------------------------------------------------*/
            $.scrollIt({

                easing: 'swing', // the easing function for animation
                scrollTime: 900, // how long (in ms) the animation takes
                activeClass: 'active', // class given to the active nav element
                onPageChange: null, // function(pageIndex) that is called when page is changed
                topOffset: -63
            });

            /* isotope
            -------------------------------------------------------*/
            var $gallery = $('.gallery').isotope({});
            $('.gallery').isotope({

                // options
                itemSelector: '.item-img',
                transitionDuration: '0.5s',

            });


            $(".gallery .single-image").fancybox({
                'transitionIn': 'elastic',
                'transitionOut': 'elastic',
                'speedIn': 600,
                'speedOut': 200,
                'overlayShow': false
            });


            /* filter items on button click
            -------------------------------------------------------*/
            $('.filtering').on('click', 'button', function() {

                var filterValue = $(this).attr('data-filter');

                $gallery.isotope({
                    filter: filterValue
                });

            });

            $('.filtering').on('click', 'button', function() {

                $(this).addClass('active').siblings().removeClass('active');

            });

        })

        $(function() {
            $(".cover-bg").each(function() {
                var attr = $(this).attr('data-image-src');

                if (typeof attr !== typeof undefined && attr !== false) {
                    $(this).css('background-image', 'url(' + attr + ')');
                }

            });

            /* sections background color from data background
            -------------------------------------------------------*/
            $("[data-background-color]").each(function() {
                $(this).css("background-color", $(this).attr("data-background-color"));
            });


            /* Owl Caroursel testimonial
              -------------------------------------------------------*/

            $('.testimonials .owl-carousel').owlCarousel({
                loop: true,
                autoplay: true,
                items: 1,
                margin: 30,
                dots: true,
                nav: false,

            });

        });
    </script>
