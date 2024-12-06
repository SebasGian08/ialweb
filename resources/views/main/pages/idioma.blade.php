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
                <div class="item"><img src="{{ asset('main/image/portada_idiomas.png') }}" alt="Banner 1" class="person">
                </div>
            </div>
        </div>
    </section>

    <section id="tus-datos">
        <div class="container">
            <p>Déjanos tus datos y te contactaremos
                <a href="{{ route('contacto') }}">Aquí <img src="{{ asset('main/image/Group_747_orange.png') }}"
                        alt="Arrow" width="10"></a>
            </p>
        </div>
    </section>

    <section id="carrera-informacion">
        <div class="container ">
            <div class="info">
                <div class="container ingles">
                    <div class="column"
                        style="background-color: #0746b3;border-radius:30px;box-shadow: 0 14px 17px -2px rgba(0, 97, 200, 0.15);">
                        <img src="https://www.ial.edu.pe/idiomas/assets/img/icono-estudiantes-y-egresados.png"
                            alt="Estudiantes y Egresados">
                        <p style="text-align: center; color:white">Dirigido a: <br>
                        <h3 style="color:white !important; font-size:20px !important">Estudiantes y Egresados</h3>
                        </p>
                    </div>
                    <div class="column"
                        style="background-color: #0746b3;border-radius:30px;box-shadow: 0 14px 17px -2px rgba(0, 97, 200, 0.15);">
                        <img src="https://www.ial.edu.pe/idiomas/assets/img/icono-virtual.png" alt="Modalidad Virtual">
                        <p style="text-align: center; color:white">Modalidad: <br>
                        <h3 style="color:white !important; font-size:20px !important">Virtual</h3>
                        </p>
                    </div>
                    <div class="column"
                        style="background-color: #0746b3;border-radius:30px;box-shadow: 0 14px 17px -2px rgba(0, 97, 200, 0.15);">
                        <img src="https://www.ial.edu.pe/idiomas/assets/img/icono-felxible.png" alt="Horarios Flexibles">
                        <p style="text-align: center;color:white !important;">Horarios: <br>
                        <h3 style="color:white !important; font-size:20px !important">Flexibles</h3>
                        </p>
                    </div>
                </div>

                <div class="item">
                    <h5 style="font-size: 30px;">Horarios</h5>
                    <div class="linea-izquierda"></div>
                    <p style="font-size: 16px !important;color:#0746b3;">Plan de estudios antiguo (5 meses)</p>
                    {{-- <div class="caja_horario1" style="padding: 20px; background-color: #0746b3; border-radius: 30px;">
                        <div class="container_horarios" style="display: flex; justify-content: space-between; gap: 1rem;">
                            <div class="item_horario1" style="flex: 1; text-align: center;">
                                <img src="https://www.ial.edu.pe/idiomas/assets/img/ma%C3%B1ana.png" alt=""
                                    style="width: 150px; height: 150px;">
                                <div class="item_txt_horario1" style="color: white; ">
                                    <p>Mañana:</p>
                                    <span>
                                        <h3 style="color:white !important; font-size:14px !important">Sábados y Domingos :
                                            <br>
                                            • 8:00 - 12:30 a.m <br>
                                        </h3>
                                    </span>
                                </div>
                            </div>
                            <div class="item_horario1" style="flex: 1; text-align: center;">
                                <img src="https://www.ial.edu.pe/idiomas/assets/img/noche.png" alt=""
                                    style="width: 150px; height: 150px;">
                                <div class="item_txt_horario1" style="color: white;">
                                    <p>Noche:</p>
                                    <h3 style="color:white !important; font-size:14px !important">Lunes a Viernes : <br>
                                        • 20:00 - 21:50 p.m </h3>
                                    <h3 style="color:white !important; font-size:14px !important">Sábados y Domingos : <br>
                                        • 18:00 - 22:30 p.m <br></h3>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="curso-main_section-frecuencia">
                        <table class="tabla" style="width: 100%; border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <th class="thidiomas" colspan="3"
                                        style="background-color: #00c9fa; color: white; padding: 10px; text-align: center; border: 2px solid #ffffff; border-radius: 12px;">
                                        HORARIOS
                                    </th>
                                </tr>
                                <tr class="row-header"
                                    style="background-color: #0746b3; color: white; text-align: center; border: 2px solid #ffffff; border-radius: 12px;">
                                    <th class="thidiomas"
                                        style="padding: 10px; border: 2px solid #ffffff; border-radius: 12px;">MODALIDAD
                                    </th>
                                    <th class="thidiomas"
                                        style="padding: 10px; border: 2px solid #ffffff; border-radius: 12px;">TURNOS</th>
                                    <th class="thidiomas"
                                        style="padding: 10px; border: 2px solid #ffffff; border-radius: 12px;">HORARIO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="blue-2">
                                        <p>Lunes a Viernes </p>
                                    </td>
                                    <td>
                                        <p>Noches</p>
                                    </td>
                                    <td>
                                        <p>20:00 P.M. – 21:50 P.M</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="blue-2">
                                        <p>Sábados y Domingos</p>
                                    </td>
                                    <td>
                                        <p>Mañana</p>
                                    </td>
                                    <td>
                                        <p>8:00 A.M. – 12:30 P.M</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="blue-2">
                                        <p>Sábados y Domingos</p>
                                    </td>
                                    <td>
                                        <p>Noches</p>
                                    </td>
                                    <td>
                                        <p>18:00 P.M. – 22:30 P.M</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br><br>
                    <p style="font-size: 16px !important;color:#0746b3;">Plan de estudios 2020 (3 meses)</p>
                    <div class="curso-main_section-frecuencia">
                        <table class="tabla" style="width: 100%; border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <th class="thidiomas" colspan="3"
                                        style="background-color: #00c9fa; color: white; padding: 10px; text-align: center; border: 2px solid #ffffff; border-radius: 12px;">
                                        HORARIOS
                                    </th>
                                </tr>
                                <tr class="row-header"
                                    style="background-color: #0746b3; color: white; text-align: center; border: 2px solid #ffffff; border-radius: 12px;">
                                    <th class="thidiomas"
                                        style="padding: 10px; border: 2px solid #ffffff; border-radius: 12px;">MODALIDAD
                                    </th>
                                    <th class="thidiomas"
                                        style="padding: 10px; border: 2px solid #ffffff; border-radius: 12px;">TURNOS</th>
                                    <th class="thidiomas"
                                        style="padding: 10px; border: 2px solid #ffffff; border-radius: 12px;">HORARIO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="blue-2">
                                        <p>Lunes a Viernes </p>
                                    </td>
                                    <td>
                                        <p>Mañana</p>
                                    </td>
                                    <td>
                                        <p> 8:00 A.M - 12:30 A.M </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="blue-2">
                                        <p>Sábados y Domingos</p>
                                    </td>
                                    <td>
                                        <p>Mañana</p>
                                    </td>
                                    <td>
                                        <p>8:00 A.M. – 12:30 P.M</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="blue-2">
                                        <p>Lunes a Viernes</p>
                                    </td>
                                    <td>
                                        <p>Tarde</p>
                                    </td>
                                    <td>
                                        <p>15:00 P.M. – 16:50 P.M</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="blue-2">
                                        <p>Lunes a Viernes</p>
                                    </td>
                                    <td>
                                        <p>Noche</p>
                                    </td>
                                    <td>
                                        <p>20:00 P.M. – 21:50 P.M</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="blue-2">
                                        <p>Sábados y Domingos</p>
                                    </td>
                                    <td>
                                        <p>Noche</p>
                                    </td>
                                    <td>
                                        <p>18:00 P.M. – 22:30 P.M</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <style>
                        .form-container {
                            position: sticky;
                            /* Fija el contenedor */
                            top: 10%;
                            /* Posición desde la parte superior */
                        }
                    </style>
                    {{-- <style>
                        .container_horarios {
                            display: flex;
                            justify-content: space-between;
                            gap: 1rem;
                        }

                        .item_horario1 {
                            width: 45%;
                            display: flex;
                            flex-wrap: wrap;
                            align-items: center;
                        }

                        .item_txt_horario1 {
                            text-align: left;
                        }
                    </style> --}}
                </div>
            </div>
            <div>
                <div class="form-container">
                    <h3>Más información <span style="color:#00c9fa">aquí</span></h3>
                    <p style="text-align: center !important">Déjanos tus datos y te contactaremos</p>
                    <form action="{{ route('registraridiomas') }}" method="POST">
                        @csrf
                        <input type="text" name="nom" placeholder="Nombres" required>
                        <input type="text" name="ape" placeholder="Apellidos" required>
                        <input type="text" name="dni" placeholder="DNI" required>
                        <input type="text" name="tel" placeholder="Teléfono" required>
                        <input type="email" name="maix" placeholder="Correo" required>
                        <input type="hidden" name="org" value="Web">
                        <input type="hidden" name="pro" value="1">
                        <input type="hidden" name="dis" value="15">
                        <input type="hidden" name="mod" value="2">
                        <select name="carrera_id" id="carrera_id" required>
                            <option value="">Seleccione..</option>
                            <option value="53">INGLES I</option>
                            <option value="52">INGLES III</option>
                            <option value="54">EXAMEN DE SUFICIENCIA</option>
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
