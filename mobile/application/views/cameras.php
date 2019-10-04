<script>
    var message = '<?=isset($message)?$message:''?>';
</script>
<!--=== Content Part ===-->
<div class="container content">
    <div class="headline"><h2>Cámaras</h2><button class="btn-success pull-right" onclick="updateCamerasFromCameraManager()"><i class="fa fa-refresh"></i> Actualizar cámaras desde Camera Manager</button></div>
    <div class="row">
        <?php echo $crud->output; ?>
    </div>
</div><!--/container-->
<!-- End Content Part -->