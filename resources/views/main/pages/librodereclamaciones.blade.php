@extends('main.index')

@section('content')
    <section id="contacto">
        <div class="container">
            <div class="info-text">
                <h3>Libro de Reclamaciones </h3>
                <p>El Intituto Arzobispo Loayza pone a su disposición este formulario para que realice sus reclamos,
                    requerimientos o quejas, los cuales serán atendidos a la brevedad. Gracias por contribuir a la mejora de
                    nuestra atención. <br>
                    Complete y verifique la siguiente información para poder responder satisfactoriamente a su reclamo,
                    requerimiento o queja.</p>
            </div>
            <div class="form-container" style="width:100%">
                <h3 style="text-align: left">Identificación del consumidor reclamante <div class="linea-izquierda"></div>
                </h3>

                <form {{-- action="{{ route('registrar') }}" --}} method="POST">
                    @csrf
                    <div class="item">
                        <input type="text" name="nom" placeholder="Nombres Completos" required autofocus>
                        <input type="text" name="ape" placeholder="Apellidos Completos" required>
                    </div>
                    <div class="item">
                        <input type="text" name="dni" placeholder="D.N.I. / Pasaporte" required>
                        <input type="text" name="tel" placeholder="Teléfono / Celular" required>
                        <input type="email" name="mail" placeholder="Correo" required>
                    </div>
                    <div class="item">
                        <select name="sede_id" id="sede_id" required>
                            @foreach ($Sedes as $item)
                                <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                            @endforeach
                        </select>
                        <select name="carrera_id" id="carrera_id" required>
                            @foreach ($Carreras as $item)
                                <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="item">
                        <input type="text" name="direccion" placeholder="Dirección" required>
                    </div>

                    <h3 style="text-align: left">Identificación del bien contratante
                        <div class="linea-izquierda"></div>
                    </h3>
                    <div class="items-options">
                        <label class="radio-container">
                            <input type="radio" id="option1" name="radio-group" value="servicio"
                                onclick="toggleOptions()" checked>
                            <div class="custom-radio">
                                <div class="custom-radio-inner"></div>
                            </div>
                            <span>Servicio</span>
                        </label>
                        <label class="radio-container">
                            <input type="radio" id="option2" name="radio-group" value="producto"
                                onclick="toggleOptions()">
                            <div class="custom-radio">
                                <div class="custom-radio-inner"></div>
                            </div>
                            <span>Producto</span>
                        </label>
                    </div>
                    <div class="item">
                        <input type="text" name="monto" placeholder="Monto Reclamado" required>
                        <select name="tipo_servicio" id="tipo_servicio" required>
                            <option value="servicioseducativos">Servicios Educativos</option>
                        </select>
                    </div>
                    <h3 style="text-align: left">Tipo
                        <div class="linea-izquierda"></div>
                    </h3>
                    <div class="items-options">
                        <label class="radio-container">
                            <input type="radio" id="reclamo" name="tipo-radio" value="reclamo" onclick="toggleOptions()"
                                checked>
                            <div class="custom-radio">
                                <div class="custom-radio-inner"></div>
                            </div>
                            <span>Reclamo<br>Disconformidad relacionada a productos<br>y servicios brindados por IAL</span>
                        </label>
                        <label class="radio-container">
                            <input type="radio" id="queja" name="tipo-radio" value="queja" onclick="toggleOptions()">
                            <div class="custom-radio">
                                <div class="custom-radio-inner"></div>
                            </div>
                            <span>Queja<br>Malestar o descontento respecto a la atención<br>recibida por parte del personal
                                CARRIÓN</span>
                        </label>
                    </div>
                    <h3 style="text-align: left">Sede / Carrera o Programa / Área
                        <div class="linea-izquierda"></div>
                    </h3>
                    <div class="item">
                        <select name="sede_id" id="sede_id" required>
                            @foreach ($Sedes as $item)
                                <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                            @endforeach
                        </select>
                        <select name="carrera_id" id="carrera_id" required>
                            @foreach ($Carreras as $item)
                                <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <h3 style="text-align: left">Detalle de Reclamación
                        <div class="linea-izquierda"></div>
                    </h3>
                    <div class="item">
                        <textarea class="areainput" name="detalle_reclamacion" placeholder="Ingrese los detalles de su reclamo" rows="5"
                            required></textarea>
                    </div>
                    <h3 style="text-align: left">Pedido del Consumidor
                        <div class="linea-izquierda"></div>
                    </h3>
                    <div class="item">
                        <textarea class="areainput" name="detalle_reclamacion" placeholder="Ingrese pedido del consumidor" rows="5"
                            required></textarea>
                    </div>
                    <h3 style="text-align: left; margin-bottom: 10px;">
                        Adjunto a la reclamación
                        <div class="linea-izquierda"></div>
                    </h3>
                    <div class="item">
                        <label for="archivo_reclamacion" class="upload-container">
                            <div class="upload-content">
                                <img src="{{ asset('main/image/imagen.png') }}" alt="Ícono de archivo"
                                    class="upload-icon">
                                <p class="upload-instruction">
                                    Seleccione o
                                    <span class="upload-link">haga click para seleccionar</span>
                                </p>

                            </div>
                        </label>
                        <input type="file" id="archivo_reclamacion" name="archivo_reclamacion"
                            accept=".jpg, .png, .mp3, .mp4" hidden>
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
    </script>
@endsection
