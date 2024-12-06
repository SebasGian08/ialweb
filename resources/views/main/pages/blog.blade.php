@extends('main.index')

@section('styles')
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css') }}">
@endsection

@section('content')

    <section id="blog">
        <div class="container">
            <div class="info-content">
                <h3>El Blog de Arzobispo</h3>
                <form action="{{ route('blog') }}" method="GET">
                    <div class="form-input">
                        <input type="search" name="q" value="{{ $Q }}" placeholder="Buscar">
                    </div>
                </form>
            </div>
            <div class="tabs tab-navigation">
                <ul>
                    <li>
                        <a href="javascript:openTab('1', 'todo')" id="a-1"
                            class="{{ $Search ? 'active' : '' }} tablinks">
                            <img src="{{ asset('main/image/archivo-de-carpetas 1.png') }}" width="15" alt="Todo">
                            Todo
                        </a>
                    </li>
                    <li>
                        <a href="javascript:openTab('2', 'blogtab')" id="a-2"
                            class="{{ !$Search ? 'active' : '' }} tablinks">
                            <img src="{{ asset('main/image/lapiz-blog 1.png') }}" width="15" alt="Blog"> Blog
                        </a>
                    </li>
                    <li>
                        <a href="javascript:openTab('3', 'noticia')" id="a-3" class="tablinks">
                            <img src="{{ asset('main/image/periodico 1.png') }}" width="15" alt="Todo"> Noticias
                        </a>
                    </li>
                    <li>
                        <a href="javascript:openTab('4', 'evento')" id="a-4" class="tablinks">
                            <img src="{{ asset('main/image/estrella-del-calendario 1.png') }}" width="15"
                                alt="Todo"> Eventos
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="tab-content tabcontent" id="todo" style="display: {{ $Search ? 'block' : 'none' }}">
                    <div class="container">
                        @if (count($All) > 0)
                            <div id="todos">
                                @foreach ($All as $item)
                                    <div class="item">
                                        <div class="item-date">
                                            <span
                                                style="color:white !important;">{{ \Carbon\Carbon::parse($item->fecha)->format('d') }}</span>
                                            <br>
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
                                                <p>{{ $item->descripcion_breve }}</p>
                                            </div>
                                            <div class="item-actions">
                                                <a href="{{ route('blog_detalle', ['slug' => $item->slug]) }}"
                                                    class="read-more">Leer más</a>
                                                <a href="{{ route('blog_detalle', ['slug' => $item->slug]) }}"
                                                    class="view">{{ $item->vista }} Vistas</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p>No existe información disponible.</p>
                        @endif
                    </div>
                </div>
                <div class="tab-content tabcontent" id="blogtab" style="display: {{ !$Search ? 'block' : 'none' }}">
                    <div class="container">
                        @if ($Blog != null)
                            <div class="info-text">
                                <h5>Últimas Noticias</h5>
                            </div>
                            <img src="{{ asset($Blog->imagen) }}" alt="{{ $Blog->nombre }}" class="banner">
                            <h6>{{ $Blog->categoria }}</h6>
                            <h5>{{ $Blog->nombre }}</h5>
                            <span>{{ $Blog->fecha }}</span>
                            <p>{{ $Blog->descripcion }}</p>
                            <?php echo $Blog->informacion; ?>
                            <div class="networks">
                                <p>Compartir:</p>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('main/image/icon-facebook.png') }}" width="25"
                                                alt="Facebook">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('main/image/icon-instagram.png') }}" width="25"
                                                alt="Instagram">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('main/image/icon-tiktok.png') }}" width="25"
                                                alt="Tiktok">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('main/image/icon-linkedin.png') }}" width="25"
                                                alt="Linkedin">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <p class="tags"><b>Categoría:</b> Todo, {{ $Blog->categoria }}</p>
                        @else
                            <p>No existe información de blogs disponible.</p>
                        @endif
                    </div>
                </div>
                <div class="tab-content tabcontent" id="noticia" style="display: none">
                    <div class="container">
                        @if ($Noticia != null)
                            <div class="info-text">
                                <h5>Lo último de noticias</h5>
                            </div>
                            <img src="{{ asset($Noticia->imagen) }}" alt="{{ $Noticia->nombre }}" class="banner">
                            <h6>{{ $Noticia->categoria }}</h6>
                            <h5>{{ $Noticia->nombre }}</h5>
                            <span>{{ $Noticia->fecha }}</span>
                            <p>{{ $Noticia->descripcion }}</p>
                            <?php echo $Noticia->informacion; ?>
                            <div class="networks">
                                <p>Compartir:</p>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('main/image/icon-facebook.png') }}" width="25"
                                                alt="Facebook">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('main/image/icon-instagram.png') }}" width="25"
                                                alt="Instagram">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('main/image/icon-tiktok.png') }}" width="25"
                                                alt="Tiktok">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('main/image/icon-linkedin.png') }}" width="25"
                                                alt="Linkedin">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <p class="tags"><b>Categoría:</b> Todo, {{ $Noticia->categoria }}</p>
                        @else
                            <p>No existe información de noticias disponible.</p>
                        @endif
                    </div>
                </div>
                <div class="tab-content tabcontent" id="evento" style="display: none">
                    <div class="container">
                        @if ($Evento != null)
                            <div class="info-text">
                                <h5>Lo último de evento</h5>
                            </div>
                            <img src="{{ asset($Evento->imagen) }}" alt="{{ $Evento->nombre }}" class="banner">
                            <h6>{{ $Evento->categoria }}</h6>
                            <h5>{{ $Evento->nombre }}</h5>
                            <span>{{ $Evento->fecha }}</span>
                            <p>{{ $Evento->descripcion }}</p>
                            <?php echo $Evento->informacion; ?>
                            <div class="networks">
                                <p>Compartir:</p>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('main/image/icon-facebook.png') }}" width="25"
                                                alt="Facebook">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('main/image/icon-instagram.png') }}" width="25"
                                                alt="Instagram">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('main/image/icon-tiktok.png') }}" width="25"
                                                alt="Tiktok">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('main/image/icon-linkedin.png') }}" width="25"
                                                alt="Linkedin">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <p class="tags"><b>Categoría:</b> Todo, {{ $Evento->categoria }}</p>
                        @else
                            <p>No existe información de eventos disponible.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="actualidad-loayza">
        <div class="container">
            <div class="info-text">
                <h3>Actualidad Loayza</h3>
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
                                <p>{{ $item->descripcion_breve }}</p>
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
                    items: 2,
                },
                1000: {
                    items: 3,
                }
            }
        });
        openTab = function(id, name) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace("active", "");
            }
            document.getElementById(name).style.display = "block";
            document.getElementById(`a-${id}`).className = "active tablinks";
        }
    </script>
@endsection
