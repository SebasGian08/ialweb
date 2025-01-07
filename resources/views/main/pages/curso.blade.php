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

    <section id="tus-datos">
        <div class="container">
            <p>Déjanos tus datos y te contactaremos
                <a href="{{ route('contacto') }}">Aquí <img src="{{ asset('main/image/Group_747_orange.png') }}"
                        alt="Arrow" width="10"></a>
            </p>
        </div>
    </section>

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
                            @if ($Model->fecha_inicio != null)
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
                            @endif
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
                                        <h6>Creditos</h6>
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
                                        <p>{{ implode(', ', $Model->modalidad) }}</p>
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
                        <input type="text" name="nom" placeholder="Nombres" required>
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

    <section id="desarolla-habilidades">
        <div class="container">
            <div class="info-content content-two">
                <div class="items-goals">
                    <h5>Beneficios que <br> brindamos</h5>
                    <div class="linea-izquierda"></div>
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
                </div>
                <div class="item-slider">
                    {{-- <h5>Este curso es para ti</h5> --}}
                    @if (is_array($Model->galeria_path) && count($Model->galeria_path) > 0)
                        <div class="slider">
                            @foreach ($Model->galeria_path as $foto)
                                <div>
                                    <img src="{{ asset('img/' . $foto) }}" alt="Imagen del curso"
                                        style="width: 100%; height: auto;">


                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>No hay imágenes disponibles en la galería.</p>
                    @endif
                </div>
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
                            <a href="{{ asset($Model->brochure) }}" download>Descargar aquí <img
                                    src="{{ asset('main/image/Group_747_down.png') }}" width="20"
                                    alt="Down"></a>
                        </div>
                    </div>
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
        });
    </script>
@endsection
