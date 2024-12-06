<link rel="stylesheet" href="{{ asset('auth/plugins/file-input/css/fileinput.min.css') }}">
<div class="modal fade" id="modal{{$ViewName}}" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ ($Model != null ? "Modificar" : "Registrar")." ".$ViewName }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form action="{{ route('auth.curso.storeGift') }}" id="frm{{$ViewName}}" enctype="multipart/form-data" method="POST"
                  data-ajax="true" class="form" data-ajax-loading="#loader" data-ajax-success="OnSuccess{{$ViewName}}"
                  data-ajax-failure="OnFailure{{$ViewName}}">
                @csrf
                <input type="hidden" name="id" value="{{ $Model != null ? $Model->id : "0"  }}">
                <input type="hidden" name="curso_id" value="{{ $Curso }}">
                <input type="hidden" id="imagen_path" name="imagen_path" value="{{ $Model != null ? $Model->imagen_path : "" }}">
                <div class="modal-body">
                    <div class="form-group row mb-3">
                        <div class="col-md-6">
                            <label for="imagen" class="form-label col-form-label">Imagen: <span class="text-danger">(*)</span></label>
                            <div class="file-loading">
                                <input id="imagen" name="imagen" data-preview="{{ $Model != null ? $Model->imagen : ""}}" accept="image/png, image/gif, image/jpeg, image/jpg"  type="file">
                            </div>
                            <div id="kartik-file-errors"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row mb-3">
                                <div class="col-md-12">
                                    <label for="nombre" class="form-label col-form-label">Nombre: <span class="text-danger">(*)</span></label>
                                    <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $Model != null ? $Model->nombre : ""  }}" required>
                                    <span data-valmsg-for="nombre"></span>
                                </div>
                                <div class="col-md-12">
                                    <label for="descripcion" class="form-label col-form-label">Descripcion: <span class="text-danger">(*)</span></label>
                                    <textarea id="descripcion" name="descripcion" rows="12" class="form-control" required>{{ $Model != null ? $Model->descripcion : ""  }}</textarea>
                                    <span data-valmsg-for="descripcion"></span>
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

<script src="{{ asset('auth/plugins/file-input/js/fileinput.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('auth/plugins/file-input/js/locales/es.js') }}" type="text/javascript"></script>
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
        setTimeout(function (){ $modal.find("form").find("input[type=text]").first().focus().select(); }, 500);
        OnSuccess{{$ViewName}} = (data) => onSuccessForm(data, $form, $modal);
        OnFailure{{$ViewName}} = () => onFailureForm();
    });
</script>
