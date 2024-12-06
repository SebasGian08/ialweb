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
                <div class="item">
                    @if ($Categoria === 'Programas')
                        <img src="{{ asset('main/image/programas_portadas.png') }}" alt="Banner Virtual" class="person">
                    @elseif ($Categoria === 'Talleres')
                        <img src="{{ asset('main/image/talleres_portada.png') }}" alt="Banner SemiPresencial"
                            class="person">
                    @elseif ($Categoria === 'Cursos')
                        <img src="{{ asset('main/image/cursos_portada.png') }}" alt="Banner Presencial" class="person">
                    @endif
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
        <div class="container" style="gap: 1rem;">
            <div>
                <h3>
                    @if (isset($Categoria) && !empty($Categoria))
                        Nuestros {{ $Categoria }}
                    @else
                        Formación Continua
                    @endif
                    <div class="linea-izquierda"></div>
                </h3>

                <div class="info-items">
                    @if ($Cursos->isNotEmpty())
                        <div class="parent">
                            @foreach ($Cursos->chunk(4) as $chunk)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <div class="container">
                                        <div class="grid-container">
                                            @foreach ($chunk as $item)
                                                <div class="grid-item">
                                                    <div class="card">
                                                        <a href="{{ route('curso', ['slug' => $item->slug]) }}"
                                                            style="text-decoration: none !important">
                                                            <div class="course-card">
                                                                <div class="image-container">
                                                                    <img src="{{ asset($item->imagen) }}"
                                                                        alt="{{ $item->nombre }}">
                                                                    <div class="overlay">
                                                                        <h3 class="course-name">{{ $item->nombre }}</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="content">
                                                                    <span class="course-duration">
                                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                        Duración: {{ $item->duracion }}
                                                                    </span>
                                                                    <h4 class="course-title">{{ $item->nombre }}</h4>
                                                                    <button class="btn-see-more">Ver más
                                                                        <img src="{{ asset('main/image/Group_747_white.png') }}"
                                                                            style="width: 10px" alt="Arrow">
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>No hay cursos disponibles en esta categoría.</p>
                    @endif
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
                        <select name="curso" required>
                            <option value="" disabled selected>Seleccione...</option>
                            @foreach ($Cursos as $curso)
                                <option value="{{ $curso->id }}" data-carrera="{{ $curso->carrera_id }}">
                                    {{ $curso->nombre }}</option>
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
                        <input type="hidden" name="carrera_id" id="carrera_id">
                        <label class="check-label"><input type="checkbox" required> Autorizo a IAL, a utilizar mis datos
                            para comunicarse conmigo y enviarme información.</label>
                        <button type="submit" class="submit-button">Enviar
                            <img src="{{ asset('main/image/Group_747_white.png') }}" width="10" alt="Arrow">
                        </button>
                    </form>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            document.querySelector('select[name="curso"]').addEventListener('change', function() {
                                var carreraId = this.options[this.selectedIndex].getAttribute('data-carrera');
                                console.log('Carrera ID:',
                                    carreraId); // Imprime en la consola el ID de la carrera seleccionado
                                document.getElementById('carrera_id').value = carreraId || ''; // Asegura que no quede null
                            });
                        });
                    </script>
                </div>
                <style>
                    .form-container {
                        position: sticky;
                        /* Fija el contenedor */
                        top: 10%;
                        /* Posición desde la parte superior */
                    }
                </style>
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
