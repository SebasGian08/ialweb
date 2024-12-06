
try {
    window.addEventListener("submit", function (e) {
        const form = e.target;
        if (form.getAttribute("enctype") === "multipart/form-data") {
            if (form.dataset.ajax) {
                e.preventDefault();
                e.stopImmediatePropagation();
                $(form).find("input[type=text]").each(function () {
                    if (this.inputmask)
                        this.inputmask._valueSet(this.inputmask.unmaskedvalue(), true);
                });
                const xhr = new XMLHttpRequest();
                xhr.open(form.method, form.action);

                xhr.addEventListener("loadend",
                    function () {
                        if (form.getAttribute("data-ajax-loading") !== null &&
                            form.getAttribute("data-ajax-loading") !== "")
                            document.getElementById(form.getAttribute("data-ajax-loading").substr(1)).style
                                .display = "none";

                        if (form.getAttribute("data-ajax-complete") !== null &&
                            form.getAttribute("data-ajax-complete") !== "")
                            window[form.getAttribute("data-ajax-complete")].apply(this, []);
                    });

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4) {
                        if (xhr.status === 200)
                            window[form.getAttribute("data-ajax-success")].apply(this,
                                [JSON.parse(xhr.responseText)]);
                        else
                            window[form.getAttribute("data-ajax-failure")].apply(this, [xhr.status]);
                    }
                };

                const confirm = form.getAttribute("data-ajax-confirm");

                if (confirm) {
                    Swal.fire({
                        icon: 'question',
                        title: "Confirmacion",
                        text: confirm,
                        type: "warning",
                        confirmButtonColor: '#d33',
                        confirmButtonText: 'Si, Confirmar',
                        cancelButtonText: 'Cancelar',
                        showCancelButton: true,
                        closeOnConfirm: false,
                        showLoaderOnConfirm: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            if (form.getAttribute("data-ajax-begin") !== null &&
                                form.getAttribute("data-ajax-begin") !== "")
                                window[form.getAttribute("data-ajax-begin")].apply(this, []);
                            xhr.send(new FormData(form));
                        }
                    });
                } else {
                    if (form.getAttribute("data-ajax-loading") !== null &&
                        form.getAttribute("data-ajax-loading") !== "")
                        document.getElementById(form.getAttribute("data-ajax-loading").substr(1)).style.display =
                            "block";

                    if (form.getAttribute("data-ajax-begin") !== null && form.getAttribute("data-ajax-begin") !== "")
                        window[form.getAttribute("data-ajax-begin")].apply(this, []);

                    xhr.send(new FormData(form));
                }
            }
        }
    }, true);
} catch (err) { console.log(err); }

$(function () {

    $(document).on("shown.bs.modal", ".modal", function (event) {
        var zIndex = 1040 + (10 * $(".modal:visible").length);
        $(this).css("z-index", zIndex);
        setTimeout(function () {
            $(".modal-backdrop").not(".modal-stack").css("z-index", zIndex - 1).addClass("modal-stack");
        }, 0);

        $("body").css("overflow", "hidden");
    });

    $(document).on("hidden.bs.modal", ".modal", function (event) {
        if ($(".modal.fade.show").length === 0) {
            $("body").css("overflow", "auto");
        }
    });

    $.ajaxSetup({ cache: false });
});


getView = function(url, onHiddenView){
    $.ajax({
        url: url,
        type: "GET",
        dataType: "html",
        cache: false,
        success: function (data) {
            if (onHiddenView) onHiddenView(data);
        },
        beforeSend: function () {
            $("#loading").show();
        },
        complete: function () {
            $("#loading").hide();
        }
    });
}

getModal = function(url, onHiddenModal) {
    $.ajax({
        url: url,
        type: "GET",
        dataType: "html",
        cache: false,
        success: function (data) {
            const $modal = $("<div class='parent'>").append(data);
            $modal.find(">.modal").on("hidden.bs.modal", function () {
                if (onHiddenModal) onHiddenModal($(this));
                $(this).parent().remove();
            });
            $modal.find(">.modal").modal("show");

            $("body").append($modal);
        },
        beforeSend: function () {
            $("#loading").show();
        },
        complete: function () {
            $("#loading").hide();
        }
    });
}

onSuccessForm = function(data, $form, $modal, onSucess, ResetForm) {
    if($form != null)
        $form.find("span[data-valmsg-for]").text("");

    if (data.Success === true) {
        if(!ResetForm){ $form.trigger("reset"); $form.find('select').val('').trigger('change'); $form.find('img').attr('src', '/auth/img/user_default.jpg') }
        if($modal){$modal.attr("data-reload", "true");}
        $.gritter.add({title: 'Proceso realizado correctamente', class_name: 'bg-success', text: data.Message != null ? data.Message: "Se actualizarón los valores en el sistema.", time: '5000'});
        if ($modal) $modal.modal("hide");
        if (onSucess) onSucess(data);
    }else {
        if (data.Errors) {
            $.each(data.Errors,
                function (i, item) {
                    if($form != null) {
                        if ($form.find("span[data-valmsg-for=" + i + "]").length !== 0)
                            $form.find("span[data-valmsg-for=" + i + "]").text(item[0]);
                    }
                });
        }
        $.gritter.add({title: 'Hubo un error al guardar', class_name: 'bg-danger', text: data.Message != null ? data.Message: "Por favor verifique los campos ingresados.", time: '5000'});
    }
}

onFailureForm = function() {
    $.gritter.add({title: 'Hubo un error al guardar', class_name: 'bg-danger', text: "Ocurrió un error en el servidor.", time: '5000'});
}

confirmAjax = function(url, parameters, type, msg, msgSuccess, onSuccess, onErrors) {
    Swal.fire({
        icon: 'question',
        title: "Confirmación",
        text: msg ? msg : "¿ Está seguro ?",
        type: "warning",
        confirmButtonColor: '#d33',
        confirmButtonText: 'Si, Confirmar',
        cancelButtonText: 'Cancelar',
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true
    }).then((result) => {
        if (result.isConfirmed) {
            actionAjax(url, parameters, type, onSuccess, true, msgSuccess, onErrors);
        }
    });
}

actionAjax = function(url, parameters, type, onSuccess, isToConfirm, msgSuccess, onErrors) {
    $.ajax({
        url: url,
        data: parameters,
        type: type != null ? type : "POST",
        cache: false,
        processData: false,
        contentType: false,
        success: function (data) {
            if (isToConfirm === true) {
                if (data.Success === true) {
                    $.gritter.add({title: 'Proceso realizado correctamente', class_name: 'bg-success', text: data.Message != null ? data.Message: "Se actualizarón los valores en el sistema.", time: '5000'});
                    if (onSuccess) onSuccess(data);
                } else {
                    if (onErrors) onSuccess(data);
                    else $.gritter.add({title: 'Hubo un error al guardar', class_name: 'bg-danger', text: data.Message != null ? data.Message: "Por favor verifique los campos ingresados.", time: '5000'});
                }
            } else {
                if (onSuccess) onSuccess(data);
            }
        },
        beforeSend: function () {
            if (isToConfirm !== true) $("#loading").show();
        },
        complete: function () {
            if (isToConfirm !== true) $("#loading").hide();
        }
    });
}

function createModal(title, body, onHidden) {
    const template = `<div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">${title}</h4>
                          </div>
                          <div class="modal-body">
                            ${body}
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          </div>
                        </div>
                      </div>
                    </div>`;

    const $modal = $(template);
    $modal.on("hidden.bs.modal", function () {
        $modal.remove();
        if (onHidden) onHidden();
    });

    $modal.modal("show");
}

function getDate() {
    const now = new Date();
    const primerDia = new Date(now.getFullYear(), now.getMonth(), 1);
    const ultimoDia = new Date(now.getFullYear(), now.getMonth() + 1, 0);
    return {
        Now: now,
        FirstDay: primerDia,
        LastDay: ultimoDia
    };
}

function isNumberKey(evt) {
    const charCode = (evt.which) ? evt.which : event.keyCode;
    if(charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

    return true;
}

function getFormatDate(date) {
    const array = date.split("/");
    const f = new Date(array[2], array[1] - 1, array[0]);
    return f.format("yyyy-mm-dd");
}

readImage = function(input, img) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            img.attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }else{
        img.attr('src', '/auth/img/user_default.jpg');
    }
}

cascadingDropDownLoad = function($dropDown, urlRequest, parameters, selected) {
    actionAjax(urlRequest, parameters, "GET", function (data) {
        if(data.data){
            $dropDown.html("");
            $dropDown.append(`<option value="">Seleccione</option>`);
            $.each(data.data, function (i, e) {
                $dropDown.append(`<option value="${e.id}" ${selected != null ? (selected === e.id ? "selected" : "") : ""}>${e.nombre}</option>`);
            });
        }
    });
}

loading = function (value)
{
    const $panel = $(".panel"); const $panelBody = $panel.find(".panel-body");
    if(value){ $panelBody.append(`<div class="panel-loader"><span class="spinner spinner-sm"></span></div>`); }
    else{
        $panel.removeClass("panel-loading");
        $panelBody.find(`.panel-loader`).remove();
    }
}


$(document).on("keypress", ".number", function (e){
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        return false;
    }
});
