@extends('auth.index')

@section('styles')
    @include('auth.includes.css.datatable')
@endsection

@section('content')
    <!-- BEGIN breadcrumb -->
    <ol class="breadcrumb float-xl-end">
        <li class="breadcrumb-item"><a href="{{ route('auth.dashboard.index') }}">Inicio</a></li>
        <li class="breadcrumb-item active">Preguntas Frecuentes</li>
    </ol>
    <!-- END breadcrumb -->
    <!-- BEGIN page-header -->
    <h1 class="page-header">Preguntas Frecuentes <small>Mantenimiento</small></h1>
    <!-- END page-header -->
    <!-- BEGIN row -->
    <div class="row">
        <!-- BEGIN col-12 -->
        <div class="col-xl-12">
            <!-- BEGIN panel -->
            <div class="panel panel-inverse">
                <!-- BEGIN panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Listado de Categorías</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-refresh btn-success"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-add btn-primary"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
                <!-- END panel-heading -->
                <!-- BEGIN panel-body -->
                <div class="panel-body">
                    <table id="table" width="100%" class="table table-striped table-bordered align-middle text-nowrap"></table>
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
    <script type="text/javascript">
        $(function (){
            const $route = "preguntasfrecuentes";
            const $panel = $(".panel");
            const $panelBody = $panel.find(".panel-body");
            const $btnRefresh = $(".btn-refresh");
            const $btnRegister = $(".btn-add");
            const $table = $("#table");
            const $DataTable = $table.DataTable({
                "responsive": true,
                "select": true,
                "language": { url: `${window.location.origin}/json/dataTable/lang/es.json` },
                "ajax": {
                    url: `/auth/${$route}/list-json`,
                    beforeSend: function (){
                        $panel.addClass("panel-loading");
                        $panelBody.append(`<div class="panel-loader"><span class="spinner spinner-sm"></span></div>`);
                    },
                    complete: function (){
                        $panel.removeClass("panel-loading");
                        $panelBody.find(`.panel-loader`).remove();
                    }
                },
                "columns": [
                    { title: "Pregunta", data: "pregunta", className: "text-left" },
                    { title: "Respuesta", data: "respuesta", className: "text-left"},
                    { title: "Fecha registro", data: "fecha_registro", className: "text-left"},
                    {
                        data: null,
                        defaultContent:
                            "<button type='button' class='btn btn-secondary btn-xs btn-update' data-toggle='tooltip' title='Actualizar'><i class='fa fa-edit'></i></button>",
                        "orderable": false,
                        "searchable": false,
                        "width": "26px"
                    },
                    {
                        data: null,
                        defaultContent:
                            "<button type='button' class='btn btn-danger btn-xs btn-delete' data-toggle='tooltip' title='Eliminar'><i class='fa fa-trash'></i></button>",
                        "orderable": false,
                        "searchable": false,
                        "width": "26px"
                    }
                ]
            });

            $btnRefresh.on("click", function (){
                $DataTable.ajax.reload(null, false);
            });

            $btnRegister.on("click", function (){
                partialView();
            });

            $table.on("click", ".btn-update", function () {
                const id = $DataTable.row($(this).parents("tr")).data().id;
                partialView(id);
            });

            $table.on("click", ".btn-delete", function () {
                const id = $DataTable.row($(this).parents("tr")).data().id;
                const formData = new FormData();
                formData.append('_token', $("meta[name=csrf-token]").attr("content"));
                formData.append('id', id);
                confirmAjax(`/auth/${$route}/delete`, formData, "POST", `¿Está seguro de eliminar el item?`, null, function () {
                    $DataTable.ajax.reload(null, false);
                });
            });

            function partialView(id){
                getModal(`/auth/${$route}/partial-view/${id ? id : 0}`, function ($modal) {
                    if ($modal.attr("data-reload") === "true") $DataTable.ajax.reload(null, false);
                });
            }
        });
    </script>
@endsection

