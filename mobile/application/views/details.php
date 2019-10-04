<script>
    var idAlarm = <?=$this->uri->segment(3)?>;
    var canceled = <?=$alarm->canceled?>;
    var attending = <?=$alarm->attending?>;
    var waiting = <?=$alarm->waiting?>;
    var attended = <?=$alarm->attended?>;
    var c5_number = '<?=$alarm->c5_number?>';
</script>
<div class="container content">
    <div class="headline"><h2><?=$title?></h2></div>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-2">
                        <label class="control-label" for="id_router">Router Id</label>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <input type="text" class="form-control" name="id_router" id="id_router" value="<?=$alarm?$alarm->id_router:''?>" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-2">
                        <label class="control-label" for="serial">Número del router</label>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <input type="text" class="form-control" name="imei" id="imei" value="<?=$alarm?$alarm->imei:''?>" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-2">
                        <label class="control-label" for="plate_number">Matricula de la unidad</label>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <input type="text" class="form-control" name="plate_number" id="plate_number" value="<?=$alarm?$alarm->plate_number:''?>" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-2">
                        <label class="control-label" for="created">Fecha y hora</label>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <input type="text" class="form-control" name="created" id="created" value="<?=$alarm?$alarm->created:''?>" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-2">
                        <label class="control-label" for="lat">Latitud</label>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <input type="text" class="form-control" name="lat" id="lat" value="<?=$alarm?$alarm->lat:''?>" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-2">
                        <label class="control-label" for="lng">Longitud</label>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <input type="text" class="form-control" name="lng" id="lng" value="<?=$alarm?$alarm->lng:''?>" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-2">
                        <label class="control-label" for="number">Número económico de la unidad</label>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <input type="text" class="form-control" name="number" id="number" value="<?=$alarm?$alarm->number:''?>" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-2">
                        <label class="control-label" for="route">Ruta de la unidad</label>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <input type="text" class="form-control" name="route" id="route" value="<?=$alarm?$alarm->route:''?>" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-2">
                        <label class="control-label" for="driver">Nombre del operador</label>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <input type="text" class="form-control" name="driver" id="driver" value="<?=$alarm?$alarm->driver:''?>" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-2">
                        <label class="control-label" for="owner">Concesionario</label>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <input type="text" class="form-control" name="owner" id="owner" value="<?=$alarm?$alarm->owner:''?>" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-2">
                        <label class="control-label" for="company">Empresa</label>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <input type="text" class="form-control" name="company" id="company" value="<?=$alarm?$alarm->company:''?>" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-2">
                        <label class="control-label" for="comments">Motivo de cancelación</label>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <textarea class="form-control" rows="4" name="cancel_comments" id="cancel_comments" value="<?=$alarm?$alarm->cancel_comments:''?>" <?=$alarm->waiting ? '': 'readonly'?>><?=$alarm->cancel_comments?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-2">
                        <label class="control-label" for="comments">Detalles de la solución</label>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <textarea class="form-control" rows="4" name="solved_comments" id="solved_comments" value="<?=$alarm?$alarm->solved_comments:''?>" <?=$alarm->attending ? '' : 'readonly'?>><?=$alarm->solved_comments?></textarea>
                    </div>
                </div>
                <?php foreach ($comments as $coment) : ?>
                <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-2">
                        <label class="control-label" for="comments">Comentario <?=$coment->created?></label>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <textarea class="form-control" rows="4" readonly><?=$coment->comments?></textarea>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="panel-footer">
                <?php if($alarm->waiting) { ?>
                    <button type="submit" class="btn btn-success" onClick="attend(<?=$alarm->id?>)" >Confirmar</button>
                    <button type="submit" class="btn btn-danger" onClick="cancel(<?=$alarm->id?>)" >Cancelar</button>
                <?php } ?>
                <?php if($alarm->attending) { ?>
                    <button type="submit" class="btn btn-success" onClick="setAttended(<?=$alarm->id?>)" >Resuelta</button>
                    <button type="submit" class="btn btn-primary" onClick="showAddComment(<?=$alarm->id?>)" >Agregar comentario</button>
                <?php } ?>
            </div>
        </div>
    </div>
</div><!--/container-->
<!-- End Content Part -->
<div class="modal fade" id="addCommentDialog" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Agregar comentario</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <textarea class="form-control" rows="4" name="comments" id="comments"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="add-id-comment" add-id-comment="" onclick="addComment(this)">Agregar</button>
            </div>
        </div>
    </div>
</div>