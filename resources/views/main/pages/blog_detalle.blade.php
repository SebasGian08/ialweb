@extends('main.index')

@section('styles')
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css') }}">
@endsection

@section('content')

    <section id="blog">
        <div class="tabs tab-navigation">
            <div class="tab-content">
                <div class="container">
                    <img src="{{ asset($Model->imagen) }}" width="100%" alt="{{ $Model->nombre }}" class="banner">
                    <h6>Noticias</h6>
                    <div style="display: flex; flex-wrap: wrap;">
                        <!-- Primera columna -->
                        <div style="flex: 2; padding: 10px; box-sizing: border-box;">
                            <h5>{{ $Model->nombre }}</h5>
                            <div class="linea-izquierda"></div>
                            <span> <i class="fa fa-calendar"></i>
                                {{ \Carbon\Carbon::parse($Model->fecha)->format('d/m/y') }}</span>
                            <p>{{ $Model->descripcion }}</p>
                            <?php echo $Model->informacion; ?>
                        </div>
                        <!-- Segunda columna -->
                        <div class="satis-blog">
                            <div class="division">
                                <p>¿Fue útil la información?</p>
                                <div style="display: flex; justify-content: space-between; gap: 10px;">
                                    <!-- Botón feliz -->
                                    <div style="text-align: center; flex: 1;">
                                        <button class="btn-satis" onmouseover="this.style.transform='scale(1.1)';"
                                            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none';">
                                            <img src="{{ asset('main/image/cara-feliz.png') }}" alt="Carita feliz"
                                                style="width: 50px; height: 50px;">
                                        </button>
                                        <p style="margin: 1px 0 0; font-size: 15px; font-weight: 90; color: #333;">SI</p>
                                    </div>
                                    <!-- Botón triste -->
                                    <div style="text-align: center; flex: 1;">
                                        <button class="btn-satis" onmouseover="this.style.transform='scale(1.1)';"
                                            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none';">
                                            <img src="{{ asset('main/image/cara-triste.png') }}" alt="Carita triste"
                                                style="width: 50px; height: 50px;">
                                        </button>
                                        <p style="margin: 1px 0 0; font-size: 15px; font-weight: 900; color: #333;">NO</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="networks">
                        <p>Compartir:</p>
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('main/image/icon-facebook.png') }}" width="25" alt="Facebook">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('main/image/icon-instagram.png') }}" width="25" alt="Instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('main/image/icon-tiktok.png') }}" width="25" alt="Tiktok">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('main/image/icon-linkedin.png') }}" width="25" alt="Linkedin">
                                </a>
                            </li>
                        </ul>
                    </div>
                    {{-- <p class="tags"><b>Categoría : </b>Todo, Noticias, Serum</p> --}}
                </div>
            </div>
        </div>
    </section>

    @if (count($Novedades) > 0)
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
                                <h6>Novedades</h6>
                                <div class="item-info-title">
                                    <h5>{{ $item->nombre }}</h5>
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
    </script>
@endsection
