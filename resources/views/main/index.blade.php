<!DOCTYPE html>
<html lang="es-PE">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('main/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/plugins/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/responsive.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/estiloagregado.css') }}">
    @yield('styles')
</head>

<body>
    <header>
        <div class="nav-links">
            <div class="container">
                <ul>
                    <li><a href="https://loayzavirtual.edu.pe/acces/" target="_blank">Aula virtual</a></li>
                    <li><a href="https://elibro.net/es/lc/biblioloayza/" target="_blank">Biblioteca Virtual</a></li>
                    <li><a href="https://bolsadetrabajo.ial.edu.pe/" target="_blank">Bolsa de Trabajo</a></li>
                    <li><a href="{{ route('transparencia') }}">Transparencia</a></li>
                </ul>
            </div>
        </div>
        <div class="nav navigation">
            <div class="container">
                <div class="menu-mobile-navigation">
                    <button id="btnNavigation" type="button" class="btn-navigation"><i
                            class="fa fa-bars fa-lg"></i></button>
                </div>
                <div class="logo">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset($Configuration->imagen) }}" alt="{{ env('APP_NAME') }}" />
                    </a>
                </div>
                <div class="navs">
                    <nav class="main-nav">
                        <ul>
                            <li><a href="{{ route('nosotros') }}"
                                    class="{{ $_SERVER['REQUEST_URI'] == '/sobre-nosotros' ? 'active' : '' }}">Sobre<br>Nosotros</a>
                            </li>
                            <li class="submenu">
                                <a href="">Estudia en<br>Arzobispo Loayza <i class="fa fa-caret-down"
                                        aria-hidden="true"></i></a>
                                <div class="sub-menu-content">
                                    <ul class="sub-menu">
                                        <li>
                                            <div class="item-menu">
                                                <img src="{{ asset('main/image/iconocarrera.png') }}" width="90"
                                                    alt="Formación Continua">
                                                <h5>Carreras</h5>
                                                <ul>
                                                    @foreach ($Carreras as $item)
                                                        <li><a href="{{ route('carrera', ['slug' => $item->slug]) }}">
                                                                >> {{ $item->nombre }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item-menu">
                                                <img src="{{ asset('main/image/icon-menu.png') }}" width="90"
                                                    alt="Formación Continua">
                                                <h5>Formación Continua</h5>
                                                <ul>
                                                    <li><a href="{{ route('cursos', ['slug' => 'programas']) }}"> >>
                                                            Programas </a></li>
                                                    <li><a href="{{ route('cursos', ['slug' => 'cursos']) }}"> >>
                                                            Cursos</a></li>
                                                    <li><a href="{{ route('cursos', ['slug' => 'talleres']) }}">
                                                            >> Talleres</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item-menu">
                                                <img src="{{ asset('main/image/idioma.png') }}" width="90"
                                                    alt="Formación Continua">
                                                <h5>Idiomas</h5>
                                                <ul>
                                                    <li><a href="{{ route('idioma', ['slug' => 'ingles']) }}"> >>
                                                            Inglés</a></li>
                                                    <!--<li><a href="#"> >> Frances</a></li>-->
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="submenu">
                                <a href="{{ route('admision') }}"
                                    class="{{ $_SERVER['REQUEST_URI'] == '/admision' ? 'active' : '' }}">Modalidad<br>de
                                    ingreso <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                <div class="sub-menu-content modalidad">
                                    <ul class="sub-menu">
                                        <li>
                                            <div class="item-menu mini">
                                                <img src="{{ asset('main/image/icon-menu.png') }}" width="90"
                                                    alt="Formación Continua">
                                                <h5><a href="{{ route('admision') }}">Admisión</a></h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item-menu mini">
                                                <img src="{{ asset('main/image/icon-menu.png') }}" width="90"
                                                    alt="Formación Continua">
                                                <h5><a href="{{ route('reingreso') }}">Reingreso</a></h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item-menu mini">
                                                <img src="{{ asset('main/image/icon-menu.png') }}" width="90"
                                                    alt="Formación Continua">
                                                <h5><a href="{{ route('traslado') }}">Traslado</a></h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="phone-number"><a href="#">
                                    <img src="{{ asset('main/image/llamada-de-calificacion-de-estrellas.png') }}"
                                        alt="Teléfono">
                                    <span><a href="tel:{{ $Configuration->telefono }}">
                                            {{ $Configuration->telefono }}</a></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <a href="{{ route('contacto') }}" class="button-action">
                    Matriculate
                    <img src="{{ asset('main/image/Group_747_white.png') }}" width="10" alt="Arrow">
                </a>
            </div>
        </div>

        <div class="navigation-mobile-panel">
            <ul class="navigation-links">
                <li><a href="{{ route('index') }}"
                        class="{{ $_SERVER['REQUEST_URI'] == '/' ? 'active' : '' }}">Inicio</a></li>
                <li><a href="{{ route('nosotros') }}"
                        class="{{ $_SERVER['REQUEST_URI'] == '/sobre-nosotros' ? 'active' : '' }}">Sobre nosotros</a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0)" class="nav-link">Estudia en Arzobispo Loayza <i
                            class="fa fa-caret-down" aria-hidden="true"></i></a>
                    <ul class="navigation-links">
                        <li class="submenu">
                            <a href="javascript:void(0)" class="nav-link">
                                <img src="{{ asset('main/image/icon-informacion.png') }}" width="20px"
                                    alt="Formación continua">
                                Formación continua <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            <ul class="navigation-links">
                                <li><a href="{{ route('cursos', ['slug' => 'programas']) }}"><span>>></span>
                                        Programas</a></li>
                                <li><a href="{{ route('cursos', ['slug' => 'cursos']) }}"><span>>></span> Cursos</a>
                                </li>
                                <li><a href="{{ route('cursos', ['slug' => 'talleres']) }}"><span>>></span>
                                        Talleres</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0)" class="nav-link">
                                <img src="{{ asset('main/image/icon-programas.png') }}" width="20px"
                                    alt="Programas">
                                Programas <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            <ul class="navigation-links">
                                @foreach ($Carreras as $item)
                                    <li><a
                                            href="{{ route('carrera', ['slug' => $item->slug]) }}">{{ $item->nombre }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0)" class="nav-link">
                                <img src="{{ asset('main/image/icon-idiomas.png') }}" width="20px" alt="Idiomas">
                                Idiomas <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            <ul class="navigation-links">
                                <li><a href="{{ route('idioma', ['slug' => 'ingles']) }}"> >>
                                        Inglés</a></li>
                                {{-- <li><a href="#"> <span>>></span> Frances</a></li> --}}
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0)" class="nav-link">Modalidad de ingreso <i class="fa fa-caret-down"
                            aria-hidden="true"></i></a>
                    <ul class="navigation-links">
                        <li><a href="{{ route('admision') }}"><span>>></span> Admisión</a></li>
                        <li><a href="{{ route('reingreso') }}"><span>>></span> Reingreso</a></li>
                        <li><a href="{{ route('traslado') }}"><span>>></span> Traslado</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contacto') }}"
                        class="{{ $_SERVER['REQUEST_URI'] == '/contacto' ? 'active' : '' }}">Contáctanos</a></li>
                <hr>
                <ul class="navigation-links">
                    <li><a href="#">Alumnos</a></li>
                    <li><a href="#">Aula Virtual</a></li>
                    <li><a href="#">Biblioteca Virtual</a></li>
                    <li><a href="#">Empleabilidad</a></li>
                    <li><a href="#">Transparencia</a></li>
                </ul>
                <hr>
                <ul class="navigation-buttons">
                    <li>
                        <a href="{{ route('contacto') }}" class="button-action">
                            Matricúlate
                            <img src="{{ asset('main/image/Group_747_white.png') }}" width="15" alt="Arrow">
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contacto') }}" class="button-contact">
                            Contacto
                            <img src="{{ asset('main/image/Group_747_white.png') }}" width="15" alt="Arrow">
                        </a>
                    </li>
                </ul>
            </ul>
        </div>
    </header>

    <main>
        @yield('content')

        <div class="wsp-icon">
            <div class="help-text"
                style="position: absolute; left: -225px; top: 50%; transform: translateY(-50%); font-size: 14px; background-color: #40c351; padding: 8px 12px; border-radius: 15px 15px 0 15px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
                <span class="typing-effect"
                    style="font-family: 'GothamRoundedLight'; font-size: 16px; color: #ffffff;"><i
                        class="fa fa-commenting"></i> <i class="fa fa-comment-alt"></i> ¿Podemos ayudarte?</span>
            </div>
            <a href="https://api.whatsapp.com/send?phone={{ $Configuration->whatsapp }}&text=%C2%A1Hola!%20Quisiera%20más%20información."
                target="_blank">
                <img src="{{ asset('main/image/wsp.png') }}" alt="Whatsapp">
            </a>
            <div class="notification-circle"
                style="position: absolute; top: -5px; right: -5px; width: 20px; height: 20px; background-color: red; color: white; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px;">
                1
            </div>
        </div>

        <style>
            .typing-effect {
                display: inline-block;
                overflow: hidden;
                white-space: nowrap;
                border-right: 2px solid #ffffff;
                /* Cursor */
                animation: typing 8s steps(30, end) infinite, blink 0.6s step-end infinite;
            }

            /* Efecto de escribir y borrar con pausa */
            @keyframes typing {
                0% {
                    width: 0;
                }

                50% {
                    width: 100%;
                }

                60% {
                    width: 100%;
                    /* Pausa durante 5 segundos */
                }

                100% {
                    width: 0;
                }
            }

            /* Efecto de parpadeo del cursor */
            @keyframes blink {
                50% {
                    border-color: transparent;
                }
            }
        </style>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="contact-content">
                <div class="contact-content-info">
                    <div class="footer-navigation">
                        <h5>Sobre Nosotros</h5>
                        <div class="linea-izquierda"></div>
                        <ul>
                            <li><a href="{{ route('nosotros') }}">>> Nosotros</a></li>
                            <li><a href="{{ route('blog') }}">>> Blog</a></li>
                            <li><a href="{{ route('contacto') }}">>> Matricúlate</a></li>
                        </ul>
                    </div>
                    <div class="footer-navigation">
                        <h5>CARRERAS</h5>
                        <div class="linea-izquierda"></div>
                        <ul>
                            @foreach ($Carreras as $item)
                                <li><a href="{{ route('carrera', ['slug' => $item->slug]) }}">
                                        >> {{ $item->nombre }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="footer-navigation">
                        <h5>Vida Estudiantil</h5>
                        <div class="linea-izquierda"></div>
                        <ul>
                            <li><a href="https://loayzavirtual.edu.pe/acces/" target="_blank">>> Aula Virtual</a></li>
                            <li><a href="https://elibro.net/es/lc/biblioloayza/inicio" target="_blank">>> Biblioteca
                                    Virtual</a></li>
                            <li><a href="https://bolsadetrabajo.ial.edu.pe/" target="_blank">>> Bolsa de Trabajo </a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer-navigation">
                        <ul>
                            <iframe id="mapa"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.8645463189687!2d-77.04192578561604!3d-12.05283949146322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8c6076c41bd%3A0xaa4d58252e2df028!2sNueva%20Rosita%2C%20Cercado%20de%20Lima%2015001!5e0!3m2!1ses-419!2spe!4v1618460719401!5m2!1ses-419!2spe"
                                width="300" height="200"
                                style="border-radius:30px;box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);"
                                allowfullscreen="" loading="lazy"></iframe>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div>
                    <a href="{{ route('librodereclamaciones') }}"><img
                            src="{{ asset('main/image/libro-reclamaciones.png') }}" alt=""
                            style="border-radius:20px;widt:160px"></a>
                            <h3 style="color:white;"><span class="highlight">Licenciados <i class="fa fa-star" aria-hidden="true"></i></span><br> POR MINEDU</h3>
                    <style>
                        h3 {
                            font-size: 14px;
                            /* Ajusta según el diseño */
                            line-height: 1.5;
                        }

                        .highlight {
                            background-color: white;
                            color: #0746b3;
                            position: relative;
                            padding: 0 10px;
                            /* Espaciado interno */
                            border-radius: 15px 15px 15px 0;
                            /* Bordes circulares en el lado derecho */
                            border-left: none;
                            /* Sin borde en el lado izquierdo */
                            display: inline-block;
                        }
                    </style>
                </div>
                <div>
                    <h5><i class="fa fa-phone"></i> Contacto</h5>
                    <p style="color:white;"><a
                            href="tel:{{ $Configuration->telefono }}">{{ $Configuration->telefono }}</a>
                        | <a href="tel:{{ $Configuration->celular }}">{{ $Configuration->celular }}</a>
                    </p>
                </div>
                <div>
                    <h5><i class="fa fa-envelope"></i> Email</h5>
                    <p><a href="mailto:{{ $Configuration->email }}">{{ $Configuration->email }}</a></p>
                </div>

                <div>
                    <a href="#">
                        <ul class="social-media">
                            <li><a href="{{ $Configuration->facebook }}"><img
                                        src="{{ asset('main/image/icon-facebook.png') }}" width="40"
                                        alt="Facebook" target="_blank"></a></li>
                            <li><a href="{{ $Configuration->instagram }}"><img
                                        src="{{ asset('main/image/icon-instagram.png') }}" width="40"
                                        alt="Instagram" target="_blank"></a></li>
                            <li><a href="{{ $Configuration->tiktok }}"><img
                                        src="{{ asset('main/image/icon-tiktok.png') }}" width="40"
                                        alt="TikTok" target="_blank"></a></li>
                            <li><a href="{{ $Configuration->linkedin }}"><img
                                        src="{{ asset('main/image/icon-linkedin.png') }}" width="40"
                                        alt="LinkedIn" target="_blank"></a></li>
                        </ul>
                    </a>
                </div>
            </div>
            <hr>
            <div class="footer-bottom">
                <div class="footer-logo">
                    <img src="{{ asset('main/image/logo-ial-blanco.png') }}" alt="{{ env('APP_NAME') }}" />
                </div>
                <div style="color:white;">&copy; IAL {{ \Carbon\Carbon::now()->year }}, All Rights Reserved.
                    Desarrollado por Instituto Arzobispo Loayza</div>
                <div><a href="#">Políticas de privacidad</a></div>
                {{-- <div><a href="#">Libro de reclamaciones</a></div> --}}
            </div>
        </div>
    </footer>

    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js') }}"></script>
    <script src="{{ asset('main/plugins/jquery.appear.js') }}"></script>
    @yield('scripts')
    <script type="text/javascript">
        $(function() {
            const $btnNavigation = $("#btnNavigation");
            $btnNavigation.on("click", function() {
                const $this = $(this);
                const $nav = $(".navigation-mobile-panel");
                if ($nav.hasClass('active')) {
                    $nav.hide();
                    $nav.removeClass('active');
                    $this.find("i").removeClass("fa-times").addClass("fa-bars");
                } else {
                    $nav.show();
                    $nav.addClass('active');
                    $this.find("i").removeClass("fa-bars").addClass("fa-times");
                }
            });
        });
    </script>
</body>

</html>
