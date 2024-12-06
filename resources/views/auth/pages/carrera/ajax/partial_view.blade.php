<link rel="stylesheet" href="{{ asset('auth/plugins/file-input/css/fileinput.min.css') }}">
<link rel="stylesheet" href="{{ asset('auth/plugins/summernote/dist/summernote-lite.css') }}">
<link rel="stylesheet" href="{{ asset('auth/plugins/select2/dist/css/select2.min.css') }}">
<div class="modal fade" id="modal{{$ViewName}}" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ ($Model != null ? "Modificar" : "Registrar")." ".$ViewName }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form action="{{ route('auth.'.strtolower($ViewName).'.store') }}" id="frm{{$ViewName}}" enctype="multipart/form-data" method="POST"
                  data-ajax="true" class="form" data-ajax-loading="#loader" data-ajax-success="OnSuccess{{$ViewName}}"
                  data-ajax-failure="OnFailure{{$ViewName}}">
                @csrf
                <input type="hidden" name="id" value="{{ $Model != null ? $Model->id : "0"  }}">
                <input type="hidden" id="imagen_path" name="imagen_path" value="{{ $Model != null ? $Model->imagen_path : "" }}">
                <input type="hidden" id="portada_path" name="portada_path" value="{{ $Model != null ? $Model->portada_path : "" }}">
                <input type="hidden" id="imagen_habilidad_path" name="imagen_habilidad_path" value="{{ $Model != null ? $Model->imagen_habilidad_path : "" }}">
                <input type="hidden" id="brochure_path" name="brochure_path" value="{{ $Model != null ? $Model->brochure_path : "" }}">
                <div class="modal-body">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#default-tab-1" data-bs-toggle="tab" class="nav-link active">
                                <span class="d-sm-none">Información</span>
                                <span class="d-sm-block d-none">Información</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#default-tab-2" data-bs-toggle="tab" class="nav-link">
                                <span class="d-sm-none">Descripción</span>
                                <span class="d-sm-block d-none">Descripción</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#default-tab-3" data-bs-toggle="tab" class="nav-link">
                                <span class="d-sm-none">Oportunidades Profesionales</span>
                                <span class="d-sm-block d-none">Oportunidades Profesionales</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#default-tab-4" data-bs-toggle="tab" class="nav-link">
                                <span class="d-sm-none">Perfil de Egresado</span>
                                <span class="d-sm-block d-none">Perfil de Egresado</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content panel rounded-0 p-3 m-0">
                        <div class="tab-pane fade active show" id="default-tab-1">
                            <div class="form-group row mb-3">
                                <div class="col-md-6 imagen-content imagen">
                                    <label for="imagen" class="form-label col-form-label">Imagen:</label>
                                    <div class="file-loading">
                                        <input id="imagen" name="imagen"  data-preview="{{ $Model != null ? $Model->imagen : ""}}" accept="image/png, image/gif, image/jpeg, image/jpg" type="file">
                                    </div>
                                    <div id="kartik-file-errors"></div>
                                </div>
                                <div class="col-md-6 imagen-content portada">
                                    <label for="portada" class="form-label col-form-label">Portada:</label>
                                    <div class="file-loading">
                                        <input id="portada" name="portada"  data-preview="{{ $Model != null ? $Model->portada : ""}}" accept="image/png, image/gif, image/jpeg, image/jpg" type="file">
                                    </div>
                                    <div id="kartik-file-errors-portada"></div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group row mb-3">
                                        <div class="col-md-12">
                                            <label for="nombre" class="form-label col-form-label">Nombre: <span class="text-danger">(*)</span></label>
                                            <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $Model != null ? $Model->nombre : ""  }}" required>
                                            <span data-valmsg-for="nombre"></span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="fecha_inicio" class="form-label col-form-label">Fecha Inicio:</label>
                                            <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control" value="{{ $Model != null ? $Model->fecha_inicio : ""  }}">
                                            <span data-valmsg-for="fecha_inicio"></span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="duracion" class="form-label col-form-label">Duración:</label>
                                            <input type="text" id="duracion" name="duracion" class="form-control" value="{{ $Model != null ? $Model->duracion : ""  }}">
                                            <span data-valmsg-for="duracion"></span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="turno" class="form-label col-form-label">Turnos:</label>
                                            <select name="turno[]" id="turno" class="form-control" style="width: 100% !important;" multiple="multiple">
                                                <option value="">Ninguno</option>

                                                <option value="Mañana" {{ $Model != null && $Model->turno != null && in_array('Mañana', $Model->turno) ? 'selected' : '' }}>Mañana</option>
                                                <option value="Tarde" {{ $Model != null && $Model->turno != null && in_array('Tarde', $Model->turno) ? 'selected' : '' }}>Tarde</option>
                                                <option value="Noche" {{ $Model != null && $Model->turno != null && in_array('Noche', $Model->turno) ? 'selected' : '' }}>Noche</option>
                                            </select>
                                            <span data-valmsg-for="turno"></span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="modalidad" class="form-label col-form-label">Modalidades:</label>
                                            <select name="modalidad[]" id="modalidad" class="form-control" style="width: 100% !important;" multiple="multiple">
                                                <option value="">Ninguno</option>
                                                <option value="Presencial" {{ $Model != null && $Model->modalidad != null && in_array('Presencial', $Model->modalidad) ? 'selected' : '' }}>Presencial</option>
                                                <option value="Virtual" {{ $Model != null && $Model->modalidad != null && in_array('Virtual', $Model->modalidad) ? 'selected' : '' }}>Virtual</option>
                                            </select>
                                            <span data-valmsg-for="modalidad"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="descripcion" class="form-label col-form-label">Descripción:</label>
                                    <textarea id="descripcion" name="descripcion" rows="9" class="form-control">{{ $Model != null ? $Model->descripcion : ""  }}</textarea>
                                    <span data-valmsg-for="descripcion"></span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="default-tab-2">
                            <div class="form-group row">
                                <div class="col-md-6 imagen-content habilidad">
                                    <label for="imagen_habilidad" class="form-label col-form-label">Imagen:</label>
                                    <div class="file-loading">
                                        <input id="imagen_habilidad" name="imagen_habilidad" data-preview="{{ $Model != null ? $Model->imagen_habilidad : ""}}" accept="image/png, image/gif, image/jpeg, image/jpg" type="file">
                                    </div>
                                    <div id="kartik-file-errors2"></div>
                                </div>
                                <div class="col-md-6 imagen-content brochure">
                                    <label for="brochure" class="form-label col-form-label">Brochure:</label>
                                    <div class="file-loading">
                                        <input id="brochure" name="brochure"  data-preview="{{ $Model != null ? $Model->brochure : ""}}" accept="application/pdf"  type="file">
                                    </div>
                                    <div id="kartik-file-errors3"></div>
                                </div>
                                <div class="col-md-12">
                                    <label for="video_beneficios" class="form-label col-form-label">Video Youtube URL:</label>
                                    <input type="text" id="video_beneficios" name="video_beneficios" class="form-control" value="{{ $Model != null ? $Model->video_beneficios : ""  }}">
                                    <span data-valmsg-for="video_beneficios"></span>
                                </div>
                                <div class="col-md-12">
                                    <label for="informacion" class="form-label col-form-label">Información:</label>
                                    <textarea id="informacion" name="informacion" class="summernote">{{ $Model != null ? $Model->informacion : ""  }}</textarea>
                                    <span data-valmsg-for="informacion"></span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="default-tab-3">
                            <div class="form-group row">
                                <div id="oportunidades" class="col-md-12">
                                    <label for="oportunidades_profesionales" class="form-label col-form-label">Oportunidades Profesionales:</label>
                                    @if($Model != null && $Model->oportunidades_profesionales != null && count($Model->oportunidades_profesionales) > 0)
                                        @for($i=0; $i < count($Model->oportunidades_profesionales); $i++)
                                            <div class="input-group">
                                                <input type="text" class="form-control r-description n1s pull-right" name="oportunidades_profesionales[]" value="{{ $Model->oportunidades_profesionales[$i] }}">
                                                @if($i == 0)
                                                    <div class="btn btn-primary input-group-addon add_input_button" style="border-radius: 0" ><i class="fa fa-plus fa-sm"></i></div>
                                                @else
                                                    <div class="btn btn-danger input-group-addon remove_input_button" style="border-radius: 0"><i class="fa fa-times"></i></div>
                                                @endif
                                            </div>
                                        @endfor
                                    @else
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="oportunidades_profesionales[]">
                                            <div class="btn btn-primary input-group-addon add_input_button" style="border-radius: 0"><i class="fa fa-plus fa-sm"></i></div>
                                        </div>
                                    @endif
                                    <div class="field_wrapper"></div>
                                    <span data-valmsg-for="oportunidades_profesionales"></span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="default-tab-4">
                            <div class="form-group row">
                                <div id="egresados" class="col-md-12">
                                    <label for="perfil_egresado" class="form-label col-form-label">Perfil Egresado:</label>
                                    @if($Model != null && $Model->perfil_egresado != null && count($Model->perfil_egresado) > 0)
                                        @for($i=0; $i < count($Model->perfil_egresado); $i++)
                                            <div class="input-group">
                                                <input type="text" class="form-control r-description n1s pull-right" name="perfil_egresado[]" value="{{ $Model->perfil_egresado[$i] }}">
                                                @if($i == 0)
                                                    <div class="btn btn-primary input-group-addon add_input_button" style="border-radius: 0" ><i class="fa fa-plus fa-sm"></i></div>
                                                @else
                                                    <div class="btn btn-danger input-group-addon remove_input_button" style="border-radius: 0"><i class="fa fa-times"></i></div>
                                                @endif
                                            </div>
                                        @endfor
                                    @else
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="perfil_egresado[]">
                                            <div class="btn btn-primary input-group-addon add_input_button" style="border-radius: 0"><i class="fa fa-plus fa-sm"></i></div>
                                        </div>
                                    @endif
                                    <div class="field_wrapper"></div>
                                    <span data-valmsg-for="perfil_egresado"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-white" data-bs-dismiss="modal">Cerrar</a>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> {{ ($Model != null ? "Modificar" : "Registrar") }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="{{ asset('auth/plugins/select2/dist/js/select2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('auth/plugins/file-input/js/fileinput.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('auth/plugins/file-input/js/locales/es.js') }}" type="text/javascript"></script>
<script src="{{ asset('auth/plugins/summernote/dist/summernote-lite.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('auth/js/demo/form-summernote.demo.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        const $modal = $("#modal{{$ViewName}}"); const $form = $("#frm{{$ViewName}}");
        const $image = $("#imagen");
        $image.fileinput({
        showPreview: true,
        showUpload: false,
        language: "es",
        initialPreviewAsData: true,
        initialPreviewFileType: 'image',
        elErrorContainer: '#kartik-file-errors', allowedFileExtensions: ["jpeg", "jpg", "png", "gif"],
        initialPreview:  $image.attr('data-preview') !== "" ? [$image.attr('data-preview')] : [],
        initialPreviewConfig: [{caption: "Imagen"}]
        });

        const $portada = $("#portada");
        $portada.fileinput({
            showPreview: true,
            showUpload: false,
            language: "es",
            initialPreviewAsData: true,
            initialPreviewFileType: 'image',
            elErrorContainer: '#kartik-file-errors', allowedFileExtensions: ["jpeg", "jpg", "png", "gif"],
            initialPreview:  $portada.attr('data-preview') !== "" ? [$portada.attr('data-preview')] : [],
            initialPreviewConfig: [{caption: "Imagen"}]
        });

        const $image_habilidad = $("#imagen_habilidad");
        $image_habilidad.fileinput({
            showPreview: true,
            showUpload: false,
            language: "es",
            initialPreviewAsData: true,
            initialPreviewFileType: 'image',
            elErrorContainer: '#kartik-file-errors2', allowedFileExtensions: ["jpeg", "jpg", "png", "gif"],
            initialPreview:  $image_habilidad.attr('data-preview') !== "" ? [$image_habilidad.attr('data-preview')] : [],
            initialPreviewConfig: [{caption: "Imagen"}]
        });

        const $brochure = $("#brochure");
        $brochure.fileinput({
            showPreview: true,
            showUpload: false,
            language: "es",
            initialPreviewAsData: true,
            initialPreviewFileType: 'pdf',
            elErrorContainer: '#kartik-file-errors3', allowedFileExtensions: ["pdf"],
            initialPreview:  $brochure.attr('data-preview') !== "" ? [$brochure.attr('data-preview')] : [],
            initialPreviewConfig: [{caption: "Brochure"}]
        });

        $("#turno, #modalidad").select2({placeholder: "Buscar...", allowClear: true});

        $("body").on("click", "button.fileinput-remove", function (){
            const $this = $(this);
            const $imageContent = $this.closest(".imagen-content");
            if($imageContent.hasClass("imagen")){
                $("#imagen_path").val("");
            }else if($imageContent.hasClass("habilidad")){
                $("#imagen_habilidad_path").val("");
            }else if($imageContent.hasClass("brochure")){
                $("#brochure_path").val("");
            }
        });

        const $oportunidades = $("#oportunidades");
        $oportunidades.on("click", ".add_input_button", function(){
            const $fieldWrapper = $oportunidades.find('.field_wrapper')
            const $htmlHeadGroupInput = '<div class="input-group">';
            const $htmlEndGroupInput = '<div class="btn btn-danger input-group-addon remove_input_button" style="border-radius: 0"><i class="fa fa-times"></i></div></div>';
            $fieldWrapper.append($htmlHeadGroupInput +
                '<input type="text" class="form-control" name="oportunidades_profesionales[]">' +
                $htmlEndGroupInput);
        });
        $oportunidades.on("click", ".remove_input_button", function () {
            const $this = $(this);
            $this.closest(".input-group").remove();
        });

        const $egresados = $("#egresados");
        $egresados.on("click", ".add_input_button", function(){
            const $fieldWrapper = $egresados.find('.field_wrapper')
            const $htmlHeadGroupInput = '<div class="input-group">';
            const $htmlEndGroupInput = '<div class="btn btn-danger input-group-addon remove_input_button" style="border-radius: 0"><i class="fa fa-times"></i></div></div>';
            $fieldWrapper.append($htmlHeadGroupInput +
                '<input type="text" class="form-control" name="perfil_egresado[]">' +
                $htmlEndGroupInput);
        });
        $egresados.on("click", ".remove_input_button", function () {
            const $this = $(this);
            $this.closest(".input-group").remove();
        });

        $('.summernote').summernote();
        setTimeout(function (){ $modal.find("form").find("input[type=text]").first().focus().select(); }, 500);
        OnSuccess{{$ViewName}} = (data) => onSuccessForm(data, $form, $modal);
        OnFailure{{$ViewName}} = () => onFailureForm();
    });
</script>


