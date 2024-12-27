@extends('main.index')

@section('styles')
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css') }}">
@endsection

@section('content')
    {{--  <section id="portada" class="main-banner">
        <div class="container-fluid">
            <div class="owl-carousel owl-banner">
                <div class="item">
                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/jUXOBBVpXto" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen style="border-radius : 20px"></iframe>
                </div>
            </div>
        </div>
    </section> --}}
    <section id="portada" class="main-banner">
        <div class="container-fluid">
            <div class="owl-carousel owl-banner">
                <div class="item"><img src="{{ asset('main/image/nosotros.png') }}" alt="Banner 1"></div>
            </div>
        </div>
    </section>


    {{-- <section id="experiencias-marcas">
        <div class="container">
            <div class="info-content">
                <div>
                    <img src="{{ asset('main/image/senales-estudiar-enfermeria-1200x628_0000_Capa-2-copia-2 1.png') }}"
                        alt="">
                </div>
                <div>
                    <h3>Experiencias que <br> marcan la diferencia</h3>
                    <p>Como corporación, podemos afirmar que, a lo largo de todos estos años,
                        nos respalda nuestra base educativa de calidad y alta experiencia en el sector
                        salud; donde continuamente venimos mejorando día tras día desde hace 45 años.
                        Crecimos gracias a nuestros alumnos y a la gran labor de nuestros docentes,
                        los cuales, han sido preparados para poder entregarte una educación competitiva
                        y de primer nivel.</p>
                    <div class="items">
                        <div class="item">
                            <img src="{{ asset('main/image/duracion 1.png') }}" class="icon" alt="Duración">
                            Inclusión social
                        </div>
                        <div class="item">
                            <img src="{{ asset('main/image/duracion 1.png') }}" class="icon" alt="Duración">
                            Trabajo en Equipo
                        </div>
                        <div class="item">
                            <img src="{{ asset('main/image/duracion 1.png') }}" class="icon" alt="Duración">
                            Integridad
                        </div>
                        <div class="item">
                            <img src="{{ asset('main/image/duracion 1.png') }}" class="icon" alt="Duración">
                            Vocación de Servicio
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="experiencias-diferencia">
        <div class="container">
            <div class="info-content">
                <div class="item-carousel">
                    <div class="owl-carousel owl-exp">
                        <div class="item">
                            <h5 style="color:white">Experiencias que marcan la diferencia</h5>
                            <p style="color:white">Como corporación, podemos afirmar que, a lo largo de todos estos años,
                                nos respalda nuestra base educativa de calidad y alta experiencia en el sector
                                salud; donde continuamente venimos mejorando día tras día desde hace 47 años.
                                Crecimos gracias a nuestros alumnos y a la gran labor de nuestros docentes,
                                los cuales, han sido preparados para poder entregarte una educación competitiva
                                y de primer nivel.</p>
                        </div>
                        <div class="item">
                            <h5 style="color:white">Experiencias que marcan la diferencia</h5>
                            <p style="color:white">Como corporación, podemos afirmar que, a lo largo de todos estos años,
                                nos respalda nuestra base educativa de calidad y alta experiencia en el sector
                                salud; donde continuamente venimos mejorando día tras día desde hace 47 años.
                                Crecimos gracias a nuestros alumnos y a la gran labor de nuestros docentes,
                                los cuales, han sido preparados para poder entregarte una educación competitiva
                                y de primer nivel.</p>
                        </div>
                    </div>
                </div>
                <div class="item-content">
                    <h3 style="color:white">Sobre Nosotros</h3>
                    <div class="linea-izquierda" style="margin-top:-30px;"></div>
                    <p style="color:white">Como corporación, podemos afirmar que, a lo largo de todos estos años,
                        nos respalda nuestra base educativa de calidad y alta experiencia en el
                        sector salud; donde continuamente venimos mejorando día tras día desde hace 47 años. </p>
                    <div class="items-wrapper">
                        <div class="arrow left-arrow" onclick="moveLeft()">&#10094;</div>
                        <div class="items">
                            <div class="item">
                                <a href="#"><img src="{{ asset('main/image/nosotros1.png') }}" alt="Item 1"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('main/image/nosotros2.png') }}" alt="Item 2"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('main/image/nosotros3.png') }}" alt="Item 3"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('main/image/nosotros4.png') }}" alt="Item 1"></a>
                            </div>
                        </div>
                        <div class="arrow right-arrow" onclick="moveRight()">&#10095;</div>
                    </div>

                    <style>
                        .items-wrapper {
                            display: flex;
                            position: relative;
                            /* width: 560px; */
                            margin: 60px 0 20px 0;
                        }

                        .items {
                            display: flex;
                            overflow-x: hidden !important;
                            gap: 2rem;
                        }

                        .item {
                            flex: none;
                        }

                        .arrow {
                            position: absolute;
                            top: 50%;
                            transform: translateY(-50%);
                            background-color: rgba(0, 0, 0, 0.5);
                            color: white;
                            font-size: 2rem;
                            padding: 10px;
                            cursor: pointer;
                            z-index: 1;
                        }

                        .left-arrow {
                            left: 0;
                        }

                        .right-arrow {
                            right: 0;
                        }
                    </style>
                    <script>
                        function moveLeft() {
                            const itemsContainer = document.querySelector('.items');
                            itemsContainer.scrollBy({
                                left: -200,
                                behavior: 'smooth'
                            });
                        }

                        function moveRight() {
                            const itemsContainer = document.querySelector('.items');
                            itemsContainer.scrollBy({
                                left: 200,
                                behavior: 'smooth'
                            });
                        }
                    </script>

                    {{-- <div class="items">
                        <div class="item">
                            <a href="#"><img src="{{ asset('main/image/nosotros1.png') }}" alt="Item 1"></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{ asset('main/image/nosotros2.png') }}" alt="Item 2"></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{ asset('main/image/nosotros3.png') }}" alt="Item 3"></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{ asset('main/image/nosotros4.png') }}" alt="Item 1"></a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <section id="mision-vision">
        <div class="container">
            <div class="info-content">
                <div class="item">
                    <div class="item-header">
                        <img src="{{ asset('main/image/vinoculares.png') }}" width="100" alt="">
                        <h5>Misión</h5>
                    </div>
                    <p>Como corporación, podemos afirmar que, a lo largo de todos estos años, nos respalda nuestra base
                        educativa de calidad y alta experiencia en el sector salud; donde continuamente venimos mejorando
                        día tras día desde hace 47 años, con presencia en 20 locales licenciados en Lima Metropolitana.
                        Crecimos gracias a nuestros alumnos y a la gran labor de nuestros docentes, los cuales, han sido
                        preparados para poder entregarte una educación competitiva y de primer nivel.</p>
                </div>
                <div class="item">
                    <div class="item-header">
                        <img src="{{ asset('main/image/bandera.png') }}" width="100" alt="">
                        <h5>Visión</h5>
                    </div>
                    <p>Ser reconocidos en la sociedad como una institución líder en educación de la salud y tecnología,
                        consolidando y ampliando nuestra presencia a nivel nacional.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="nuestros-pilares">
        <div class="container">
            <div class="info-text">
                <h3>Nuestros Pilares Institucionales</h3>
            </div>
            <div class="info-content">
                <div class="items">
                    <div class="item">
                        <div class="item-header">
                            <img src="{{ asset('main/image/Group7777777776.png') }}" width="70" alt="Imagen">
                            <h6>47 años de <br> experiencia</h6>
                        </div>
                        <p>Contamos con un equipo de docentes altamente calificados, con amplia.</p>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <img src="{{ asset('main/image/logo-relojj.png') }}" width="70" alt="Imagen">
                            <h6>Horarios <br> flexibles</h6>
                        </div>
                        <p>Contamos con un equipo de docentes altamente calificados, con amplia.</p>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <img src="{{ asset('main/image/insignia.png') }}" width="70" alt="Imagen">
                            <h6>Certificado <br> gratuito</h6>
                        </div>
                        <p>Contamos con un equipo de docentes altamente calificados, con amplia.</p>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <img src="{{ asset('main/image/telefonica.png') }}" width="70" alt="Imagen">
                            <h6>Docentes altamente <br> calificados</h6>
                        </div>
                        <p>Contamos con un equipo de docentes altamente calificados, con amplia.</p>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <img src="{{ asset('main/image/hospilalcito.png') }}" width="70" alt="Imagen">
                            <h6>Convenios con <br> hospitales y clínicas</h6>
                        </div>
                        <p>Contamos con un equipo de docentes altamente calificados, con amplia.</p>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <img src="{{ asset('main/image/Group775.png') }}" width="70" alt="Imagen">
                            <h6>Nuestra propia bolsa <br> de trabajo</h6>
                        </div>
                        <p>Contamos con un equipo de docentes altamente calificados, con amplia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            $('.animated').appear(function() {
                const elem = $(this);
                const animation = elem.data('animation');
                if (!elem.hasClass('visible')) {
                    const animationDelay = elem.data('animation-delay');
                    if (animationDelay) {
                        setTimeout(function() {
                            elem.addClass(animation + " visible");
                        }, animationDelay);
                    } else {
                        elem.addClass(animation + " visible");
                    }
                }
            });
            $('.owl-carousel.owl-banner').owlCarousel({
                items: 1,
                loop: false,
                margin: 10,
                nav: false,
                dots: false,
                autoWidth: false,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplayHoverPause: false,
            });
            $('.owl-carousel.owl-exp').owlCarousel({
                items: 1,
                loop: false,
                margin: 10,
                nav: false,
                dots: false,
                autoWidth: false,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplayHoverPause: false,
            });
        });
    </script>
@endsection
