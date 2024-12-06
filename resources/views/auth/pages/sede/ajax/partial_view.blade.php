<link rel="stylesheet" href="{{ asset('auth/plugins/file-input/css/fileinput.min.css') }}">
<div class="modal fade" id="modal{{ $ViewName }}" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ ($Model != null ? 'Modificar' : 'Registrar') . ' ' . $ViewName }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form action="{{ route('auth.' . strtolower($ViewName) . '.store') }}" id="frm{{ $ViewName }}"
                enctype="multipart/form-data" method="POST" data-ajax="true" class="form" data-ajax-loading="#loader"
                data-ajax-success="OnSuccess{{ $ViewName }}" data-ajax-failure="OnFailure{{ $ViewName }}">
                @csrf
                <input type="hidden" name="id" value="{{ $Model != null ? $Model->id : '0' }}">
                <input type="hidden" id="imagen_path" name="imagen_path"
                    value="{{ $Model != null ? $Model->imagen_path : '' }}">
                <div class="modal-body">
                    <div class="form-group row mb-3">
                        <div class="col-md-6">
                            <label for="imagen" class="form-label col-form-label">Imagen: <span
                                    class="text-danger">(*)</span></label>
                            <div class="file-loading">
                                <input id="imagen" name="imagen"
                                    data-preview="{{ $Model != null ? $Model->imagen : '' }}"
                                    accept="image/png, image/gif, image/jpeg, image/jpg" type="file">
                            </div>
                            <div id="kartik-file-errors"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row mb-3">
                                <div class="col-md-12">
                                    <label for="nombre" class="form-label col-form-label">Nombre: <span
                                            class="text-danger">(*)</span></label>
                                    <input type="text" id="nombre" name="nombre" class="form-control"
                                        value="{{ $Model != null ? $Model->nombre : '' }}" required>
                                    <span data-valmsg-for="nombre"></span>
                                </div>
                                <div class="col-md-12">
                                    <label for="telefono" class="form-label col-form-label">Teléfono: <span
                                            class="text-danger">(*)</span></label>
                                    <input type="text" id="telefono" name="telefono" class="form-control"
                                        value="{{ $Model != null ? $Model->telefono : '' }}" required>
                                    <span data-valmsg-for="telefono"></span>
                                </div>
                                {{-- <div class="col-md-12">
                                    <label for="direccion" class="form-label col-form-label">Dirección: <span class="text-danger">(*)</span></label>
                                    <textarea id="direccion" name="direccion" rows="5" class="form-control" required>{{ $Model != null ? $Model->direccion : ""  }}</textarea>
                                    <span data-valmsg-for="descripcion"></span>
                                </div> --}}
                                <div class="col-md-12">
                                    <label for="direccion" class="form-label col-form-label">Dirección: <span
                                            class="text-danger">(*)</span></label>
                                    @if ($Model != null && $Model->direccion != null && is_array($Model->direccion) && count($Model->direccion) > 0)
                                        @for ($i = 0; $i < count($Model->direccion); $i++)
                                            <div class="input-group mb-2 direccion_row"
                                                data-index="{{ $i }}">
                                                <input type="text" class="form-control"
                                                    name="direccion[{{ $i }}][texto]"
                                                    value="{{ $Model->direccion[$i]['texto'] ?? '' }}"
                                                    placeholder="Dirección" required>
                                                <input type="url" class="form-control"
                                                    name="direccion[{{ $i }}][link]"
                                                    value="{{ $Model->direccion[$i]['link'] ?? '' }}"
                                                    placeholder="Enlace de Google Maps" required>
                                                @if ($i == 0)
                                                    <div class="btn btn-primary input-group-addon add_direccion_button"
                                                        style="border-radius: 0">
                                                        <i class="fa fa-plus fa-sm"></i>
                                                    </div>
                                                @else
                                                    <div class="btn btn-danger input-group-addon remove_direccion_button"
                                                        style="border-radius: 0">
                                                        <i class="fa fa-times"></i>
                                                    </div>
                                                @endif
                                            </div>
                                        @endfor
                                    @else
                                        <div class="input-group mb-2 direccion_row" data-index="0">
                                            <input type="text" class="form-control" name="direccion[0][texto]"
                                                placeholder="Dirección" required>
                                            <input type="url" class="form-control" name="direccion[0][link]"
                                                placeholder="Enlace de Google Maps" required>
                                            <div class="btn btn-primary input-group-addon add_direccion_button"
                                                style="border-radius: 0">
                                                <i class="fa fa-plus fa-sm"></i>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="direccion_field_wrapper"></div>
                                    <span data-valmsg-for="direccion"></span>
                                </div>



                                <div class="col-md-12">
                                    <label for="horarios" class="form-label col-form-label">Horarios: <span
                                            class="text-danger">(*)</span></label>
                                    @if ($Model != null && $Model->horarios != null && count($Model->horarios) > 0)
                                        @for ($i = 0; $i < count($Model->horarios); $i++)
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control r-description n1s pull-right"
                                                    name="horarios[]" value="{{ $Model->horarios[$i] }}" required>
                                                @if ($i == 0)
                                                    <div class="btn btn-primary input-group-addon add_input_button"
                                                        style="border-radius: 0"><i class="fa fa-plus fa-sm"></i>
                                                    </div>
                                                @else
                                                    <div class="btn btn-danger input-group-addon remove_input_button"
                                                        style="border-radius: 0"><i class="fa fa-times"></i></div>
                                                @endif
                                            </div>
                                        @endfor
                                    @else
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="horarios[]" required>
                                            <div class="btn btn-primary input-group-addon add_input_button"
                                                style="border-radius: 0"><i class="fa fa-plus fa-sm"></i></div>
                                        </div>
                                    @endif
                                    <div class="field_wrapper"></div>
                                    <span data-valmsg-for="horarios"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-white" data-bs-dismiss="modal">Cerrar</a>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i>
                        {{ $Model != null ? 'Modificar' : 'Registrar' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="{{ asset('auth/plugins/file-input/js/fileinput.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('auth/plugins/file-input/js/locales/es.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        const $modal = $("#modal{{ $ViewName }}");
        const $form = $("#frm{{ $ViewName }}");
        const $image = $("#imagen"),
            $imagen_path = $("#imagen_path");
        $image.fileinput({
            showPreview: true,
            showUpload: false,
            language: "es",
            initialPreviewAsData: true,
            initialPreviewFileType: 'image',
            elErrorContainer: '#kartik-file-errors',
            allowedFileExtensions: ["jpeg", "jpg", "png", "gif"],
            initialPreview: $image.attr('data-preview') !== "" ? [$image.attr('data-preview')] : [],
            initialPreviewConfig: [{
                caption: "Imagen"
            }]
        });
        $("body").on("click", "button.fileinput-remove", function() {
            $imagen_path.val("");
        });

        $modal.on("click", ".add_input_button", function() {
            const $fieldWrapper = $modal.find('.field_wrapper')
            const $htmlHeadGroupInput = '<div class="input-group">';
            const $htmlEndGroupInput =
                '<div class="btn btn-danger input-group-addon remove_input_button" style="border-radius: 0"><i class="fa fa-times"></i></div></div>';
            $fieldWrapper.append($htmlHeadGroupInput +
                '<input type="text" class="form-control" name="horarios[]" required>' +
                $htmlEndGroupInput);
        });

        $modal.on("click", ".remove_input_button", function() {
            const $this = $(this);
            $this.closest(".input-group").remove();
        });


        /* PARA DIRECCION Y LINK */
        $(document).on('click', '.add_direccion_button', function() {
            var direccionCount = $('.direccion_row').length; // Contamos cuántas direcciones hay
            var newRow = `
            <div class="input-group mb-2 direccion_row" data-index="${direccionCount}">
                <input type="text" class="form-control" name="direccion[${direccionCount}][texto]" placeholder="Dirección" required>
                <input type="url" class="form-control" name="direccion[${direccionCount}][link]" placeholder="Enlace de Google Maps" required>
                <div class="btn btn-danger input-group-addon remove_direccion_button" style="border-radius: 0">
                    <i class="fa fa-times"></i>
                </div>
            </div>
        `;
            $('.direccion_field_wrapper').append(newRow);
        });

        $(document).on('click', '.remove_direccion_button', function() {
            $(this).closest('.direccion_row').remove();
        });
        /* FIN */

        setTimeout(function() {
            $modal.find("form").find("input[type=text]").first().focus().select();
        }, 500);
        OnSuccess{{ $ViewName }} = (data) => onSuccessForm(data, $form, $modal);
        OnFailure{{ $ViewName }} = () => onFailureForm();
    });
</script>
