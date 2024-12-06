@extends('auth.index')

@section('styles')
    <link rel="stylesheet" href="{{ asset('auth/plugins/file-input/css/fileinput.min.css') }}">
@endsection

@section('content')
    <!-- BEGIN breadcrumb -->
    <ol class="breadcrumb float-xl-end">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
        <li class="breadcrumb-item active">Configuración</li>
    </ol>
    <!-- END breadcrumb -->
    <!-- BEGIN page-header -->
    <h1 class="page-header">Configuración <small>Modificar</small></h1>
    <!-- END page-header -->
    <!-- BEGIN row -->
    <div class="row">
        <!-- BEGIN col-12 -->
        <div class="col-xl-12">
            <!-- BEGIN panel -->
            <div class="panel panel-inverse">
                <!-- BEGIN panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fa fa-cogs"></i> Configuración</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                </div>
                <!-- END panel-heading -->
                <!-- BEGIN alert -->
                <div class="alert alert-success alert-dismissible rounded-0 mb-0 fade hide">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                <!-- END alert -->
                <!-- BEGIN panel-body -->
                <div class="panel-body">
                    <div id="partialViewInfo" data-info data-code data-reload>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="d-flex">
                                    <h5 class="bold"><i class="fa fa-edit"></i> Modificar Configuración</h5>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('auth.'.strtolower($ViewName).'.store') }}" id="frm{{$ViewName}}" enctype="multipart/form-data" method="POST"
                              data-ajax="true" class="form" data-ajax-loading="#loader" data-ajax-success="OnSuccess{{$ViewName}}"
                              data-ajax-failure="OnFailure{{$ViewName}}">
                            @csrf
                            <input type="hidden" name="imagen_path" id="imagen_path" value="{{ $Model != null ? $Model->imagen_path : ""  }}">
                            <div class="form-group row">
                                <div class="col-md-5">
                                    <label for="imagen" class="form-label col-form-label">Imagen:</label>
                                    <div class="file-loading">
                                        <input id="imagen" name="imagen"  data-preview="{{ $Model != null ? $Model->imagen : ""}}"  type="file">
                                    </div>
                                    <div id="kartik-file-errors"></div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group row">
                                        <div class="col-xl-4">
                                            <label for="telefono" class="form-label col-form-label">Teléfono:</label>
                                            <input type="text" id="telefono" name="telefono" class="form-control" value="{{ $Model != null ? $Model->telefono : ""  }}">
                                            <span data-valmsg-for="telefono"></span>
                                        </div>
                                        <div class="col-xl-4">
                                            <label for="celular" class="form-label col-form-label">Celular:</label>
                                            <input type="text" id="celular" name="celular" class="form-control" value="{{ $Model != null ? $Model->celular : ""  }}">
                                            <span data-valmsg-for="celular"></span>
                                        </div>
                                        <div class="col-xl-4">
                                            <label for="whatsapp" class="form-label col-form-label">Whatsapp:</label>
                                            <input type="text" id="whatsapp" name="whatsapp" class="form-control" value="{{ $Model != null ? $Model->whatsapp : ""  }}">
                                            <span data-valmsg-for="whatsapp"></span>
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="email" class="form-label col-form-label">E-mail:</label>
                                            <input type="email" id="email" name="email" class="form-control" value="{{ $Model != null ? $Model->email : ""  }}">
                                            <span data-valmsg-for="email"></span>
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="facebook" class="form-label col-form-label">Facebook:</label>
                                            <input type="text" id="facebook" name="facebook" class="form-control" value="{{ $Model != null ? $Model->facebook : ""  }}">
                                            <span data-valmsg-for="facebook"></span>
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="instagram" class="form-label col-form-label">Instagram:</label>
                                            <input type="text" id="instagram" name="instagram" class="form-control" value="{{ $Model != null ? $Model->instagram : ""  }}">
                                            <span data-valmsg-for="instagram"></span>
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="tiktok" class="form-label col-form-label">Tiktok:</label>
                                            <input type="text" id="tiktok" name="tiktok" class="form-control" value="{{ $Model != null ? $Model->tiktok : ""  }}">
                                            <span data-valmsg-for="tiktok"></span>
                                        </div>
                                        <div class="col-xl-6">
                                            <label for="linkedin" class="form-label col-form-label">Linkedin:</label>
                                            <input type="text" id="linkedin" name="linkedin" class="form-control" value="{{ $Model != null ? $Model->linkedin : ""  }}">
                                            <span data-valmsg-for="linkedin"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xl-12" style="text-align: right">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Modificar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END panel-body -->
            </div>
            <!-- END panel -->
        </div>
        <!-- END col-12-->
    </div>
    <!-- END row -->
@endsection

@section('scripts')
    @include('auth.includes.js.datatable')
    <script src="{{ asset('auth/plugins/file-input/js/fileinput.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('auth/plugins/file-input/js/locales/es.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(function (){
            const $form = $("#frm{{$ViewName}}");
            const $image = $("#imagen"); const $imagen_path = $("#imagen_path");
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
            $image.change(function(){readImage(this, $("img.image-profile"));});
            $("body").on("click", "button.fileinput-remove", function (){
                $imagen_path.val("");
            });
            OnSuccess{{$ViewName}} = (data) => onSuccessForm(data, $form, null, null, true);
            OnFailure{{$ViewName}} = () => onFailureForm();
        });
    </script>
@endsection

