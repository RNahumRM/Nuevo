<script>
    var filter = '<?=$this->uri->segment(2)?>';
</script>

<!--=== Content Part ===-->
<div class="container content">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="col-md-12"><i class="fa fa-lg fa-circle text-danger"></i> Alarmas en atención</div>
            <div class="col-md-12"><i class="fa fa-lg fa-circle text-success"></i> Alarmas atendidas</div>
            <div class="col-md-12"><i class="fa fa-lg fa-circle text-primary"></i> Alarmas en espera</div>
            <div class="col-md-12"><i class="fa fa-lg fa-circle text-black"></i> Alarmas canceladas</div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="col-xs-12 col-sm-12 col-md-12" id="loadingAlarms">
                <img src="<?=base_url()?>assets/img/loading_monitoring.gif" class="img-responsive" style="margin: 0 auto;width: 52px">
            </div>
            <div class="table-responsive" style="width: 100%">
                <table class="table stripe nowrap" id="tableAlarms">
                </table>
            </div>
        </div>
    </div>
</div><!--/container-->
<!-- End Content Part -->
