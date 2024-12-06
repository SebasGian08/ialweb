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
                <div class="item"><img src="{{ asset('main/image/fondo_reingreso.png') }}" alt="Banner 1"></div>
            </div>
        </div>
    </section>

    <section id="carrera-informacion">
        <div class="container">
            <div class="info">
                <h3>Proceso para trámite de reingresos</h3>
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

                    .img-container {
                        position: sticky;
                        /* Fija el contenedor */
                        top: 10%;
                        /* Posición desde la parte superior */
                    }
                </style>
                <div class="item">
                    <h5 style="font-size: 20px;; ">1. Verificar datos del alumno</h5><br>
                    <ul>
                        <li style="font-size: 18px;">Especialidad</li>
                        <li style="font-size: 18px;">Ciclo y mes en que se quedó el alumno</li>
                        <li style="font-size: 18px;">Pagos al día</li>
                        <li style="font-size: 18px;">El alumno no debe tener más de 3 cursos desaprobados dentro del
                            ciclo, caso contrario, tendrían que repetir el ciclo y para subsanar</li>
                    </ul>
                </div>
                <div class="item">
                    <h5 style="font-size: 20px;">2. De proceder el reingreso</h5>
                    <br>
                    <ul>
                        <li style="font-size: 18px;">Se solicita número de DNI, número de celular y correo electrónico, para
                            registrarlo en la base de datos</li>
                    </ul>
                </div>
                <div class="item">
                    <h5 style="font-size: 20px;">3. Área de Programación</h5><br>
                    <ul>
                        <li style="font-size: 18px;">Área que se encargará de asignarle el aula, el docente, el tutor y el
                            horario de clases.</li>
                    </ul>
                </div>
                <div class="item">
                    <h5 style="font-size: 20px;">4. Grupo de whatsapp</h5><br>
                    <ul>
                        <li style="font-size: 18px;">Para finalizar, el tutor o tutora deberá agregarlo a un grupo de
                            whatsapp para recibir sus clases virtuales.</li>
                    </ul>
                </div>
                <br>
                {{-- OTRO --}}
                <h3>Inscripción en <br>el formulario virtual</h3>
                <div class="linea-izquierda" style="margin-top:-15px;"></div>
                <div class="item">
                    <ul>
                        <li style="font-size: 18px;text-align:justify"> Los alumnos que les corresponde inscribirse, son
                            aquellos que dejaron
                            de estudiar en el mes de marzo del 2020 (pandemia) y cuentan con una programación. (A partir del
                            4 mes del IV ciclo en adelante, previa consulta con el área de reingresos).</li>
                        <li style="font-size: 18px;text-align:justify"> Cabe mencionar que alumnos que se quedaron en la
                            programación de marzo
                            2020 en su 3 mes del IV ciclo, deben comunicarse al área de reingresos para realizar el cambio
                            de malla correspondiente.</li>
                        <li style="font-size: 18px;text-align:justify"> Cuando el alumno se inscribe, automáticamente sus
                            datos se derivan al
                            área de programación. Dicha área se comunica con los alumnos días antes o el mismo día de inicio
                            de clases. Número de programación 955540804..</li>
                    </ul>
                </div>
                <!-- Botón de WhatsApp -->
                <div style="margin-top: 20px;">
                    <!-- Botón para Mirella -->
                    <a href="https://wa.me/51998168535" target="_blank">
                        <button
                            style="cursor:pointer;font-size: 18px; border: 2px solid #34b7f1; color: #34b7f1; padding: 10px 20px; border-radius: 25px; font-family: GothamRoundedMedium; background-color: transparent;">
                            <i class="fa fa-whatsapp"></i> Contactar Mirella
                        </button>
                    </a>
                </div>

                <div style="margin-top: 20px;">
                    <!-- Botón para Jennyfer -->
                    <a href="https://wa.me/51920528966" target="_blank">
                        <button
                            style="cursor:pointer;font-size: 18px; border: 2px solid #25D366; color: #25D366; padding: 10px 20px; border-radius: 25px; font-family: GothamRoundedMedium; background-color: transparent;">
                            <i class="fa fa-whatsapp"></i> Contactar Jennyfer
                        </button>
                    </a>
                </div>

                <div style="margin-top: 20px;">
                    <!-- Botón para Milagros -->
                    <a href="https://wa.me/51920299214" target="_blank">
                        <button
                            style="cursor:pointer;font-size: 18px; border: 2px solid #128C7E; color: #128C7E; padding: 10px 20px; border-radius: 25px; font-family: GothamRoundedMedium; background-color: transparent;">
                            <i class="fa fa-whatsapp"></i> Contactar Milagros
                        </button>
                    </a>
                </div>
            </div>
            <div>
                <div class="img-container">
                    <img src="{{ asset('main/image/compromiso.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="alianzas-estrategicas">
        <div class="container">
            <div class="info-text">
                <h3>Preguntas Frecuentes</h3>
                <div class="linea"></div>
                <br>
            </div>
            <div class="container-faq">
                @foreach ($Preguntas as $pregunta)
                    <div class="item-faq">
                        <div class="question">
                            <h3 style="font-family: 'GothamRoundedMedium';color:#0746b3">
                                {{ $pregunta->pregunta }} <!-- Mostrar la pregunta -->
                                <span></span>
                            </h3>
                            <div class="more"><i>+</i></div>
                        </div>
                        <div class="answer">
                            <p>{!! $pregunta->respuesta !!}</p>
                            <span></span>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection



{{-- SCRIPT DE PROCESO DE MATRICULA --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
{{-- FIN DE PROCESO DE MATRICULA DISEÑO CSS - JS --}}
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

        /* PROCESO DE MATRICULA */
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
        /* FIN */

        /* PARA PREGUNTAS FRECUENTES */
        let question = document.querySelectorAll('.question');
        let btnDropdown = document.querySelectorAll('.question .more');
        let answer = document.querySelectorAll('.answer');
        let parrafo = document.querySelectorAll('.answer p');

        for (let i = 0; i < btnDropdown.length; i++) {
            let switchc = 0;

            btnDropdown[i].addEventListener('click', () => {
                // Obtener la altura del contenido, usar scrollHeight para el cálculo
                let altoParrafo = parrafo[i].scrollHeight;
                // Establecer una altura mínima de 100px
                if (altoParrafo < 100) {
                    altoParrafo = 150;
                }
                if (switchc == 0) {
                    // Mostrar respuesta con la altura calculada, con mínimo de 100px
                    answer[i].style.maxHeight = `${altoParrafo}px`;
                    question[i].style.marginBottom = '10px';
                    btnDropdown[i].innerHTML = '<i>-</i>';
                    switchc++;
                } else {
                    // Ocultar respuesta
                    answer[i].style.maxHeight = '0';
                    question[i].style.marginBottom = '0';
                    btnDropdown[i].innerHTML = '<i>+</i>';
                    switchc--;
                }
            });
        }
        /* FIN */
    </script>
@endsection
