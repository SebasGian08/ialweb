<link rel="stylesheet" href="{{ asset('auth/plugins/file-input/css/fileinput.min.css') }}">
<link rel="stylesheet" href="{{ asset('auth/plugins/summernote/dist/summernote-lite.css') }}">
<div class="modal fade" id="modal{{$ViewName}}" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ ($Model != null ? "Modificar" : "Registrar")." ".$ViewName }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form action="{{ route('auth.preguntasfrecuentes.store') }}" id="frm{{$ViewName}}" enctype="multipart/form-data" method="POST"
                  data-ajax="true" class="form" data-ajax-loading="#loader" data-ajax-success="OnSuccess{{$ViewName}}"
                  data-ajax-failure="OnFailure{{$ViewName}}">
                @csrf
                <input type="hidden" name="id" value="{{ $Model != null ? $Model->id : "0"  }}">
                <div class="modal-body">
                    <div class="form-group row mb-3">
                        <div class="col-md-12">
                            <label for="pregunta" class="form-label col-form-label">Nombre: <span class="text-danger">(*)</span></label>
                            <input type="text" id="pregunta" name="pregunta" class="form-control" value="{{ $Model != null ? $Model->pregunta : ""  }}" required>
                            <span data-valmsg-for="pregunta"></span>
                        </div>
                        <div class="col-md-12">
                            <label for="respuesta" class="form-label col-form-label">Información: <span class="text-danger">(*)</span></label>
                            <textarea id="respuesta" name="respuesta" rows="8" class="summernote" required>{{ $Model != null ? $Model->respuesta : ""  }}</textarea>
                            <span data-valmsg-for="respuesta"></span>
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

<script type="text/javascript">
    $(function () {
        const $modal = $("#modal{{$ViewName}}"); const $form = $("#frm{{$ViewName}}");
        setTimeout(function (){ $modal.find("form").find("input[type=text]").first().focus().select(); }, 500);
        OnSuccess{{$ViewName}} = (data) => onSuccessForm(data, $form, $modal);
        OnFailure{{$ViewName}} = () => onFailureForm();
    });
</script>


<script src="{{ asset('auth/plugins/summernote/dist/summernote-lite.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('auth/js/demo/form-summernote.demo.js') }}" type="text/javascript"></script>


