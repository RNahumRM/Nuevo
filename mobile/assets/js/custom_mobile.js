let $tableAlarms = 0;
let $tableAlarmsWaiting = 0;
let $tableAlarmsAttending = 0;
let refreshIntervalId = 0;
let refreshIntervalNotificationAlarmId = 0;
let timeRefresh = 10000;
let timeRefreshNotificationAlarm = 10000;
let markersUnits = [];
let totalTenants = 0;
let map = 0;
let totalUnits = [];
let alarmsWaiting = 0;
let alarmsAttending = 0;
let pNotifyNotificationAlarm = 0;
let tablesUnits = {};
function initTableAlarms(alarms) {

    let idTable = "tableAlarms";

    let dataSet = [];

    let columns = [
        {title: ""},
        {title: "Id"},
        {title: "Router IMEI"},
        {title: "Matrícula"},
        {title: "Fecha"},
        {title: "Latitud"},
        {title: "Longitud"},
        {title: "Número"},
        {title: "Ruta"},
        {title: "Operador"},
        {title: "Concesionario"},
        {title: "Empresa"},
        {title: "Motivo de cancelación"}
    ];

    alarms.forEach(function(alarm) {

        let color = 'text-primary';

        if(alarm.attending === 1){
            color = 'text-danger';
        } else if(alarm.attended === 1){
            color = 'text-success';
        } else if(alarm.canceled === 1){
            color = 'text-black';
        }

        dataSet.push(
            [
                "<i class='fa fa-lg fa-circle " + color + "'></i>",
                "<div style='background-color: " + color + "'><a href='/mobile/alarms/details/" + alarm.id + "'>" + alarm.id + "</a></div>",
                "<a href='/mobile/routers/read/" + alarm.id_router + "'>" + alarm.imei + "</a>",
                alarm.plate_number,
                alarm.created,
                alarm.lat,
                alarm.lng,
                alarm.number,
                alarm.route,
                alarm.driver,
                alarm.owner,
                alarm.company,
                alarm.cancel_comments
            ]
        );
    });

    if($tableAlarms !== 0) {
        $tableAlarms.clear();
        $tableAlarms.rows.add(dataSet);
        $tableAlarms.draw();
    } else {
        // create the DataTable component
        $tableAlarms = $('#' + idTable).DataTable({
            data: dataSet,
            columns: columns,
            responsive: true,
            nowrap: true,
            "order": [],
            language: {
                "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
            }
        });
    }
}
function initTableAlarmsWaiting(alarms) {

    if(alarms.length > 0){
        new PNotify({
            title: 'Alarmas',
            text: 'Existen alarmas por ser atendidas',
            type: 'error'
        });
        // $.playSound("http://www.noiseaddicts.com/samples_1w72b820/3724.mp3");
        $.playSound("http://35.175.139.34/mobile/assets/audio/Alarma_C5CDMX.mp3");
    }

    let idTable = "tableAlarmsWaiting";

    let dataSet = [];

    let columns = [
        {title: ""},
        {title: "Id"},
        {title: "Router IMEI"},
        {title: ""},
        {title: ""},
        {title: ""},
        {title: ""},
        {title: "Matrícula"},
        {title: "Fecha"},
        {title: "Latitud"},
        {title: "Longitud"},
        {title: "Número"},
        {title: "Ruta"},
        {title: "Operador"},
        {title: "Concesionario"},
        {title: "Empresa"},
        {title: "Motivo de cancelación"}
    ];

    alarms.forEach(function(alarm) {

        let color = 'text-primary';

        if(alarm.attending === 1){
            color = 'text-yellow';
        } else if(alarm.attended === 1){
            color = 'text-success';
        } else if(alarm.canceled === 1){
            color = 'text-danger';
        }

        let camerasOnline = true;
        let colorCamera = 'text-danger';

        dataSet.push(
            [
                "<i class='fa fa-lg fa-circle " + color + "'></i>",
                "<div style='background-color: " + color + "'><a href='/mobile/alarms/details/" + alarm.id + "'>" + alarm.id + "</a></div>",
                alarm.imei,
                alarm.cameraIds !== null ? '<i class="fa fa-video-camera" style="cursor: pointer" onclick="showVideo(' + "'" + alarm.cameraIds + ':' + alarm.camerasOnline + "','" + alarm.plate_number + "'" + ')"></i>' : '',
                '<i class="fa fa-search" style="cursor: pointer" onclick="focusMarker(' + alarm.id_unit + ')"></i>',
                '<button type="submit" class="btn btn-xs btn-danger" onClick="attend(' + alarm.id + ',1)" >Confirmar</button>',
                '<button type="submit" class="btn btn-xs btn-default" onClick="cancel(' + alarm.id + ',1)" >Cancelar</button>',
                alarm.plate_number,
                alarm.created,
                alarm.lat,
                alarm.lng,
                alarm.number,
                alarm.route,
                alarm.driver,
                alarm.owner,
                alarm.company,
                alarm.cancel_comments
            ]
        );
    });

    if($tableAlarmsWaiting !== 0) {
        $tableAlarmsWaiting.clear();
        $tableAlarmsWaiting.rows.add(dataSet);
        $tableAlarmsWaiting.draw();
    } else {
        // create the DataTable component
        $tableAlarmsWaiting = $('#' + idTable).DataTable({
            data: dataSet,
            columns: columns,
            responsive: true,
            nowrap: true,
            "order": [],
            language: {
                "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
            },
            columnDefs: [ {
                targets: [0,3,4,5,6],
                orderable: false
            } ]
        });
    }
}
function initTableAlarmsAttending(alarms) {

    let idTable = "tableAlarmsAttending";

    let dataSet = [];

    let columns = [
        {title: ""},
        {title: "Id"},
        {title: "Router IMEI"},
        {title: ""},
        {title: ""},
        {title: ""},
        {title: "Matrícula"},
        {title: "Fecha"},
        {title: "Latitud"},
        {title: "Longitud"},
        {title: "Número"},
        {title: "Ruta"},
        {title: "Operador"},
        {title: "Concesionario"},
        {title: "Empresa"},
        {title: "Motivo de cancelación"}
    ];

    alarms.forEach(function(alarm) {

        let color = 'text-primary';

        if(alarm.attending === 1){
            color = 'text-danger';
        } else if(alarm.attended === 1){
            color = 'text-success';
        } else if(alarm.canceled === 1){
            color = 'text-black';
        }

        dataSet.push(
            [
                "<i class='fa fa-lg fa-circle " + color + "'></i>",
                "<div style='background-color: " + color + "'><a href='/mobile/alarms/details/" + alarm.id + "'>" + alarm.id + "</a></div>",
                alarm.imei,
                alarm.cameraIds !== null ? '<i class="fa fa-video-camera" style="cursor: pointer" onclick="showVideo(' + "'" + alarm.cameraIds + ':' + alarm.camerasOnline + "','" + alarm.plate_number + "'" + ')"></i>' : '',
                '<i class="fa fa-search" style="cursor: pointer" onclick="focusMarker(' + alarm.id_unit + ')"></i>',
                '<button type="submit" class="btn btn-xs btn-success" onClick="setAttended(' + alarm.id + ',1)" >Atendida</button>',
                alarm.plate_number,
                alarm.created,
                alarm.lat,
                alarm.lng,
                alarm.number,
                alarm.route,
                alarm.driver,
                alarm.owner,
                alarm.company,
                alarm.cancel_comments
            ]
        );
    });

    if($tableAlarmsAttending !== 0) {
        $tableAlarmsAttending.clear();
        $tableAlarmsAttending.rows.add(dataSet);
        $tableAlarmsAttending.draw();
    } else {
        // create the DataTable component
        $tableAlarmsAttending = $('#' + idTable).DataTable({
            data: dataSet,
            columns: columns,
            responsive: true,
            nowrap: true,
            "order": [],
            language: {
                "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
            },
            columnDefs: [ {
                targets: [0,3,4],
                orderable: false
            } ]
        });
    }
}
function initTableUnits(unitsGroup) {

    $.each(unitsGroup, function (tenant, units) {

        const idTable = "tableUnits-" + tenant;

        if(typeof tablesUnits[idTable] === "undefined") {
            const table =
                '  <div class="panel panel-default">\n' +
                '    <div class="panel-heading">\n' +
                '      <h3 class="panel-title">\n' +
                '        <i id="title" class="fa fa-chevron-up"></i> <a data-toggle="collapse" href="#collapse-' + tenant + '">' + tenant + '</a>\n' +
                '      </h3>\n' +
                '    </div>\n' +
                '    <div id="collapse-' + tenant + '" class="panel-collapse collapse in">\n' +
                '       <div class="panel-body">' +
                '           <div class="table-responsive" style="width: 100%">\n' +
                '               <table class="table stripe nowrap" id="' + idTable + '"></table>\n' +
                '           </div>\n' +
                '       </div>\n' +
                '    </div>\n' +
                '  </div>\n';

            $(document).on("hide.bs.collapse show.bs.collapse", ".collapse", function (event) {
                let isExpanded = $(this).attr("aria-expanded");
                $title = $(this).parent().find('#title');
                if ($title.hasClass('fa-chevron-down')) {
                    $title.removeClass('fa-chevron-down').addClass('fa-chevron-up');
                } else if ($title.hasClass('fa-chevron-up')) {
                    $title.removeClass('fa-chevron-up').addClass('fa-chevron-down');
                }
            });

            $('#panelBodyUnits').append(table);
        }
        drawTableUnits(idTable, units);
    });

}
function drawTableUnits(idTable, units) {

    let dataSet = [];

    const columns = [
        {title: "Matrícula"},
        {title: "Router IMEI"},
        {title: ""},
        {title: ""},
        {title: "Latitud"},
        {title: "Longitud"},
        {title: "Número"},
        {title: "Ruta"},
        {title: "Operador"},
        {title: "Concesionario"},
        {title: "Empresa"},
        {title: "Tenant"},
        {title: "Id"}
    ];

    units.forEach(function(unit) {

        totalUnits.push(unit);

        let camerasOnline = true;
        let colorCamera = 'text-danger';

        if(unit.camerasOnline === 1){
            colorCamera = 'text-success';
        } else if(typeof unit.camerasOnline === "string"){
            if(unit.camerasOnline.indexOf('1') > -1){
                colorCamera = 'text-success';
            } else {
                camerasOnline = false;
            }
        }

        dataSet.push(
            [
                unit.plate_number,
                unit.imei,
                camerasOnline ? (unit.cameraIds !== null ? '<i class="fa fa-video-camera ' + colorCamera + '" style="cursor: pointer" onclick="showVideo(' + "'" + unit.cameraIds + ':' + unit.camerasOnline + "','" + unit.plate_number + "'" + ')"></i>' : '') : '<i class="fa fa-video-camera text-danger" style="cursor: pointer" onclick="showMessage(' + "'" + 'Cámara fuera de linea' + "'" + ')"></i>',
                '<i class="fa fa-search" style="cursor: pointer" onclick="focusMarker(' + unit.id + ')"></i>',
                unit.lat,
                unit.lng,
                unit.number,
                unit.route,
                unit.driver,
                unit.owner,
                unit.company,
                unit.tenant,
                unit.id
            ]
        );
    });

    if(typeof tablesUnits[idTable] === "undefined") {
        // create the DataTable component
        tablesUnits[idTable] = $('#' + idTable).DataTable({
            data: dataSet,
            columns: columns,
            responsive: true,
            nowrap: true,
            "order": [],
            language: {
                "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
            },
            columnDefs: [{
                targets: [2, 3],
                orderable: false
            }],
            pagingType: "simple"
        });

        let $tableUnits = tablesUnits[idTable];

        $tableUnits.on('search.dt', function () {
            totalTenants--;
            const len = $tableUnits.rows({filter: 'applied'}).nodes().length;
            const rows = $tableUnits.rows({filter: 'applied'}).data();

            filterMarkersUnits(len, rows);
        });
    } else {
        let $tableUnits = tablesUnits[idTable];
        $tableUnits.clear();
        $tableUnits.rows.add(dataSet);
        $tableUnits.draw();
    }
}
function showMessage(msg) {
    new PNotify({
        title: 'Alarmas',
        text: msg,
        type: 'info'
    });
}
function showNotice(msg) {
    let notice = new PNotify({
        text: msg,
        icon: 'fa fa-spinner fa-pulse',
        type: 'info',
        hide: false,
        shadow: false,
        // width: '200px',
        modules: {
            Buttons: {
                closer: false,
                sticker: false
            }
        }
    });

    return notice;
}
function closeNotice(notice, text, title, type) {
    let options = {
        text: text
    };
    options.title = title;
    options.type = type;
    options.hide = true;
    options.icon = 'fa fa-check';
    options.shadow = true;
    options.modules = {
        Buttons: {
            closer: true,
            sticker: true
        }
    };

    notice.update(options);
    // notice.remove();
}
function showVideo(cameraIds, cameraName) {
    // camerIds is a string ids:online
    const arrCameraIds = cameraIds.split(':');
    const strIds  = arrCameraIds[0];
    const strOnline  = arrCameraIds[1];

    let src = '/blank';

    $('#urlVideo').attr('src', src);
    $('#cameraName').text('');

    let notice = showNotice('Buscando Cámara');

    $.ajax({
        url: "/mobile/cameraStreams",
        type: 'post',
        data: {cameraIds: strIds, online: strOnline},
        error: function (req, err) {
            new PNotify({
                title: 'Alarmas',
                text: 'Eror de comunación con el servidor: ' + err,
                type: 'error'
            });
        },
        beforeSend:function(){
            $('#camerasSelect').empty();
            $("button").prop("disabled", true);
            $("input").prop("disabled", true);
            $("select").prop("disabled", true);
        },
        success:function(dat) {
            $("button").prop("disabled", false);
            $("input").prop("disabled", false);
            $("select").prop("disabled", false);

            let json = $.parseJSON(dat);

            if (json.success === 1) {
                let index = 0;
                $.each(json.cameras, function (cameraId, obj) {
                    $('#camerasSelect').append('<option value="' + obj.url + '" ' + (!obj.status.online ? 'disabled' : '') + '>Cámara ' + cameraId + (!obj.status.online ? ' (Apagada)' : '') + '</option>');
                });
                const src = $('#camerasSelect option:selected').val();

                $('#urlVideo').attr('src', src);
                $('#cameraName').text(cameraName);
                $('#myModalVideo').modal('show');

                closeNotice(notice, 'Cámara encontrada', 'Listo!', 'success');
            } else {
                let msg = 'Ha ocurrido un error inesperado, intentar nuevamente';
                if(typeof json.detail !== "undefined"){
                    msg = json.detail;
                }
                closeNotice(notice, msg, 'Listo!', 'info');
            }
        }
    });
}
function updateCamerasFromCameraManager() {

    let notice = showNotice('Buscando Cámaras');

    $.ajax({
        url: "/mobile/welcome/updateCamerasFromCameraManager",
        type: 'post',
        data: {},
        error: function (req, err) {
            new PNotify({
                title: 'Alarmas',
                text: 'Error de comunación con el servidor: ' + err,
                type: 'error'
            });
        },
        beforeSend:function(){
            $("button").prop("disabled", true);
            $("input").prop("disabled", true);
            $("select").prop("disabled", true);
        },
        success:function(dat) {
            $("button").prop("disabled", false);
            $("input").prop("disabled", false);
            $("select").prop("disabled", false);

            let json = $.parseJSON(dat);

            if (json.success === 1) {
                closeNotice(notice, 'Cámaras actualizadas', 'Listo!', 'success');
                location.reload();
            } else {
                new PNotify({
                    title: 'Alarmas',
                    text: 'Ha ocurrido un error inesperado, intentar nuevamente',
                    type: 'error'
                });
            }
        }
    });
}
function showAddComment(idAlarm) {
    $('#add-id-comment').attr('add-id-comment', idAlarm);
    $('#addCommentDialog').modal('show');
}
function addComment(elem) {
    const idAlarm = $(elem).attr('add-id-comment');
    const comments = $.trim($('#comments').val());

    if(comments === ''){
        new PNotify({
            title: 'Alarmas',
            text: 'Proporcione el texto del comentario',
            type: 'warning'
        });
        return;
    }

    $.ajax({
        url: "/mobile/addComment",
        type: 'post',
        data: {idAlarm: idAlarm, comments: comments},
        error: function (req, err) {
            $('#addCommentDialog').modal('hide');
            new PNotify({
                title: 'Alarmas',
                text: 'Eror de comunación con el servidor: ' + err,
                type: 'error'
            });
        },
        beforeSend:function(){
            resetRefresIntervals();
            $("button").prop("disabled", true);
            $("input").prop("disabled", true);
            $("select").prop("disabled", true);
        },
        success:function(dat) {
            $('#addCommentDialog').modal('hide');
            $("button").prop("disabled", false);
            $("input").prop("disabled", false);
            $("select").prop("disabled", false);

            let json = $.parseJSON(dat);

            if (json.success === 1) {
                new PNotify({
                    title: 'Alarmas',
                    text: 'Comentario agregado exitósamente',
                    type: 'success'
                });
                setTimeout(function() { location.reload(); }, 3000);
            } else {
                new PNotify({
                    title: 'Alarmas',
                    text: 'Ha ocurrido un error inesperado, intentar nuevamente',
                    type: 'error'
                });
            }
        }
    });
}
function indexAjaxData() {
    $.ajax({
        url: "/mobile/indexAjaxDataAlarms",
        type: 'post',
        data: {filter: filter},
        error: function (req, err) {
            $("#loadingAlarms").hide();
            new PNotify({
                title: 'Alarmas',
                text: 'Eror de comunación con el servidor: ' + err,
                type: 'error'
            });
        },
        beforeSend:function(){
            $("button").prop("disabled", true);
            $("input").prop("disabled", true);
            $("select").prop("disabled", true);
            $("#loadingAlarms").show();
        },
        success:function(dat) {
            $("button").prop("disabled", false);
            $("input").prop("disabled", false);
            $("select").prop("disabled", false);
            $("#loadingAlarms").hide();

            let json = $.parseJSON(dat);

            if (json.success === 1) {
                initTableAlarms(json.alarms);
            } else {
                new PNotify({
                    title: 'Alarmas',
                    text: 'Ha ocurrido un error inesperado, intentar nuevamente',
                    type: 'error'
                });
            }
        }
    });
}
function indexAjaxDataNotificationAlarm() {
    $.ajax({
        url: "/mobile/indexAjaxDataNotificationAlarm",
        type: 'post',
        data: {},
        error: function (req, err) {
            new PNotify({
                title: 'Alarmas',
                text: 'Eror de comunación con el servidor: ' + err,
                type: 'error'
            });
        },
        beforeSend:function(){
        },
        success:function(dat) {

            let json = $.parseJSON(dat);

            if (json.success === 1) {
                if(json.alarms.length > 0){
                    const text = json.alarms.length === 1 ? 'Existe una alarma por atender' : 'Existen ' + json.alarms.length + ' alarmas por atender';
                    pNotifyNotificationAlarm = new PNotify({
                        title: 'Alarmas',
                        text: text,
                        type: 'error'
                    });
                    $.playSound("http://35.175.139.34/mobile/assets/audio/Alarma_C5CDMX.mp3");
                }
            } else {
                new PNotify({
                    title: 'Alarmas',
                    text: 'Ha ocurrido un error inesperado, intentar nuevamente',
                    type: 'error'
                });
            }
        }
    });
}
function indexAjaxDataMap(checkCameraStatus) {

    $.ajax({
        url: "/mobile/indexAjaxDataUnits",
        type: 'post',
        data: {vehicle: vehicle, checkCameraStatus: typeof checkCameraStatus === "undefined" ? 0 : checkCameraStatus},
        error: function (req, err) {
            if($tableAlarmsWaiting === 0) {
                $("#loading").hide();
                $("#loadingUnits").hide();
                $("#loadingAlarmsWaiting").hide();
                $("#loadingAlarmsAttending").hide();
            }

            new PNotify({
                title: 'Alarmas',
                text: 'Eror de comunación con el servidor: ' + err,
                type: 'error'
            });
        },
        beforeSend:function(){
            if($tableAlarmsWaiting === 0) {
                $("button").prop("disabled", true);
                $("input").prop("disabled", true);
                $("select").prop("disabled", true);
                $("#loading").show();
                $("#loadingUnits").show();
                $("#loadingAlarmsWaiting").show();
                $("#loadingAlarmsAttending").show();
            }
        },
        success:function(dat) {
            if($tableAlarmsWaiting === 0) {
                $("button").prop("disabled", false);
                $("input").prop("disabled", false);
                $("select").prop("disabled", false);
                $("#loading").hide();
                $("#loadingUnits").hide();
                $("#loadingAlarmsWaiting").hide();
                $("#loadingAlarmsAttending").hide();
            }

            let json = $.parseJSON(dat);

            if (json.success === 1) {
                totalTenants = Object.keys(json.units).length;
                alarmsWaiting = json.waiting;
                alarmsAttending = json.attending;
                initTableUnits(json.units);
                initMap(json.units);
                initTableAlarmsWaiting(json.waiting);
                initTableAlarmsAttending(json.attending);
                if(typeof checkCameraStatus !== "undefined"){
                    initIntervalMap();
                }
            } else {
                new PNotify({
                    title: 'Alarmas',
                    text: 'Ha ocurrido un error inesperado, intentar nuevamente',
                    type: 'error'
                });
            }
        }
    });
}
function attend(idAlarm) {
    if(confirm("¿Está seguro de enviar la alarma?")) {
        sendAlarm(idAlarm);
    }
}
function changeSrcVideoCamera(elem) {
    const src = $('#camerasSelect option:selected').val();
    $('#urlVideo').attr('src', src);
}
function resetRefresIntervals() {
    if(refreshIntervalId !== 0) {
        clearInterval(refreshIntervalId);
    }

    if(refreshIntervalNotificationAlarmId !== 0) {
        clearInterval(refreshIntervalId);
    }
}
function sendAlarm(idAlarm, force) {

    let notice = 0;
    let options = {
        text: "Enviando alarma"
    };

    const solved_comments = typeof force === "undefined" ? $.trim($('#solved_comments').val()) : 'Confirmación enviada desde página principal';

    $.ajax({
        url: "/mobile/sendAlarm",
        type: 'post',
        data: {idAlarm: idAlarm, solved_comments: solved_comments},
        error: function (req, err) {
            new PNotify({
                title: 'Alarmas',
                text: 'Eror de comunación con el servidor: ' + err,
                type: 'error'
            });

        },
        beforeSend:function(){
            resetRefresIntervals();
            $("button").prop("disabled", true);
            $("input").prop("disabled", true);
            $("select").prop("disabled", true);

            notice = new PNotify({
                text: "Por favor espere",
                type: 'info',
                icon: 'fa fa-spinner fa-spin',
                hide: false,
                buttons: {
                    closer: false,
                    sticker: false
                },
                shadow: false,
                width: "170px"
            });
            notice.update(options);
        },
        success:function(dat) {
            $("button").prop("disabled", false);
            $("input").prop("disabled", false);
            $("select").prop("disabled", false);

            let json = $.parseJSON(dat);

            if (json.success === 1) {

                options.title = "Alarma";
                options.text = "Alarma enviada exitósamente";
                options.type = "success";
                options.hide = true;
                options.buttons = {
                    closer: true,
                    sticker: true
                };
                options.icon = 'fa fa-check';
                options.shadow = true;
                options.width = PNotify.prototype.options.width;

                notice.update(options);

                window.location.reload();

            } else {
                new PNotify({
                    title: 'Alarmas',
                    text: 'Ha ocurrido un error inesperado, intentar nuevamente',
                    type: 'error'
                });
            }
        }
    });

}
function cancel(idAlarm, force) {
    if(confirm("¿Está seguro de cancelar la alarma?")) {
        if(typeof force !== "undefined"){
            waiting = 0;
            attending = 0;
            canceled = 1;
            attended = 0;
            update(idAlarm, force);
        } else if($.trim($('#cancel_comments').val()) !== ''){
            waiting = 0;
            attending = 0;
            canceled = 1;
            attended = 0;
            update(idAlarm);
        } else {
            new PNotify({
                title: 'Alarmas',
                text: 'Es necesario proporcionar el <strong>motivo de la cancelación</strong>',
                type: 'warning'
            });
        }
    }
}
function setAttended(idAlarm, force) {
    if(confirm("¿Está seguro de dar por atendida la alarma?")) {
        if(typeof force !== "undefined"){
            waiting = 0;
            attending = 0;
            canceled = 0;
            attended = 1;
            update(idAlarm, force);
        } else if($.trim($('#solved_comments').val()) !== '') {
            waiting = 0;
            attending = 0;
            canceled = 0;
            attended = 1;
            update(idAlarm);
        } else {
            new PNotify({
                title: 'Alarmas',
                text: 'Es necesario proporcionar el <strong>Detalle de la solución</strong>',
                type: 'warning'
            });
        }
    }
}
function makeidString(length) {
    let text = "";
    let possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    for (let i = 0; i < length; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}
function makeidNumber(length) {
    let text = "";
    let possible = "0123456789";

    for (let i = 0; i < length; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}
function update(idAlarm, force) {

    let cancel_comments = '';
    let solved_comments = '';

    let data = {};

    if(typeof force === "undefined"){
        data = {idAlarm: idAlarm, waiting: waiting, attending: attending, cancel_comments: cancel_comments, solved_comments: solved_comments, canceled: canceled, attended: attended};
    } else {
        if(attended === 1){
            solved_comments = 'Alarma atendida desde la vista principal';
        } else if(canceled === 1){
            cancel_comments = 'Alarma cancelada desde la vista principal';
        }

        data = {idAlarm: idAlarm, waiting: 0, attending: 0, cancel_comments: cancel_comments, solved_comments: solved_comments, canceled: canceled, attended: attended};

    }

    $.ajax({
        url: "/mobile/Welcome/indexAjaxDataAlarmsUpdate",
        type: 'post',
        data: data,
        error: function (req, err) {
            new PNotify({
                title: 'Alarmas',
                text: 'Eror de comunación con el servidor: ' + err,
                type: 'error'
            });
        },
        beforeSend:function(){
            resetRefresIntervals();
            $("button").prop("disabled", true);
            $("input").prop("disabled", true);
            $("select").prop("disabled", true);
        },
        success:function(dat) {
            $("button").prop("disabled", false);
            $("input").prop("disabled", false);
            $("select").prop("disabled", false);

            let json = $.parseJSON(dat);

            if (json.success === 1) {
                new PNotify({
                    title: 'Alarmas',
                    text: 'Alarma actualizada correctamente',
                    type: 'success'
                });
                setTimeout(function(){ window.location.reload(); }, 5000);
            } else {
                new PNotify({
                    title: 'Alarmas',
                    text: 'Ha ocurrido un error inesperado, intentar nuevamente',
                    type: 'error'
                });
            }
        }
    });
}
function initInterval() {
    if(refreshIntervalId !== 0) {
        clearInterval(refreshIntervalId);
    }
    refreshIntervalId = setInterval(function () {
        indexAjaxData()
    }, timeRefresh);
}
function initIntervalNotificationAlarm() {
    if(refreshIntervalNotificationAlarmId !== 0) {
        clearInterval(refreshIntervalNotificationAlarmId);
    }
    refreshIntervalNotificationAlarmId = setInterval(function () {
        indexAjaxDataNotificationAlarm();
    }, timeRefreshNotificationAlarm);
}
function initIntervalMap() {
    if(refreshIntervalId !== 0) {
        clearInterval(refreshIntervalId);
    }
    refreshIntervalId = setInterval(function () {
        indexAjaxDataMap();
    }, timeRefresh);
}
function filterMarkersUnits(len, data) {

    if(totalTenants > -1){
        return;
    }

    markersUnits.forEach(function(marker) {
        if (marker.getVisible()) {
            marker.setVisible(false);
        }
    });

    if(len > 0) {
        let bounds = new google.maps.LatLngBounds();
        for (let i = 0; i < len; i++) {

            const id = data[i][12];

            const mark = markersUnits.find(marker => marker.id === id);

            if (typeof mark !== 'undefined') {
                mark.setVisible(true);
                bounds.extend(mark.getPosition());
            }

        }
        map.fitBounds(bounds);

    }
}
function findUnit() {
    const strToFind = $('#mapUnitFind').val();
    if(strToFind.length > 2){
        let arrUnitsFounded = [];
        // search in all units
        $.each(totalUnits, function (idx, unit) {
            const strUnit = JSON.stringify(unit);
            if(strUnit.includes(strToFind)){
                arrUnitsFounded.push(unit.id);
            }
        });
        // clear the map of all the markers
        markersUnits.forEach(function(marker) {
            if (marker.getVisible()) {
                marker.setVisible(false);
            }
        });
        let bounds = new google.maps.LatLngBounds();
        $.each(arrUnitsFounded, function (idx, id) {
            const mark = markersUnits.find(marker => marker.id === id);
            if (typeof mark !== 'undefined') {
                mark.setVisible(true);
                bounds.extend(mark.getPosition());
            }
        });
        map.fitBounds(bounds);
    } else {
        new PNotify({
            title: 'Alarmas',
            text: 'Escriba al menos 3 caracteres para la búsqueda',
            type: 'info'
        });
    }
}
function focusMarker(id) {
    let bounds = new google.maps.LatLngBounds();
    const mark = markersUnits.find(marker => marker.id === id);
    if (typeof mark !== 'undefined') {
        mark.setVisible(true);
        bounds.extend(mark.getPosition());
    }
    map.fitBounds(bounds);
}
function showAllUnits() {
    let bounds = new google.maps.LatLngBounds();
    markersUnits.forEach(function(marker) {
        marker.setVisible(true);
        bounds.extend(marker.getPosition());
    });
    map.fitBounds(bounds);
}
function CenterControl(controlDiv, map) {

    // Set CSS for the control border.
    let controlUI = document.createElement('div');
    controlUI.style.backgroundColor = '#fff';
    controlUI.style.border = '2px solid #fff';
    controlUI.style.borderRadius = '3px';
    controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
    controlUI.style.cursor = 'pointer';
    controlUI.style.marginBottom = '22px';
    controlUI.style.textAlign = 'center';
    controlUI.title = 'Click to recenter the map';
    controlDiv.appendChild(controlUI);

    // Set CSS for the control interior.
    let controlText = document.createElement('div');
    controlText.style.color = 'rgb(25,25,25)';
    controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
    controlText.style.fontSize = '16px';
    controlText.style.lineHeight = '38px';
    controlText.style.paddingLeft = '5px';
    controlText.style.paddingRight = '5px';
    controlText.innerHTML = 'Mostrar todo';
    controlUI.appendChild(controlText);

    // Setup the click event listeners: simply set the map to Chicago.
    controlUI.addEventListener('click', function() {
        showAllUnits();
    });

}
function initMap(unitsGroup){

    if(map === 0) {
        map = new google.maps.Map(document.getElementById('map'), {
            // center: new google.maps.LatLng(19.290950, -99.653015),
            zoom: 9
        });

        if(unitsGroup.length === 0) {
            map.setCenter(new google.maps.LatLng(19.290950, -99.653015));
        } else {
            let centerControlDiv = document.createElement('div');
            let centerControl = new CenterControl(centerControlDiv, map);

            centerControlDiv.index = 1;
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv);

            let bounds = new google.maps.LatLngBounds();

            $.each(unitsGroup, function (tenant, units) {

                units.forEach(function (unit) {

                    let infoWindow = new google.maps.InfoWindow;

                    let point = new google.maps.LatLng(
                        parseFloat(unit.lat),
                        parseFloat(unit.lng));

                    let camerasOnline = true;
                    let colorCamera = 'text-danger';

                    if (unit.camerasOnline === 1) {
                        colorCamera = 'text-success';
                    } else if (unit.camerasOnline.indexOf('1') > -1) {
                        colorCamera = 'text-success';
                    } else {
                        camerasOnline = false;
                    }

                    let infowincontent = '<div class="panel panel-default">\n' +
                        '<div class="panel-heading">\n' +
                        '<h3 class="panel-title"><i class="fa fa-bus"></i> Datos de la unidad ' + (unit.cameraIds !== null ? ('<i class="fa fa-video-camera pull-right" style="cursor: pointer" onclick="showVideo(' + "'" + unit.cameraIds + ':' + unit.camerasOnline + "','" + unit.plate_number + "'" + ')"></i>') : '') + '</h3>\n' +
                        '</div>\n' +
                        '<div class="panel-body">\n' +
                        '<p><strong>Matricula:</strong> ' + unit.plate_number + '</p>\n' +
                        '<p><strong>Número:</strong> ' + unit.number + '</p>\n' +
                        '<p><strong>IMEI:</strong> ' + unit.imei + '</p>\n' +
                        '<p><strong>Ruta:</strong> ' + unit.route + '</p>\n' +
                        '<p><strong>VIN:</strong> ' + unit.vin + '</p>\n' +
                        '<p><strong>Conductor:</strong> ' + unit.driver + '</p>\n' +
                        '<p><strong>Concesionario:</strong> ' + unit.owner + '</p>\n' +
                        '<p><strong>Empresa:</strong> ' + unit.company + '</p>\n' +
                        '</div>\n' +
                        '</div>';

                    let url = '';

                    if (vehicle === '1') {

                        url = "/mobile/assets/mapiconscollection-markers/bus-green.png";

                        let alarm = alarmsWaiting.find(alarm => alarm.id_router === unit.id_router);

                        if (typeof alarm !== 'undefined') {
                            url = "/mobile/assets/mapiconscollection-markers/bus-blue.png";
                        }

                        alarm = alarmsAttending.find(alarm => alarm.id_router === unit.id_router);

                        if (typeof alarm !== 'undefined') {
                            url = "/mobile/assets/mapiconscollection-markers/bus-red.png";
                        }

                    } else {

                        url = '/mobile/assets/mapiconscollection-markers/apartment-3-green.png';

                        let alarm = alarmsWaiting.find(alarm => alarm.id_router === unit.id_router);

                        if (typeof alarm !== 'undefined') {
                            url = "/mobile/assets/mapiconscollection-markers/apartment-3-blue.png";
                        }

                        alarm = alarmsAttending.find(alarm => alarm.id_router === unit.id_router);

                        if (typeof alarm !== 'undefined') {
                            url = "/mobile/assets/mapiconscollection-markers/apartment-3-red.png";
                        }
                    }

                    let icon = {
                        // url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                        url: url
                    };

                    let marker = new google.maps.Marker({
                        map: map,
                        position: point,
                        icon: icon
                    });

                    marker.addListener('click', function () {
                        infoWindow.setContent(infowincontent);
                        infoWindow.open(map, marker);
                    });

                    marker.id = unit.id;
                    marker.tenant = unit.tenant;
                    markersUnits.push(marker);

                    bounds.extend(marker.getPosition());

                });
            });

            map.fitBounds(bounds);
        }
    } else {
        if(vehicle === '1') {
            // just update the position oe the units
            $.each(unitsGroup, function (tenant, units) {

                units.forEach(function (unit) {

                    const marker = markersUnits.find(marker => marker.id === unit.id);

                    if (typeof marker !== 'undefined') {
                        let latlng = new google.maps.LatLng(unit.lat, unit.lng);
                        marker.setPosition(latlng);
                    }

                });
            });
        }
    }

}
$(document).ready(function() {
    // first check is exist a message to show
    if(typeof message !== 'undefined'){
        if(message !== ''){
            new PNotify({
                title: 'Alarmas',
                text: message,
                type: 'success'
            });
        }
    }
    if(document.getElementById('tableAlarms') !== null) {
        indexAjaxData();
        initInterval();
        initIntervalNotificationAlarm();
        indexAjaxDataNotificationAlarm();
    } else if(document.getElementById('map') !== null) {
        indexAjaxDataMap(1);
    } else {
        initIntervalNotificationAlarm();
        indexAjaxDataNotificationAlarm();
    }
});