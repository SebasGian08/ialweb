@extends('main.index')

@section('styles')
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css') }}">
@endsection

@section('content')

    @if ($Model->portada != null)
        <section id="portada" class="main-banner">
            <div class="container-fluid">
                <div class="owl-carousel owl-banner">
                    <div class="item"><img src="{{ asset($Model->portada) }}" alt="{{ $Model->nombre }}"></div>
                </div>
            </div>
        </section>
    @endif
    <section id="tus-datos" style="text-align: center">
        @if($Model->id == 1)
            <img src="{{ asset('main/image/largoenfermeria.jpg') }}" alt="Enfermería" class="img-fluid">
        @elseif($Model->id == 3)
            <img src="{{ asset('main/image/largofarmacia.jpg') }}" alt="Farmacia" class="img-fluid">
        @elseif($Model->id == 4)
            <img src="{{ asset('main/image/largofisioterapia.jpg') }}" alt="Fisioterapia" class="img-fluid">
        @elseif($Model->id == 5)
            <img src="{{ asset('main/image/largolaboratorio.jpg') }}" alt="Laboratorio" class="img-fluid">
        @elseif($Model->id == 6)
            <img src="{{ asset('main/image/largoprotesis.jpg') }}" alt="Prótesis" class="img-fluid">
        @else
            <img src="{{ asset('main/image/default.jpg') }}" alt="Imagen predeterminada" class="img-fluid">
        @endif
    </section>
    

    <style>
        .img-fluid {
            max-width: 100%;
            height: auto;
            border-radius: 22px;
        }
    </style>


    <section id="carrera-informacion">
        <div class="container">
            <div>
                <h3><?php echo $Model->nombre_dos_lineas; ?></h3>
                <div class="linea-izquierda"></div>
                <p>{{ $Model->descripcion }}</p>
                <?php echo $Model->informacion; ?>
                <div class="info-items">
                    <div>
                        <div class="info-item-content">
                            {{-- @if ($Model->fecha_inicio != null)
                                <div class="info-item">
                                    <div class="info-item-image">
                                        <img src="{{ asset('main/image/relojarenarojo.png') }}" alt=""
                                            width="50">
                                    </div>
                                    <div class="info-item-info">
                                        <h6>Inicio</h6>
                                        <p>{{ \Carbon\Carbon::parse($Model->fecha_inicio)->format('d/m/Y') }}</p>
                                    </div>
                                </div>
                            @endif --}}
                            @if ($Model->duracion != null)
                                <div class="info-item">
                                    <div class="info-item-image">
                                        <img src="{{ asset('main/image/cargandoreloj.png') }}" alt=""
                                            width="50">
                                    </div>
                                    <div class="info-item-info">
                                        <h6>Duración</h6>
                                        <p>{{ $Model->duracion }}</p>
                                    </div>
                                </div>
                            @endif
                            @if ($Model->turno != null)
                                <div class="info-item">
                                    <div class="info-item-image">
                                        <img src="{{ asset('main/image/nochedia.png') }}" alt="" width="50">
                                    </div>
                                    <div class="info-item-info">
                                        <h6>Turno</h6>
                                        <p>{{ implode(', ', $Model->turno) }}</p>
                                    </div>
                                </div>
                            @endif
                            @if ($Model->modalidad != null)
                                <div class="info-item">
                                    <div class="info-item-image">
                                        <img src="{{ asset('main/image/3hombres.png') }}" alt="" width="50">
                                    </div>
                                    <div class="info-item-info">
                                        <h6>Modalidad</h6>
                                        <p>100% {{ implode(', ', $Model->modalidad) }}</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
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
                        <input type="hidden" name="carrera_id" id="carrera_id" value="{{ $Model->carrera_id }}">
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
                        {{-- <select>
                            <option value="">Sede</option>
                            @foreach ($Sedes as $item)
                                <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                            @endforeach
                        </select> --}}
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

    <section id="desarolla-habilidades"
        style="background-image: url(https://www.ial.edu.pe/web_loayza/assets/img/imgactualizado/fondohabilidades.png);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;">
        <div class="container">
            <div class="info-content">
                <div>
                    @if ($Model->imagen_habilidad != null)
                        <div class="info-image">
                            <img src="{{ asset($Model->imagen_habilidad) }}" class="person" width="516px"
                                alt="{{ $Model->nombre }}">
                        </div>
                    @endif
                </div>
                <div class="info-text">
                    <h3>¿Por qué estudiar <br> en <span class="highlight">Loayza</span>?</h3>
                    <style>
                        h3 {
                            font-size: 24px;
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
                    <div class="items">
                        {{-- era habilidades --}}
                        @foreach ($Model->beneficios as $item)
                            <div class="item">
                                <img src="{{ asset($item->imagen) }}" class="security" alt="Escudo" width="80">
                                <div>
                                    <h6>{{ $item->nombre }}</h6>
                                    {{-- <p>{{ $item->descripcion }}</p> --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="info-content content-two">
                {{-- <div class="items-goals">
                    <h5>Beneficios que <br> brindamos</h5>
                    <div class="items-goals-list">
                        @foreach ($Model->beneficios as $item)
                            <div class="item">
                                <div class="item-icon">
                                    <img src="{{ asset($item->imagen) }}" alt="{{ $item->nombre }}">
                                </div>
                                <div>
                                    <h6>{{ $item->nombre }}</h6>
                                    <p>{{ $item->descripcion }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div> --}}
                {{-- falta centrar --}}
                <div class="item-video">
                    <h5>¡Esta carrera es <span class="highlight">para ti!</span></h5>
                    <div class="linea" style="margin-top: -30px !important;"></div><br>
                    @if ($Model->video_beneficios != null)
                        <iframe src="{{ str_replace('watch?v=', 'embed/', $Model->video_beneficios) }}" frameBorder="0"
                            width="745" height="407" style="border-radius:20px;"></iframe>
                    @endif
                </div>
            </div>
        </div>
    </section>
    {{-- @if (count($MallaCurricular) > 0)
        <section id="malla-curricular">
            <div class="container">
                <div class="info-text">
                    <h3>Malla curricular</h3><br>
                    <div class="linea"></div>
                    <ul>
                        @foreach ($MallaCurricular as $key => $item)
                            <li><a href="javascript:openMalla('{{ $item->id }}', 'malla{{ $item->id }}')"
                                    id="a-{{ $item->id }}"
                                    class="{{ $key == 0 ? 'active' : '' }} tablinks">{{ $item->nombre }}</a></li>
                        @endforeach
                    </ul>
                </div>
                @foreach ($MallaCurricular as $key => $item)
                    <div id="malla{{ $item->id }}" class="info-content tabcontent"
                        style="display:{{ $key == 0 ? 'block' : 'none' }}">
                        <div class="items">
                            @foreach ($item->descripcion as $item2)
                                <div class="item">
                                    <p>{{ $item2 }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif --}}
    @if ($Model->brochure != null)
        <section id="brochure">
            <div class="container">
                <div class="info-content">
                    <div class="info-content-text">
                        <div>
                            <h3 style="color:#0746b3">Plan de <span class="highlight"
                                    style="background: #0746b3 !important;color:white !important">estudio</span></h3>
                        </div><br>
                        <div>
                            <a href="{{ asset($Model->brochure) }}" download>Descargar aquí
                                <img src="{{ asset('main/image/Group_747_down.png') }}" width="20"
                                    alt="Down"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section id="oportunidades">
        <div class="container">
            <div class="info-content">
                @if ($Model->oportunidades_profesionales != null && count($Model->oportunidades_profesionales) > 0)
                    <div class="item">
                        <div class="item-header" style="display: flex; align-items: center; text-align: left;">
                            <img src="{{ asset('main/image/maletin.png') }}" alt="Maletín"
                                style="margin-right: 10px;width:90px;">
                            <div>
                                <h5 style="margin: 0;text-align:left">Campo <br> Laboral</h5>
                                <div class="linea-izquierda"></div>
                            </div>
                        </div>
                        <br><br>
                        <ul>
                            @foreach ($Model->oportunidades_profesionales as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if ($Model->certificaciones != null && count($Model->certificaciones) > 0)
                    <div class="item">
                        <div class="item-header" style="display: flex; align-items: center; text-align: left;">
                            <img src="{{ asset('main/image/icon-enfermera-rojo.png') }}" alt="Maletín"
                                style="margin-right: 10px;width:90px;">
                            <div>
                                <h5 style="margin: 0;text-align:left">Certificaciones <br> Modulares</h5>
                                <div class="linea-izquierda"></div>
                            </div>
                        </div>
                        <br><br>
                        <ul>
                            @foreach ($Model->certificaciones as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </section>
    @if (count($Alianzas) > 0)
        <section id="alianzas-estrategicas">
            <div class="container">
                <div class="info-text">
                    <h3>Alianzas Estratégicas</h3>
                    <div class="linea"></div>
                </div>
                <div class="owl-carousel owl-branches">
                    @foreach ($Alianzas as $item)
                        <div class="item"><img src="{{ asset($item->imagen) }}" alt="{{ $item->nombre }}"></div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif


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

            openMalla = function(id, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace("active", "");
                }
                document.getElementById(cityName).style.display = "block";
                document.getElementById(`a-${id}`).className = "active tablinks";
            }
        });
    </script>
@endsection
