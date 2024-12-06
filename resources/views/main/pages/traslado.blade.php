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
                <div class="item"><img src="{{ asset('main/image/fondo_traslado.png') }}" alt="Banner 1"></div>
            </div>
        </div>
    </section>

    <section id="carrera-informacion">
        <div class="container">
            <div class="info">
                <h3>Proceso para trámite <br>de traslado </h3>
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

                    .img-container img {
                        width: 420px !important;
                    }
                </style>

                <div class="item">
                    <h5 style="font-size: 20px;">Requisitos básicos</h5><br>
                    <ul>
                        <li style="font-size: 18px;">El instituto donde estudia debe estar licenciado por MINEDU. Si el
                            instituto no está licenciado, el postulante puede enviar el certificado oficial hasta los
                            semestres donde se quedó (se evaluará).</li>
                        <li style="font-size: 18px;">Certificado de estudios secundarios</li>
                        <li style="font-size: 18px;">Certificado oficial hasta los semestres donde se quedó</li>
                    </ul>
                </div>
                <!-- Botón de WhatsApp -->
                <div style="margin-top: 20px;">
                    <a href="https://wa.me/51948536560" target="_blank">
                        <button
                            style="font-size: 18px; background-color: #25D366; color: white; padding: 10px 20px; border: none; border-radius: 5px;
                            font-family: GothamRoundedMedium;">
                            <i class="fa fa-whatsapp"></i> Contactar
                        </button>
                    </a>
                </div>
            </div>
            <div>
                <div class="img-container">
                    <img src="https://www.ial.edu.pe/web_loayza/assets/img/imgactualizado/fotosweb2.png" alt="">
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
