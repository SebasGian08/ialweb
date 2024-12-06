<div class="modal fade" id="modal{{$ViewName}}" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ ($Model != null ? "Modificar" : "Registrar")." Administrador" }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form action="{{ route('auth.'.strtolower($ViewName).'.store') }}" id="frm{{$ViewName}}" enctype="multipart/form-data" method="POST"
                  data-ajax="true" class="form" data-ajax-loading="#loader" data-ajax-success="OnSuccess{{$ViewName}}"
                  data-ajax-failure="OnFailure{{$ViewName}}">
                @csrf
                <input type="hidden" name="id" value="{{ $Model != null ? $Model->id : "0"  }}">
                <div class="modal-body">
                    <div class="form-group row mb-3">
                        <div class="col-md-12">
                            <label for="nombres" class="form-label col-form-label">Nombres: <span class="text-danger">(*)</span></label>
                            <input type="text" id="nombres" name="nombres" class="form-control" value="{{ $Model != null ? $Model->nombres : ""  }}" required>
                            <span data-valmsg-for="nombres"></span>
                        </div>
                        <div class="col-md-12">
                            <label for="email" class="form-label col-form-label">E-mail: <span class="text-danger">(*)</span></label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ $Model != null ? $Model->email : ""  }}" required>
                            <span data-valmsg-for="email"></span>
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label col-form-label">Contraseña: <span class="text-danger">(*)</span></label>
                            <input type="password" id="password" name="password" class="form-control" value="{{ $Model != null ? "************" : "" }}" required>
                            <span data-valmsg-for="password"></span>
                        </div>
                        <div class="col-md-6">
                            <label for="password_confirmation" class="form-label col-form-label">Repita Contraseña: <span class="text-danger">(*)</span></label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" value="{{ $Model != null ? "************" : "" }}" required>
                            <span data-valmsg-for="password_confirmation"></span>
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


