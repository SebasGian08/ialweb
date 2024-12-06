<link rel="stylesheet" href="{{ asset('auth/plugins/file-input/css/fileinput.min.css') }}">
<link rel="stylesheet" href="{{ asset('auth/plugins/summernote/dist/summernote-lite.css') }}">
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
                <div class="modal-body">
                    <div class="form-group row mb-3">
                        <div class="col-md-6">
                            <label for="imagen" class="form-label col-form-label">Imagen: <span class="text-danger">(*)</span></label>
                            <div class="file-loading">
                                <input id="imagen" name="imagen"  data-preview="{{ $Model != null ? $Model->imagen : ""}}" accept="image/png, image/gif, image/jpeg, image/jpg"  type="file">
                            </div>
                            <div id="kartik-file-errors"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row mb-3">
                                <div class="col-md-6">
                                    <label for="categoria" class="form-label col-form-label">Categoría: <span class="text-danger">(*)</span></label>
                                    <select name="categoria" id="categoria" class="form-control" required>
                                        <option value="blog" {{ $Model != null && $Model->categoria == "blog" ? "selected" : ""  }}>Blog</option>
                                        <option value="noticia" {{ $Model != null && $Model->categoria == "noticia" ? "selected" : "" }}>Noticia</option>
                                        <option value="evento" {{ $Model != null && $Model->categoria == "evento" ? "selected" : "" }}>Evento</option>
                                    </select>
                                    <span data-valmsg-for="categoria"></span>
                                </div>
                                <div class="col-md-12">
                                    <label for="nombre" class="form-label col-form-label">Nombre: <span class="text-danger">(*)</span></label>
                                    <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $Model != null ? $Model->nombre : ""  }}" required>
                                    <span data-valmsg-for="nombre"></span>
                                </div>
                                <div class="col-md-12">
                                    <label for="fecha" class="form-label col-form-label">Fecha: <span class="text-danger">(*)</span></label>
                                    <input type="date" id="fecha" name="fecha" class="form-control" value="{{ $Model != null ? $Model->fecha : \Carbon\Carbon::now()->format('Y-m-d')  }}" required>
                                    <span data-valmsg-for="fecha"></span>
                                </div>
                                <div class="col-md-12">
                                    <label for="descripcion" class="form-label col-form-label">Descripción: <span class="text-danger">(*)</span></label>
                                    <textarea id="descripcion" name="descripcion" rows="8" class="form-control" required>{{ $Model != null ? $Model->descripcion : ""  }}</textarea>
                                    <span data-valmsg-for="descripcion"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="informacion" class="form-label col-form-label">Información: <span class="text-danger">(*)</span></label>
                            <textarea id="informacion" name="informacion" rows="8" class="summernote" required>{{ $Model != null ? $Model->informacion : ""  }}</textarea>
                            <span data-valmsg-for="informacion"></span>
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

<script src="{{ asset('auth/plugins/file-input/js/fileinput.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('auth/plugins/file-input/js/locales/es.js') }}" type="text/javascript"></script>
<script src="{{ asset('auth/plugins/summernote/dist/summernote-lite.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('auth/js/demo/form-summernote.demo.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        const $modal = $("#modal{{$ViewName}}"); const $form = $("#frm{{$ViewName}}");
        const $image = $("#imagen"), $imagen_path = $("#imagen_path");
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
        $("body").on("click", "button.fileinput-remove", function (){
            $imagen_path.val("");
        });

        $('.summernote').summernote();

        setTimeout(function (){ $modal.find("form").find("input[type=text]").first().focus().select(); }, 500);
        OnSuccess{{$ViewName}} = (data) => onSuccessForm(data, $form, $modal);
        OnFailure{{$ViewName}} = () => onFailureForm();
    });
</script>


