@include('auth.includes.css.datatable')
<div class="modal fade" id="modal{{$ViewName}}List" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ ("Listado")." ".$ViewName }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-md-12 d-flex justify-content-end mb-3">
                        <button type="button" class="btn btn-add btn-sm btn-primary"><i class="fa fa-plus"></i> Agregar</button>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table id="tableList" width="100%" class="table table-striped table-bordered align-middle text-nowrap"></table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-white" data-bs-dismiss="modal">Cerrar</a>
            </div>
        </div>
    </div>
</div>
@include('auth.includes.js.datatable')
<script type="text/javascript">
    $(function (){
        const $route = "carrera";
        const $modal = $("#modal{{$ViewName}}List");
        const $btnRegister = $modal.find(".btn-add");
        const $table = $("#tableList");
        const $DataTable = $table.DataTable({
            "responsive": true,
            "select": true,
            "language": { url: `${window.location.origin}/json/dataTable/lang/es.json` },
            "ajax": {
                url: `/auth/${$route}/partial-view-list-json-malla?id={{ $Id }}`,
            },
            "columns": [
                { title: "Nombre", data: "nombre", className: "text-left" },
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
            confirmAjax(`/auth/${$route}/delete-malla`, formData, "POST", `¿Está seguro de eliminar el item?`, null, function () {
                $DataTable.ajax.reload(null, false);
            });
        });

        function partialView(id){
            getModal(`/auth/${$route}/partial-view-malla/${id ? id : 0}/{{ $Id }}`, function ($modal) {
                if ($modal.attr("data-reload") === "true") $DataTable.ajax.reload(null, false);
            });
        }
    });
</script>


