<script>
    var filter = '<?=$this->uri->segment(2)?>';
</script>
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Vehículos</h4>
            </div>
            <div class="panel-body" id="panelBodyFacilities">
                <div class="col-xs-12 col-sm-12 col-md-12" id="loadingFacilities">
                    <img src="<?=base_url()?>assets/img/loading_monitoring.gif" class="img-responsive" style="margin: 0 auto;width: 52px">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-xs-12 col-sm-12 col-md-12" id="loading">
                    <img src="<?=base_url()?>assets/img/loading_monitoring.gif" class="img-responsive" style="margin: 0 auto;width: 52px">
                </div>
                <div id="mapFacilities" style="height: 500px"></div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                Alarmas en espera
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
                Alarmas atendidas
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
                <h4 class="modal-title">Camarás de video</h4>
            </div>
            <div class="modal-body">
                <p>Acá se verán las cámaras de video</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
