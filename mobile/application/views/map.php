<script>
    var filter = '<?=$this->uri->segment(2)?>';
    var vehicle = '<?=$vehicle?>';
</script>
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <ul class="nav nav-tabs">
                    <li class="<?=$vehicle==1?'active':''?>"><a href="<?=base_url()?>front">Vehículos</a></li>
                    <li class="<?=$vehicle==0?'active':''?>"><a href="<?=base_url()?>front/facilities">Instalaciones</a></li>
                </ul>
            </div>
            <div class="panel-body" id="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group">
                            <input type="text" class="form-control" id="mapUnitFind" placeholder="Escriba texto a buscar">
                            <span class="input-group-btn"><button class="btn btn-success" type="button" onclick="findUnit()">Buscar</button></span>
                            <span class="input-group-btn"><button class="btn btn-primary" type="button" onclick="showAllUnits()">Mostrar todo</button></span>
                        </div>
                    </div>
                </div>
                <div class="margin-bottom-10"></div>
                <div class="col-xs-12 col-sm-12 col-md-12" id="loadingUnits">
                    <img src="<?=base_url()?>assets/img/loading_monitoring.gif" class="img-responsive" style="margin: 0 auto;width: 52px">
                </div>
                <div id="panelBodyUnits"></div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-xs-12 col-sm-12 col-md-12" id="loading">
                    <img src="<?=base_url()?>assets/img/loading_monitoring.gif" class="img-responsive" style="margin: 0 auto;width: 52px">
                </div>
                <div id="map" style="height: 500px"></div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Alarmas en espera</h4>
            </div>
            <div class="panel-body">
                <div class="col-xs-12 col-sm-12 col-md-12" id="loadingAlarmsWaiting">
                    <img src="<?=base_url()?>assets/img/loading_monitoring.gif" class="img-responsive" style="margin: 0 auto;width: 52px">
                </div>
                <div class="table-responsive" style="width: 100%">
                    <table class="table stripe nowrap" id="tableAlarmsWaiting"></table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Alarmas en atención</h4>
            </div>
            <div class="panel-body">
                <div class="col-xs-12 col-sm-12 col-md-12" id="loadingAlarmsAttending">
                    <img src="<?=base_url()?>assets/img/loading_monitoring.gif" class="img-responsive" style="margin: 0 auto;width: 52px">
                </div>
                <div class="table-responsive" style="width: 100%">
                    <table class="table stripe nowrap" id="tableAlarmsAttending"></table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModalVideo" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="cameraName"></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-3">
                        <label class="control-label" for="cameras">Seleccionar cámara </label>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <select id="camerasSelect" name="cameras" class="form-control" onchange="changeSrcVideoCamera()">
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="responsive-video">
                        <iframe src="<?=base_url()?>blank" width="100%" height="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen id="urlVideo"></iframe>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
