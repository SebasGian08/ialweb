@extends('main.index')

@section('styles')
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css') }}">
@endsection

@section('content')
    @if (count($Portadas) > 0)
        <section id="portada" class="main-banner">
            <div class="container-fluid">
                <div class="owl-carousel owl-banner">
                    @foreach ($Portadas as $item)
                        <div class="item">
                            <picture>
                                <source media="(max-width: 650px)" srcset="{{ asset($item->imagen_mobile) }}">
                                <img src="{{ asset($item->imagen) }}" alt="{{ $item->nombre }}">
                            </picture>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section id="formacion-academica"
        style="background-image: url(https://www.ial.edu.pe/web_loayza/assets/img/imgactualizado/signovideo20.png);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;">
        <div class="container">
            <div class="info-text">
                <h3>Áreas de Formación <br>Academica</h3>
                <div class="linea"></div>
                <p> Formación Integral y Especializada para un Futuro Brillante.
                    Explora las diversas especialidades que ofrecemos, diseñadas para potenciar tu desarrollo
                    profesional y personal.</p>
                <ul>
                    <li><a href="{{ route('cursos') }}">Formación continua</a></li>
                    <li><a href="#" class="active">Programas</a></li>
                    <li><a href="{{ route('idioma', ['slug' => 'idioma']) }}">Idiomas</a></li>
                </ul>
            </div>
            <div class="gallery">
                @foreach ($Carreras as $item)
                    <div class="item">
                        <img src="{{ asset($item->imagen) }}" class="image" alt="{{ $item->nombre }}">
                        <a href="{{ route('carrera', ['slug' => $item->slug]) }}" class="call-to-action">Ver Carrera <img
                                src="{{ asset('main/image/Group_747_white.png') }}" width="10" alt="Arrow"></a>
                        <span class="title"><?php echo $item->nombre_dos_lineas; ?></span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="compromiso-excelencia">
        <div class="container">
            <div class="info-content">
                <div class="info-text">
                    <h3>Compromiso con <br> la <span class="highlight">Excelencia</span></h3>
                    <div class="linea"></div>
                    <p style="text-align: justify;">
                        Nuestra institución se destaca por su tradición de calidad, combinando experiencia,
                        innovación y un entorno diseñado para el éxito. Cada uno de nuestros pilares refleja
                        el compromiso de ofrecer una educación que forma líderes preparados para enfrentar
                        los desafíos del futuro, brindando a nuestros estudiantes un espacio donde pueden
                        crecer académica y personalmente, con el respaldo de un equipo dedicado a su desarrollo integral.
                    </p>
                </div>
                <div>
                    <div class="info-image" style="top: 0px">
                        {{-- <img src="{{ asset('main/image/revisar.png') }}" class="icon start" alt="Revisar"> --}}
                        <img src="{{ asset('main/image/compromiso.png') }}" class="person" alt="Enfermería">
                        {{-- <img src="{{ asset('main/image/editar.png') }}" class="icon edit" alt="Editar"> --}}
                    </div>
                </div>
            </div>
            <div class="info-content-pilar">
                <div class="info-text">
                    <h3>Nuestros Pilares <span class="highlight">Institucionales</span></h3>
                    <div class="linea"></div>
                </div>
                <div class="info-grid-pilar">
                    <div class="item-pilar">
                        <img src="{{ asset('main/image/pilar1.png') }}" width="80" alt="Prestigio y Licenciamiento">
                        <div class="item-info">
                            <h5>Prestigio y Licenciamiento</h5>
                            <p>Nuestra institución cuenta con un sólido prestigio y acreditación que avalan la calidad de
                                nuestra educación. Estamos comprometidos con los estándares más altos.</p>
                        </div>
                    </div>
                    <div class="item-pilar">
                        <img src="{{ asset('main/image/pilar2.png') }}" width="80" alt="Docentes de calidad">
                        <div class="item-info">
                            <h5>Docentes de calidad</h5>
                            <p>Contamos con un equipo de docentes altamente calificados, con amplia experiencia y formación
                                especializada.</p>
                        </div>
                    </div>
                    <div class="item-pilar">
                        <img src="{{ asset('main/image/pilar4.png') }}" width="80" alt="Moderna infraestructura">
                        <div class="item-info">
                            <h5>Moderna infraestructura</h5>
                            <p>Nuestras instalaciones están equipadas con la última tecnología y recursos modernos, creando
                                un ambiente de aprendizaje innovador y cómodo.</p>
                        </div>
                    </div>
                    <div class="item-pilar">
                        <img src="{{ asset('main/image/pilar3.png') }}" width="80" alt="Líder en enseñanza">
                        <div class="item-info">
                            <h5>Líder en enseñanza</h5>
                            <p>Nos enorgullece ser líderes en el campo educativo, ofreciendo métodos de enseñanza
                                innovadores y programas académicos de vanguardia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (count($Alianzas) > 0)
        <section id="alianzas-estrategicas">
            <div class="container">
                <div class="info-text">
                    <h3>Alianzas Estratégicas</h3>
                    <div class="linea"></div><br><br>
                </div>
                <div class="owl-carousel owl-branches">
                    @foreach ($Alianzas as $item)
                        <div class="item"><img src="{{ asset($item->imagen) }}" alt="{{ $item->nombre }}"></div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if (count($Testimonios) > 0)
        <section id="experiencias-testimonios"
            style="
        z-index: 5;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-image: linear-gradient(to right, transparent 49px, #CCC 50px), linear-gradient(to bottom, transparent 49px, #CCC 50px);
        background-size: 50px 50px;
        background-position: 0 0, 0 0;
        border: 1px solid rgb(228, 228, 228)">
            <div class="info-content">
                <div class="container">
                    <div class="info-content-info">
                        <h3 style="color: white;">Experiencias que <br>forjan el futuro</h3>
                        <div class="linea-izquierda" style="margin-top: -20px;"></div>
                        <br>
                        <p
                            style="text-align: justify;
                        font-family: 'poppins-Regular';
                        font-size: 14px;
                        color: #0746b3;">
                            En Loyza, cada lección no solo es conocimiento, sino una oportunidad para crecer,
                            aprender y transformar el futuro. Vivir experiencias académicas que van más allá de los libros,
                            formando jóvenes preparados para enfrentar los retos del mañana. Aquí, cada estudiante es parte
                            de un camino hacia el éxito.
                        </p>
                    </div>

                    <div class="items">
                        <div class="owl-carousel owl-testimonial">
                            @foreach ($Testimonios as $item)
                                <div class="item">
                                    <div class="item-image">
                                        <img src="{{ asset($item->imagen) }}" alt="{{ $item->nombre }}">
                                    </div>
                                    <div class="item-content">
                                        <h5>{{ $item->nombre }}</h5>
                                        <h6>{{ $item->cargo }}</h6>
                                        <p>{{ $item->descripcion }}</p>
                                        <hr>
                                        <p class="item-charge">{{ $item->referencia }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if (count($Novedades) > 0)
        <section id="actualidad-loayza">
            <div class="container">
                <div class="info-text">
                    <h3>Nuestras Novedades</h3>
                    <div class="linea"></div>
                    <br>
                </div>
                <div class="owl-carousel owl-news">
                    @foreach ($Novedades as $item)
                        <div class="item">
                            <div class="item-date">
                                <span>{{ \Carbon\Carbon::parse($item->fecha)->format('d') }}</span> <br>
                                {{ \Carbon\Carbon::parse($item->fecha)->format('M') }}
                            </div>
                            <div class="item-image">
                                <img src="{{ asset($item->imagen) }}" alt="{{ $item->nombre }}">
                            </div>
                            <div class="item-info">
                                <h6 style="color:#0746b3;">Novedades</h6>
                                <div class="item-info-title">
                                    <h5 style="color:white;">{{ $item->nombre }}</h5>
                                </div>
                                <div class="item-info-text">
                                    <p style="color:white;">{{ $item->descripcion_breve }}</p>
                                </div>
                                <div class="item-actions">
                                    <a href="{{ route('blog_detalle', ['slug' => $item->slug]) }}" class="read-more">Leer
                                        más</a>
                                    <a href="{{ route('blog_detalle', ['slug' => $item->slug]) }}"
                                        class="view">{{ $item->vista }} Vistas</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section id="centro-estudio" style="background: #0746b308">
        <div class="container">
            <div class="info-text">
                <h3>Encuentra tu centro de estudio</h3>
                <div class="linea"></div>
                <br>
            </div>
            <div class="info-center">
                <div class="info-list-center">
                    @foreach ($Sedes as $key => $item)
                        <a href="javascript:openSede('{{ $item->id }}', 'sede{{ $item->id }}')"
                            id="a-{{ $item->id }}" class="{{ $key == 0 ? 'active' : '' }} tablinks">
                            <div class="item">
                                <ul>
                                    <li><img src="{{ asset('main/image/location.png') }}" width="20" alt="Marker">
                                        {{ $item->nombre }}</li>
                                    <li><img src="{{ asset('main/image/llamada-de-calificacion-de-estrellas 1.png') }}"
                                            width="20" alt=""> {{ $item->telefono }}</li>
                                    <li class="call-action"><span>Ubicanos <img
                                                src="{{ asset('main/image/Group_747.png') }}" width="10"
                                                alt="Arrow"></span></li>
                                </ul>
                            </div>
                        </a>
                    @endforeach
                </div>
                @foreach ($Sedes as $key => $item)
                    <div id="sede{{ $item->id }}" class="info-list-image tabcontent"
                        style="display:{{ $key == 0 ? 'block' : 'none' }}">
                        <div>
                            <!-- Aquí agregamos el iframe del mapa utilizando el enlace almacenado -->
                            @if ($item->direccion && is_array($item->direccion))
                                @foreach ($item->direccion as $key => $direccion)
                                    <div class="map-container"
                                        id="map-container-{{ $item->id }}-{{ $key }}"
                                        style="display:{{ $key == 0 ? 'block' : 'none' }};">
                                        <iframe width="100%" height="450" src="{{ $direccion['link'] }}"
                                            frameborder="0" style="border:0;" allowfullscreen></iframe>
                                    </div>
                                @endforeach
                            @else
                                <p>No hay direcciones disponibles.</p>
                            @endif

                            <div class="items">
                                <div class="item-address"
                                    style="display: flex; flex-direction: column; width: 100%; max-height: 150px; overflow-y: auto;">
                                    <ul style="width: 100%; margin: 0; padding: 0;">
                                        @foreach ($item->direccion as $key => $direccion)
                                            <li class="direccion-item"
                                                style="display: flex; align-items: center; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid #f7f8f9;">

                                                <!-- Icono de mapa -->
                                                <img src="{{ asset('main/image/icon-map.png') }}" width="25px"
                                                    alt="Dirección">

                                                <!-- Contenedor para la dirección y el botón -->
                                                <a href="javascript:void(0);"
                                                    onclick="showMap({{ $item->id }}, {{ $key }})"
                                                    style="text-decoration: none; display: flex; align-items: center; color: white; flex-grow: 1; justify-content: space-between;">
                                                    <span style="flex-grow: 1;">
                                                        {{ $direccion['texto'] }}
                                                    </span>
                                                    <span
                                                        style="font-size: 12px; color: #f7f8f9; background-color: #0746b3; 
                                                           border: 2px solid #f7f8f9; padding: 3px 8px; border-radius: 24px; font-weight: bold;">
                                                        Ver ubicación
                                                        <img src="{{ asset('main/image/Group_747.png') }}" width="8"
                                                            style="filter: brightness(0) invert(1);" alt="Arrow">
                                                    </span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div id="myModal" class="modal-responsive">
        <section id="carrera-informacion"
            style="display: flex; flex-wrap: wrap; gap: 20px; background-color: transparent; position: relative;">
            <!-- Botón de cierre (X) -->
            <button onclick="closeModal()" class="btncerrarmodal">
                &times;
            </button>
            <!-- Contenedor principal -->
            <div class="content-container">
                <!-- Contenedor de la imagen -->
                <div class="image-container">
                    <img src="{{ asset('main/image/post.png') }}" alt=""
                        style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <!-- Contenedor del formulario -->
                <div class="form-container"
                    style="flex: 1; padding: 20px; display: flex; flex-direction: column; justify-content: center; border-radius: 0px;">
                    <h3>Más información <span style="color:#00c9fa">aquí</span></h3><br>
                    <div class="linea" style="background:#00c9fa"></div><br>
                    <form action="{{ route('registrar') }}" method="POST">
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
                            <option value="">Seleccione Carrera...</option>
                            @foreach ($Carreras as $item)
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
        </section>
    </div>
    <div id="overlay" class="fondo-modal">
    </div>


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
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                autoWidth: false,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
            });
            $('.owl-carousel.owl-testimonial').owlCarousel({
                items: 1,
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                autoWidth: false,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
            });
            $('.owl-carousel.owl-branches').owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                dots: true,
                autoplay: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 5,
                    }
                }
            });
            $('.owl-carousel.owl-news').owlCarousel({
                loop: true,
                margin: 40,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 3,
                    }
                }
            });

            openSede = function(id, cityName) {
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
        /* MODAL */
        document.addEventListener('DOMContentLoaded', function() {
            showModal();
        });

        function showModal() {
            document.getElementById('myModal').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }

        // Función para cerrar el modal
        function closeModal() {
            document.getElementById('myModal').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }
        // Función para mostrar el mapa correspondiente de SEDES
        function showMap(sedeId, index) {
            // Ocultar todos los mapas de esa sede específica
            var maps = document.querySelectorAll(`#sede${sedeId} .map-container`);
            maps.forEach(function(map) {
                map.style.display = 'none';
            });

            // Mostrar el mapa correspondiente con el índice
            var selectedMap = document.getElementById(`map-container-${sedeId}-${index}`);
            if (selectedMap) {
                selectedMap.style.display = 'block';
            }
        }
    </script>
@endsection
