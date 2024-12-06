@extends('main.index')

@section('content')
    <section id="contacto"
        style="    background-image: url(https://www.ial.edu.pe/web_loayza/assets/img/imgactualizado/signovideo20.png);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;">
        <div class="container">
            <div class="info-text">
                <h3>¿Quieres ser parte de la Familia Loayzina? <br> <span style="color: #ff7f00">¡Tu futuro empieza
                        aquí!</span></h3>
                <p>Conviértete en parte de una comunidad educativa que impulsa tu crecimiento. Contáctanos para <br> conocer
                    más sobre nuestras carreras, programas y cómo puedes unirte al Instituto Arzobispo Loayza.</p>
            </div>
            <div class="form-container">
                <h3>¿Qué quieres <span style="color: #00c9fa">estudiar?</span></h3>
                <p>¡Estamos listos para ayudarte a construir tu mejor futuro!</p>
                <form action="{{ route('registrar') }}" method="POST">
                    @csrf
                    <div class="items-options">
                        <label class="radio-container">
                            <input type="radio" id="option1" name="radio-group" value="carrera"
                                onclick="toggleOptions()" checked>
                            <div class="custom-radio">
                                <div class="custom-radio-inner"></div>
                            </div>
                            <span>Carreras</span>
                        </label>
                        <label class="radio-container">
                            <input type="radio" id="option2" name="radio-group" value="formacion"
                                onclick="toggleOptions()">
                            <div class="custom-radio">
                                <div class="custom-radio-inner"></div>
                            </div>
                            <span>Formación continua</span>
                        </label>
                    </div>
                    <input type="hidden" name="org" value="Web">
                    <input type="hidden" name="pro" value="1">
                    <input type="hidden" name="dis" value="15">
                    <input type="hidden" name="mod" value="2">

                    <div class="item">
                        <input type="text" name="dni" placeholder="DNI" required autofocus>
                    </div>
                    <div class="item">
                        <input type="text" name="nom" placeholder="Nombres" required>
                        <input type="text" name="ape" placeholder="Apellidos" required>
                    </div>
                    <div class="item">
                        <input type="text" name="tel" placeholder="Teléfono" required>

                        <!-- Opciones de Carrera y Curso -->

                        <select name="carrera_id" id="carrera_id" required>
                            @foreach ($Carreras as $item)
                                <option value="{{ $item->carrera_id }}">{{ $item->nombre }}</option>
                            @endforeach
                        </select>

                        <select name="carrera_id" id="curso_id" required>
                            @foreach ($Curso as $item)
                                <option value="{{ $item->carrera_id }}">{{ $item->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="item">
                        <input type="email" name="maix" placeholder="Correo" required>
                    </div>
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
                    <label class="check-label"><input type="checkbox" required> Autorizo a IAL, a utilizar mis datos para
                        comunicarse
                        <br> conmigo y enviarme información.</label>
                    <button type="submit" class="submit-button">Enviar
                        <img src="{{ asset('main/image/Group_747_white.png') }}" width="10" alt="Arrow">
                    </button>
                </form>

                

            </div>
        </div>
    </section>
@endsection

@section('scripts')
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

        // Función para mostrar u ocultar las opciones de Carrera o Curso
        function toggleOptions() {
            // Obtener los elementos de carrera y curso
            var carreraOption = document.getElementById('option1');
            var formacionOption = document.getElementById('option2');
            var carreraOptions = document.getElementById('carrera_id');
            var cursoOptions = document.getElementById('curso_id');

            // Si "Carreras" está seleccionado, muestra las opciones de carrera
            if (carreraOption.checked) {
                carreraOptions.style.display = 'block';
                cursoOptions.style.display = 'none';
            }
            // Si "Formación continua" está seleccionado, muestra las opciones de curso
            else if (formacionOption.checked) {
                carreraOptions.style.display = 'none';
                cursoOptions.style.display = 'block';
            }
        }

        // Llamar a la función cuando el documento haya terminado de cargarse
        document.addEventListener('DOMContentLoaded', function() {
            toggleOptions(); // Esto asegura que la opción correcta se muestre al cargar la página
        });
    </script>
@endsection
