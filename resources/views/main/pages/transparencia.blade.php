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
                <div class="item"><img src="https://www.ial.edu.pe/assets/img/web-mayo_trans.jpg" alt="Banner 1"></div>
            </div>
        </div>
    </section>

    <section id="nuestros-pilares">
        <div class="container">

            <section class="container-transparencia">
                <div class="tab">
                    <input type="radio" name="abrir" id="acc1" />
                    <label for="acc1">
                        <h3>REGLAMENTOS INSTITUCIONALES</h3>
                        <div class="linea-izquierda"></div>
                    </label>
                    <div class="content" style="overflow-y: auto; max-height: 400px; padding: 10px;">
                        <p><a target="_blank" href="{{ asset('main/pdf/RM_N__484-2019-MINEDU LICENCIAMIENTO IESPAL.pdf') }}"
                                title="Resolución de Licenciamiento"><i class="fa fa-download"></i> Resolución de
                                Licenciamiento</a></p>
                        <p><a target="_blank" href="{{ asset('main/pdf/REGLAMENTO INTERNO_1.pdf') }}"
                                title="Reglameto interno"><i class="fa fa-download"></i> Reglamento Interno</a></p>
                        <p><a target="_blank" href="{{ asset('main/pdf/MANUAL DE PROCESOS ACADÉMICOS_1.pdf') }}"
                                title="Manual de procesos Academicos"><i class="fa fa-download"></i> Manual de Procesos
                                Académicos</a></p>
                        <p><a target="_blank" href="{{ asset('main/pdf/REGLAMENTO ACADEMICO.pdf') }}"
                                title="Reglamento Académico"><i class="fa fa-download"></i> Reglamento Académico</a></p>

                        <p><a target="_blank" href="{{ asset('main/pdf/MISION VISION_2024.pdf') }}"
                                title="Misión y visión"><i class="fa fa-download"></i> Misión y Visión</a></p>

                        <p><a target="_blank" href="{{ asset('main/pdf/PROYECTO EDUCATIVO INSTITUCIONAL.pdf') }}"
                                title="Proyecto Educativo Institucional"><i class="fa fa-download"></i> Proyecto Educativo
                                Institucional</a></p>
                        <p><a target="_blank" href="{{ asset('main/pdf/PLAN ANUAL DE TRABAJO 2023.pdf') }}"
                                title="Plan anual de Trabajo"><i class="fa fa-download"></i> Plan Anual de Trabajo 2023</a>
                        </p>
                        <p><a target="_blank" href="{{ asset('main//pdf/PLAN ANUAL DE TRABAJO 2024.pdf') }}"
                                title="Plan anual de Trabajo"><i class="fa fa-download"></i> Plan Anual de Trabajo 2024</a>
                        </p>
                        <p><a target="_blank" href="{{ asset('main/pdf/MANUAL DE PERFIL DE PUESTOS.pdf') }}"
                                title="Manual de Perfil de puestos"><i class="fa fa-download"></i> Manual de Perfil de
                                Puestos</a></p>

                    </div>
                </div>
                <div class="tab">
                    <input type="radio" name="abrir" id="acc2" />
                    <label for="acc2">
                        <h3>RELACIÓN Y NÚMERO DE BECAS Y CRÉDITOS EDUCATIVOS.</h3>
                        <div class="linea-izquierda"></div>
                    </label>
                    <div class="content" style="overflow-y: auto; max-height: 400px; padding: 10px;">
                        <p><a target="_blank" href="{{ asset('main/pdf/becas 2019.pdf') }}"><i class="fa fa-download"></i>
                                Becas
                                educativas año 2019 según periodos académicos</a></p>
                        <p><a target="_blank" href="{{ asset('main/pdf/becas 2020.pdf') }}"><i class="fa fa-download"></i>
                                Becas
                                educativas año 2020 según periodos académicos</a></p>
                        <p><a target="_blank" href="{{ asset('main/pdf/becas 2021.pdf') }}"><i class="fa fa-download"></i>
                                Becas
                                educativas año 2021 según periodos académicos</a></p>
                        <p><a target="_blank" href="{{ asset('main/pdf/becas 2022.pdf') }}"><i class="fa fa-download"></i>
                                Becas
                                educativas año 2022 según periodos académicos</a></p>
                        <p><a target="_blank" href="{{ asset('main/pdf/becas 2023.pdf') }}"><i class="fa fa-download"></i>
                                Becas
                                educativas año 2023 según periodos académicos</a></p>
                        <p><a target="_blank" href="{{ asset('main/pdf/2298.pdf') }}" title="Misión y visión"><i
                                    class="fa fa-download"></i> Tasas Educativas</a></p>
                    </div>
                </div>
                <div class="tab">
                    <input type="radio" name="abrir" id="acc3" />
                    <label for="acc3">
                        <h3>ADMISIÓN</h3>
                        <div class="linea-izquierda"></div>
                    </label>
                    <div class="content" style="overflow-y: auto; max-height: 400px; padding: 10px;">
                        <p><a target="_blank"
                                href="{{ asset('main/pdf/R.D. N°2625-IESPAL-2023 CRONOGRAMA ACADÉMICO 2023-I.pdf') }}"
                                title="Cronograma Academico 2023 I"><i class="fa fa-download"></i> Cronograma Academico 2023
                                I</a></p>
                        <p><a target="_blank"
                                href="{{ asset('main/pdf/R.D. N°2862-IESPAL-2023 CRONOGRAMA ACADÉMICO 2023-II.pdf') }}"
                                title="Cronograma Academico 2023 II"><i class="fa fa-download"></i> Cronograma Academico
                                2023
                                II</a></p>
                        <p><a target="_blank"
                                href="{{ asset('main/pdf/R.D. N°0073-IESPAL-2024 CRONOGRAMA ACADÉMICO 2024-I.pdf') }}"
                                title="Cronograma Academico 2024 I"><i class="fa fa-download"></i> Cronograma Academico
                                2024
                                I</a></p>
                        <p><a target="_blank"
                                href="{{ asset('main/pdf/MANUAL DE PROCEDIMIENTO PARA EL POSTULANTE 2023-I.pdf') }}"
                                title="Manual de Procedimiento para el Postulante"><i class="fa fa-download"></i> Manual
                                de
                                Procedimiento para el Postulante 2023 I</a></p>
                        <p><a target="_blank"
                                href="{{ asset('main/pdf/MANUAL DE PROCEDIMIENTO Y GUIA DEL POSTULANTE 2023-II.pdf') }}"
                                title="Manual de Procedimiento para el Postulante"><i class="fa fa-download"></i> Manual
                                del
                                Procedimiento para el Postulante 2023 II</a></p>
                        <p><a target="_blank"
                                href="{{ asset('main/pdf/MANUAL DE PROCEDIMIENTO PARA EL POSTULANTE 2024-I.docx') }}"
                                title="Manual de Procedimiento para el Postulante"><i class="fa fa-download"></i> Manual
                                de
                                Procedimiento para el Postulante 2024 I</a></p>
                        <hr>
                        <b style="color: #052c6f; font-size: 20px;">Relación de Postulantes 2023 I</b>
                        <div class="linea-izquierda"></div>
                        <div style="margin-left:15px;">
                            <p><a target="_blank" href="{{ asset('main/pdf/POSTULANTES ENFERMERIA 2023.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i> Enfermería Técnica</a></p>
                            <p><a target="_blank" href="{{ asset('main/pdf/POSTULANTES FARMACIA 2023.pdf') }}"
                                    style="margin-top:10px;">
                                    <i class="fas fa-file-pdf"></i>Farmacia Técnica</a></p>
                            <p><a target="_blank" href="{{ asset('main/pdf/POSTULANTES FISIOTERAPIA 2023.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i> Fisioterapia y
                                    Rehabilitación</a></p>
                            <p><a target="_blank" href="{{ asset('main/pdf/POSTULACIÓNORDINARIA-2023-I.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i> Laboratorio Clínico y
                                    Anatomía
                                    Patológica</a></p>
                            <p><a target="_blank" href="{{ asset('main/pdf/POSTULANTES PROTESIS 2023.pdf') }}"
                                    style="margin-top:10px;">
                                    <i class="fa fa-download"></i> Prótesis Dental</a>
                        </div>
                        <hr>
                        <b style="color: #052c6f;
                        font-size: 20px;">Relación de Postulantes
                            2023 II</b>
                        <div class="linea-izquierda"></div>
                        <div style="margin-left:15px;">
                            <p><a target="_blank" href="{{ asset('main/pdf/POSTULANTES-ENFERMERIA 2023-II.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i> Enfermería Técnica</a></p>
                            <p><a target="_blank" href="{{ asset('main/pdf/POSTULANTES-FARMACIA 2023-II.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i> Farmacia Técnica</a></p>
                            <p><a target="_blank" href="{{ asset('main/pdf/POSTULANTES-FISIOTERAPIA 2023-II.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i> Fisioterapia y
                                    Rehabilitación</a></p>
                            <p><a target="_blank" href="{{ asset('main/pdf/POSTULANTES-LABORATORIO 2023-II.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i> Laboratorio Clínico y
                                    Anatomía
                                    Patológica</a></p>
                            <p><a target="_blank" href="{{ asset('main/pdf/POSTULANTES-PRÓTESIS 2023-II.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i> Prótesis Dental</a></p>
                        </div>
                        <hr>
                        <b style="color: #052c6f;
                        font-size: 20px;">Relación de Postulantes
                            2024 I</b>
                        <div class="linea-izquierda"></div>
                        <div style="margin-left:15px;">
                            <p><a target="_blank" href="{{ asset('main/pdf/ENFERMERIA 2024-I.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i>Enfermería Técnica</a></p>
                            <p><a target="_blank" href="{{ asset('main/pdf/FARMACIA 2024-I.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i>Farmacia Técnica</a></p>
                            <p><a target="_blank" href="{{ asset('main/pdf/FISIOTERAPIA-I.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i>Fisioterapia y
                                    Rehabilitación</a></p>
                            <p><a target="_blank"
                                    href="{{ asset('main/pdf/LABORATORIO CLINICO Y ANATOMIA PATOLOGICA  2024-I.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i>Laboratorio Clínico y Anatomía
                                    Patológica</a></p>
                            <p><a target="_blank" href="{{ asset('main/pdf/PROTESIS DENTAL 2024-I.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i>Prótesis Dental</a></p>
                        </div>
                        <hr>
                        <b style="    color: #052c6f;
                        font-size: 20px;">Relación de Ingresantes
                            2023 I</b>
                        <div class="linea-izquierda"></div>
                        <div style="margin-left:15px;">
                            <p><a target="_blank" href="{{ asset('main/pdf/INGRESANTES DE ENFERMERIA 2023-I.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i>Enfermería Técnica</a></p>
                            <p><a target="_blank" href="{{ asset('main/pdf/INGRESANTES DE FARMACIA 2023-I.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i> Farmacia Técnica</a></p>
                            <p><a target="_blank" href="{{ asset('main/pdf/INGRESANTES DE FISIOTERAPIA 2023-I.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i> Fisioterapia y
                                    Rehabilitación</a></p>
                            <p><a target="_blank" href="{{ asset('main/pdf/INGRESANTES DE LABORATORIO 2023-I.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i> Laboratorio Clínico y Anatomía
                                    Patológica</a></p>
                            <p><a target="_blank" href="{{ asset('main/pdf/INGRESANTES DE PROTESIS 2023-I.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i> Prótesis Dental</a></p>
                        </div>
                        <hr>
                        <b style="    color: #052c6f;
                        font-size: 20px;">Relación de Ingresantes
                            2023 II</b>
                        <div class="linea-izquierda"></div>
                        <div style="margin-left:15px;">
                            <p><a target="_blank"
                                    href="{{ asset('main/pdf/INGRESANTES-ENFERMERÍA TÉCNICA 2023-II.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i> Enfermería Técnica</a></p>
                            <p><a target="_blank" href="{{ asset('main/pdf/INGRESANTES-FARMACIA TÉCNICA 2023-II.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i> Farmacia Técnica</a>
                            <p><a target="_blank"
                                    href="{{ asset('main/pdf/INGRESANTES-FISIOTERAPIA Y REHABILITACIÓN 2023-II.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i> Fisioterapia y
                                    Rehabilitación</a></p>
                            <p><a target="_blank"
                                    href="{{ asset('main/pdf/INGRESANTES LABORATORIO CLÍNICO 2023-II.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i> Laboratorio Clínico y Anatomía
                                    Patológica</a></p>
                            <p><a target="_blank" href="{{ asset('main/pdf/INGRESANTES-PRÓTESIS DENTAL 2023-II.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i> Prótesis Dental</a></p>
                        </div>
                        <hr>
                        <b style="color: #052c6f; font-size: 20px;"> Relación de Ingresantes 2024 I</b>
                        <div class="linea-izquierda"></div>
                        <div style="margin-left:15px;">
                            <p><a target="_blank"
                                    href="{{ asset('main/pdf/ENFERMERÍA TÉCNICA - INGRESANTES 2024-I.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i> Enfermería Técnica</a></p>
                            <p><a target="_blank"
                                    href="{{ asset('main/pdf/FARMACIA TÉCNICA - INGRESANTES 2024-I.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i> Farmacia Técnica</a></p>
                            <p><a target="_blank"
                                    href="{{ asset('main/pdf/FISIOTERAPIA Y REHABILITACIÓN - INGRESANTES 2024-I.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i> Fisioterapia y
                                    Rehabilitación</a></p>
                            <p><a target="_blank"
                                    href="{{ asset('main/pdf/LABORATORIO CLÍNICO Y ANATOMÍA PATOLÓGICA - INGRESANTES 2024-I.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i> Laboratorio Clínico y Anatomía
                                    Patológica</a></p>
                            <p><a target="_blank" href="{{ asset('main/pdf/PRÓTESIS DENTAL - INGRESANTES 2024-I.pdf') }}"
                                    style="margin-top:10px;"><i class="fa fa-download"></i> Prótesis Dental</a></p>
                        </div>

                    </div>
                </div>
                <div class="tab">
                    <input type="radio" name="abrir" id="acc4" />
                    <label for="acc4">
                        <h3>NÚMERO DE INGRESANTES, MATRICULADOS Y EGRESADOS SEGÚN PERIODOS ÁCADEMICOS Y PROGRAMAS DE
                            ESTUDIOS.</h3>
                        <div class="linea-izquierda"></div>
                    </label>
                    <div class="content" style="overflow-y: auto; max-height: 400px; padding: 10px;">
                        <b style="color: #052c6f; font-size: 20px;"> 1. CUADRO ESTADÍSTICOS DE INGRESANTES</b>
                        <div class="linea-izquierda"></div>
                        <p><a target="_blank" href="assets/pdf/CUADRO DE INGRESOS.pdf" style="margin-top:10px;"><i
                                    class="fa fa-download"></i> Año 2019</a></p>
                        <p><a target="_blank" href="assets/pdf/CUADRO DE INGRESOS.pdf"><i class="fa fa-download"></i> Año
                                2020</a></p>
                        <p><a target="_blank" href="assets/pdf/CUADRO DE INGRESOS.pdf"><i class="fa fa-download"></i> Año
                                2021</a></p>
                        <p><a target="_blank" href="assets/pdf/CUADRO DE INGRESOS.pdf"><i class="fa fa-download"></i>
                                Año 2022</a></p>
                        <p><a target="_blank" href="assets/pdf/CUADRO DE INGRESOS.pdf"><i class="fa fa-download"></i> Año
                                2023</a></p>
                        <b style="color: #052c6f; font-size: 20px;"> 2. CUADRO ESTADÍSTICOS DE MATRICULADOS</b>
                        <div class="linea-izquierda"></div>
                        <p><a target="_blank" href="assets/pdf/CUADRO DE MATRICULADOS.pdf" style="margin-top:10px;"><i
                                    class="fa fa-download"></i> Año 2019</a></p>
                        <p><a target="_blank" href="assets/pdf/CUADRO DE MATRICULADOS.pdf"><i class="fa fa-download"></i>
                                Año 2020</a></p>
                        <p><a target="_blank" href="assets/pdf/CUADRO DE MATRICULADOS.pdf"><i class="fa fa-download"></i>
                                Año 2021</a></p>
                        <p><a target="_blank" href="assets/pdf/CUADRO DE MATRICULADOS.pdf"><i class="fa fa-download"></i>
                                Año 2022</a></p>
                        <p><a target="_blank" href="assets/pdf/CUADRO DE MATRICULADOS.pdf"><i class="fa fa-download"></i>
                                Año 2023</a></p>
                        <hr>
                        <b style="color: #052c6f; font-size: 20px;"> 3. CUADRO ESTADÍSTICOS DE EGRESADOS</b>
                        <div class="linea-izquierda"></div>
                        <p><a target="_blank" href="assets/pdf/CUADRO DE EGRESADO.pdf" style="margin-top:10px;"><i
                                    class="fas fa-file-pdf"></i>Año 2019</a></p>
                        <p><a target="_blank" href="assets/pdf/CUADRO DE EGRESADO.pdf"><i class="fa fa-download"></i> Año
                                2020</a></p>
                        <p><a target="_blank" href="assets/pdf/CUADRO DE EGRESADO.pdf"><i class="fa fa-download"></i> Año
                                2021</a></p>
                        <p><a target="_blank" href="assets/pdf/CUADRO DE EGRESADO.pdf"><i class="fa fa-download"></i> Año
                                2022</a></p>
                        <p><a target="_blank" href="assets/pdf/CUADRO DE EGRESADO.pdf"><i class="fa fa-download"></i> Año
                                2023</a></p>
                    </div>
                </div>
                <div class="tab">
                    <input type="radio" name="abrir" id="acc2" />
                    <label for="acc2">RELACIÓN DE PROGRAMAS DE ESTUDIO, HORARIOS Y PROCESO DE MATRICULA.</h3>
                        <div class="linea-izquierda"></div>
                    </label>
                    <div class="content" style="overflow-y: auto; max-height: 400px; padding: 10px;">
                        <p><a target="_blank" href="{{ asset('main/pdf/12_enf.pdf') }}" style="margin-top:10px;"><i
                                    class="fa fa-download"></i> Enfermería Ténica</a></p>
                        <p><a target="_blank" href="{{ asset('main/pdf/15_far.pdf') }}"><i
                                    class="fa fa-download"></i> Farmacia
                                Técnica</a></p>
                        <p><a target="_blank" href="{{ asset('main/pdf/14_fis.pdf') }}"><i
                                    class="fa fa-download"></i> Fisioterapia
                                y Rehabilitación</a></´p>
                        <p><a target="_blank" href="{{ asset('main/pdf/13_pro.pdf') }}"><i
                                    class="fa fa-download"></i> Prótesis
                                Dental</a></p>
                        <p><a target="_blank" href="{{ asset('main/pdf/16_lab.pdf') }}"><i
                                    class="fa fa-download"></i> Laboratorio
                                Clínico y Anatomía Patológica</a></p>
                    </div>
                </div>
                <div class="tab">
                    <input type="radio" name="abrir" id="acc2" />
                    <label for="acc2">CONFORMACIÓN DEL CUERPO DOCENTE Y UNIDADES DIDACTICAS EN LAS QUE SE DESEMPEÑAN.
                        </h3>
                        <div class="linea-izquierda"></div>
                    </label>
                    <div class="content" style="overflow-y: auto; max-height: 400px; padding: 10px;">
                        <p><a href="{{ asset('main/pdf/CV-ENFERMERIA.pdf') }}" target="_blank"><i
                                    class="fa fa-download"></i> Enfermería Ténica</a></p>
                        <p><a href="{{ asset('main/pdf/cv-farmacia.pdf') }}" target="_blank"><i
                                    class="fa fa-download"></i> Farmacia
                                Técnica</a></p>
                        <p><a href="{{ asset('main/pdf/cv-fisio.pdf') }}" target="_blank"><i
                                    class="fa fa-download"></i> Fisioterapia
                                y Rehabilitación</a></p>
                        <p><a href="javascript:void(0);"><i class="fa fa-download"></i> Prótesis Dental</a></p>
                        <p><a href="{{ asset('main/pdf/cv-lab.pdf') }}" target="_blank"><i
                                    class="fa fa-download"></i> Laboratorio
                                Clínico y Anatomía Patológica</a>
                    </div>
                </div>
        </div>
    </section>
    <style>
        .container-transparencia {
            /*  margin: 0 40px 350px 0; */
            max-width: auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
            font-family: "poppins-Medium";
        }

        .container-transparencia .tab {
            position: relative;
            background: #fff;
            padding: 0 20px 20px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.05);
            border-radius: 5px;
            overflow: hidden;
        }

        .container-transparencia .tab input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        h3 {
            font-size: 16px !important;
            /* Ajusta según el diseño */
            line-height: 1.5;
            color: #052c6f;
        }

        .container-transparencia .tab .content p {
            position: relative;
            padding: 10px 10px 10px 50px;
            margin-top: 20px;
            background: #052c6f;
            border-radius: 50px;
            color: #333;
            z-index: 10;
        }
    </style>


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
