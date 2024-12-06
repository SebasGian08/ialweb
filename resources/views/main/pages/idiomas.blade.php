@extends('main.index')

@section('styles')
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css') }}">
@endsection

@section('content')

    <section id="portada" class="main-banner">
        <div class="container-fluid">
            <div class="owl-carousel owl-banner">
                <div class="item"><img src="{{ asset('main/image/nosotros_banner.png') }}" alt="Banner 1" class="person"></div>
            </div>
        </div>
    </section>

    <section id="tus-datos">
        <div class="container">
            <p>Déjanos tus datos y te contactaremos
                <a href="#carrera-informacion">Aquí <img src="{{ asset('main/image/Group_747_orange.png') }}" alt="Arrow" width="10"></a>
            </p>
        </div>
    </section>

    <section id="carrera-informacion">
        <div class="container">
            <div>
                <h3>Nuestros Idiomas</h3>
                <div class="info-items">
                    <ul>
                        <li><a href="{{ route('idioma', ['slug' => 'ingles']) }}">Inglés</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="form-container">
                    <h3>Más información aquí</h3>
                    <p>Déjanos tus datos y te contactaremos</p>
                    <form>
                        <input type="text" placeholder="Nombres" required>
                        <input type="text" placeholder="Apellidos" required>
                        <input type="text" placeholder="Celular" required>
                        <input type="email" placeholder="Correo" required>
                        <select>
                            <option value="">Sede</option>
                            @foreach($Sedes as $item)
                                <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                            @endforeach
                        </select>
                        <label class="check-label"><input type="checkbox" required> Autorizo a IAL, a utilizar mis datos para comunicarse conmigo y enviarme información.</label>
                        <button type="submit">Enviar <img src="{{ asset('main/image/Group_747_white.png') }}" width="10" alt="Arrow"></button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @if(count($Alianzas) > 0)
        <section id="alianzas-estrategicas">
            <div class="container">
                <div class="info-text">
                    <h3>Alianzas Estratégicas</h3>
                </div>
                <div class="owl-carousel owl-branches">
                    @foreach($Alianzas as $item)
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
        $(function(){
            $('.animated').appear(function() {
                const elem = $(this);
                const animation = elem.data('animation');
                if ( !elem.hasClass('visible') ) {
                    const animationDelay = elem.data('animation-delay');
                    if ( animationDelay ) {
                        setTimeout(function(){
                            elem.addClass( animation + " visible" );
                        }, animationDelay);
                    } else {
                        elem.addClass( animation + " visible" );
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
                loop:true,
                margin:20,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:2,
                    },
                    600:{
                        items:3,
                    },
                    1000:{
                        items:5,
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
