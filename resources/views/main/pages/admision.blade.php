@extends('main.index')

@section('styles')
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css') }}">
@endsection

@section('content')

    <section id="portada" class="main-banner">
        <div class="container-fluid">
            <div class="owl-carousel owl-banner">
                <div class="item"><img src="{{ asset('main/image/fondo_admision.png') }}" alt="Banner 1"></div>
            </div>
        </div>
    </section>
    <section style="background-image: url(https://www.ial.edu.pe/web_loayza/assets/img/imgactualizado/fondosedes.png);
background-size: cover;
background-position: center;
background-repeat: no-repeat;">
    <section id="nuestros-pilares">
        <div class="container">
            <div class="info-text">
                <h3>Pasos para matricular al alumno</h3>
                <br>
                <div class="linea"></div>
            </div>
            <div class="info-content">
                <div class="process-wrapper">
                    <div id="progress-bar-container">
                        <ul>
                            <li class="step step01 active">
                                <div class="step-inner">Datos Personales</div>
                            </li>
                            <li class="step step02">
                                <div class="step-inner">Asesor de ventas</div>
                            </li>
                            <li class="step step03">
                                <div class="step-inner">Dudas con su asesor</div>
                            </li>
                            <li class="step step04">
                                <div class="step-inner">Vaucher de pago</div>
                            </li>
                            <li class="step step05">
                                <div class="step-inner">Declaración Jurada</div>
                            </li>
                        </ul>

                        <div id="line">
                            <div id="line-progress"></div>
                        </div>
                    </div>

                    <div id="progress-content-section">
                        <div class="section-content discovery active">
                            <h2>Datos Personales</h2>
                            <p>En esta etapa, se recopilan todos los datos necesarios del alumno para formalizar su
                                matrícula. Esto incluye información básica como nombre completo, documento de identidad,
                                fecha de nacimiento, dirección, correo electrónico y número de teléfono. Es fundamental que
                                estos datos sean precisos y estén actualizados para evitar problemas en el futuro.</p>
                        </div>

                        <div class="section-content strategy">
                            <h2>Esperar la comunicación de la asesora de ventas</h2>
                            <p>El alumno se pone en contacto con un asesor de ventas que le proporcionará toda la
                                información relevante sobre los cursos disponibles, precios, horarios, modalidad y
                                beneficios. El asesor también responderá cualquier pregunta o duda que el alumno pueda tener
                                sobre el proceso de matrícula y los programas académicos ofrecidos.</p>
                        </div>

                        <div class="section-content creative">
                            <h2>Absolver las dudas con su asesora</h2>
                            <p>Este paso es clave para aclarar cualquier pregunta que el alumno pueda tener con respecto a
                                la oferta académica o el proceso de matrícula. El asesor de ventas se asegura de resolver
                                cualquier inquietud relacionada con las condiciones de los cursos, requisitos previos,
                                fechas límite, costos adicionales, entre otros detalles.</p>
                        </div>

                        <div class="section-content production">
                            <h2>Enviar vaucher de pago a la asesora</h2>
                            <p>Una vez que el alumno decide continuar con la matrícula, debe realizar el pago
                                correspondiente al curso. El voucher de pago es el comprobante que certifica que el alumno
                                ha abonado el monto requerido. Este voucher puede ser generado en línea o proporcionado por
                                el sistema de pagos del centro educativo. Es un documento esencial para completar la
                                matrícula.</p>
                        </div>

                        <div class="section-content analysis">
                            <h2>Envié declaración Jurada de haber concluido estudios secundarios</h2>
                            <p>En este paso, el alumno debe firmar una declaración jurada en la que se compromete a cumplir
                                con las normas y condiciones del curso, además de certificar que la información
                                proporcionada en la matrícula es correcta. También se incluyen cláusulas relacionadas con la
                                política de cancelación, privacidad de datos y otros aspectos legales importantes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="carrera-informacion">
        <div class="container">
            <div class="info">
                <h3>Proceso de admisión</h3>
                <div class="linea-izquierda" style="margin-top:-15px;"></div>
                <style>
                    .item ul {
                        list-style: none;
                        /* Quita los puntos predeterminados */
                        padding-left: 25px;
                        /* Espacio para los íconos personalizados */
                        position: relative;
                    }

                    .item ul li {
                        position: relative;
                        /* Necesario para que ::before funcione */
                        margin-bottom: 10px;
                        /* Espaciado entre elementos */
                    }

                    .item ul li::before {
                        content: "•";
                        /* Personaliza el símbolo */
                        color: #ff7f00;
                        /* Color del símbolo */
                        font-size: 20px;
                        /* Tamaño del símbolo */
                        position: absolute;
                        /* Posiciona relativo al contenedor */
                        left: -20px;
                        /* Ajusta según tu diseño */
                        top: 0;
                        /* Alinea verticalmente */
                    }
                </style>

                <div class="item">
                    <h5 style="font-size: 25px; "> <i class="fa fa-share" style="color:#0746b3 !important;"></i> Matrícula
                        abierta</h5>
                    <p style="font-size: 18px;font-weight: 700;
                    color: #0746b3;">Requisitos básicos:</p>
                    <br>
                    <ul>
                        <li style="font-size: 18px;">Certificados de estudios secundarios.</li>
                    </ul>
                </div>
                <div class="item">
                    <h5 style="font-size: 25px"><i class="fa fa-users" style="color:#0746b3 !important;"></i>Provincia</h5>
                    <p style="font-size: 18px;font-weight: 700;
                    color: #0746b3;">Requisitos básicos:</p>
                    <br>
                    <ul>
                        <li style="font-size: 18px;">Tener secundaria completa.</li>
                        <li style="font-size: 18px;">Certificado de estudios secundarios.</li>
                    </ul>
                </div>
                <div class="item">
                    <h5 style="font-size: 25px"><i class="fa fa-plane" style="color:#0746b3 !important;"></i>Extranjero</h5>
                    <p style="font-size: 18px;font-weight:700;color:#0746b3;">Requisitos básicos :</p><br>
                    <ul>
                        <li style="font-size: 18px;">Carnet de extranjería.</li>
                        <li style="font-size: 18px;">Certificados de estudios apostillados y convalidados en Perú.</li>
                    </ul>
                </div>

            </div>
            <div>
                <div class="form-container">
                    <h3>Más información <span style="color:#00c9fa">aquí</span></h3>
                    <p style="text-align: center !important">Déjanos tus datos y te contactaremos</p>
                    <form action="{{ route('registrar') }}" method="POST">
                        @csrf
                        <input type="text" name="nom" placeholder="Nombres" required autofocus>
                        <input type="text" name="ape" placeholder="Apellidos" required>
                        <input type="text" name="dni" placeholder="DNI" required>
                        <input type="text" name="tel" placeholder="Teléfono" required>
                        <input type="email" name="maix" placeholder="Correo" required>
                        <input type="hidden" name="org" value="Web">
                        <input type="hidden" name="pro" value="1">
                        <input type="hidden" name="dis" value="15">
                        <input type="hidden" name="mod" value="2">
                        <select name="carrera_id" id="carrera_id" required>
                            <option value="">Seleccione Carrera...</option>
                            @foreach ($Carrera as $item)
                                <option value="{{ $item->carrera_id }}">{{ $item->nombre }}</option>
                            @endforeach
                        </select>

                        @if (session('success'))
                            <div class="alert alert-success">
                                <i class="fa fa-check-circle"></i> {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                <i class="fa fa-exclamation-triangle"></i> {{ session('error') }}
                            </div>
                        @endif
                        <label class="check-label"><input type="checkbox" required> Autorizo a IAL, a utilizar mis datos
                            para comunicarse conmigo y enviarme información.</label>
                        <button type="submit" class="submit-button">Enviar
                            <img src="{{ asset('main/image/Group_747_white.png') }}" width="10" alt="Arrow">
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>
    <section id="nuestros-pilares">
        <div class="container">
            <div class="info-text">
                <h3>Nuestros Pilares Institucionales</h3><br>
                <div class="linea"></div>
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

    {{-- PROCESO DE MATRICULA --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(".step").click(function() {
            $(this).addClass("active").prevAll().addClass("active");
            $(this).nextAll().removeClass("active");
        });

        $(".step01").click(function() {
            $("#line-progress").css("width", "3%");
            $(".discovery").addClass("active").siblings().removeClass("active");
        });

        $(".step02").click(function() {
            $("#line-progress").css("width", "25%");
            $(".strategy").addClass("active").siblings().removeClass("active");
        });

        $(".step03").click(function() {
            $("#line-progress").css("width", "50%");
            $(".creative").addClass("active").siblings().removeClass("active");
        });

        $(".step04").click(function() {
            $("#line-progress").css("width", "75%");
            $(".production").addClass("active").siblings().removeClass("active");
        });

        $(".step05").click(function() {
            $("#line-progress").css("width", "100%");
            $(".analysis").addClass("active").siblings().removeClass("active");
        });
    </script>
    {{-- FIN DE PROCESO DE MATRICULA DISEÑO CSS - JS --}}
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
            $('.owl-carousel.owl-branches').owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 2,
                    },
                    600: {
                        items: 3,
                    },
                    1000: {
                        items: 5,
                    }
                }
            });
        });
    </script>
@endsection
