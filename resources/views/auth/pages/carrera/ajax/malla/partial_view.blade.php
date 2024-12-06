<link rel="stylesheet" href="{{ asset('auth/plugins/file-input/css/fileinput.min.css') }}">
<div class="modal fade" id="modal{{$ViewName}}" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ ($Model != null ? "Modificar" : "Registrar")." Malla Curricular" }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form action="{{ route('auth.carrera.storeMalla') }}" id="frm{{$ViewName}}" enctype="multipart/form-data" method="POST"
                  data-ajax="true" class="form" data-ajax-loading="#loader" data-ajax-success="OnSuccess{{$ViewName}}"
                  data-ajax-failure="OnFailure{{$ViewName}}">
                @csrf
                <input type="hidden" name="id" value="{{ $Model != null ? $Model->id : "0"  }}">
                <input type="hidden" name="carrera_id" value="{{ $Carrera }}">
                <div class="modal-body">
                    <div class="form-group row mb-3">
                        <div class="col-md-12">
                            <label for="nombre" class="form-label col-form-label">Nombre: <span class="text-danger">(*)</span></label>
                            <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $Model != null ? $Model->nombre : ""  }}" required>
                            <span data-valmsg-for="nombre"></span>
                        </div>
                        <div class="col-md-12">
                            <label for="descripciones" class="form-label col-form-label">Descripciones: <span class="text-danger">(*)</span></label>
                            @if($Model != null && $Model->descripcion != null && count($Model->descripcion) > 0)
                                @for($i=0; $i < count($Model->descripcion); $i++)
                                    <div class="input-group">
                                        <input type="text" class="form-control r-description n1s pull-right" name="descripciones[]" value="{{ $Model->descripcion[$i] }}" required>
                                        @if($i == 0)
                                            <div class="btn btn-primary input-group-addon add_input_button" style="border-radius: 0" ><i class="fa fa-plus fa-sm"></i></div>
                                        @else
                                            <div class="btn btn-danger input-group-addon remove_input_button" style="border-radius: 0"><i class="fa fa-times"></i></div>
                                        @endif
                                    </div>
                                @endfor
                            @else
                                <div class="input-group">
                                    <input type="text" class="form-control" name="descripciones[]" required>
                                    <div class="btn btn-primary input-group-addon add_input_button" style="border-radius: 0"><i class="fa fa-plus fa-sm"></i></div>
                                </div>
                            @endif
                            <div class="field_wrapper"></div>
                            <span data-valmsg-for="descripciones"></span>
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
        $modal.on("click", ".add_input_button", function(){
            const $fieldWrapper = $modal.find('.field_wrapper')
            const $htmlHeadGroupInput = '<div class="input-group">';
            const $htmlEndGroupInput = '<div class="btn btn-danger input-group-addon remove_input_button" style="border-radius: 0"><i class="fa fa-times"></i></div></div>';
            $fieldWrapper.append($htmlHeadGroupInput +
                '<input type="text" class="form-control" name="descripciones[]" required>' +
                $htmlEndGroupInput);
        });
        $modal.on("click", ".remove_input_button", function () {
            const $this = $(this);
            $this.closest(".input-group").remove();
        });
        setTimeout(function (){ $modal.find("form").find("input[type=text]").first().focus().select(); }, 500);
        OnSuccess{{$ViewName}} = (data) => onSuccessForm(data, $form, $modal);
        OnFailure{{$ViewName}} = () => onFailureForm();
    });
</script>


