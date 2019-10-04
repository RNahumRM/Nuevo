<!--=== Footer Version 1 ===-->
<div class="footer-v1">
    <div class="footer">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div><!--/footer-->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        2016 &copy; All Rights Reserved.
                        <a href="<?=base_url()?>privacy">Políticas de privacidad</a> | <a href="<?=base_url()?>terms">Terminos y condiciones</a>
                    </p>
                </div>

                <!-- Social Links -->
                <div class="col-md-6">
                    <ul class="footer-socials list-inline">
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                                <i class="fa fa-skype"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Social Links -->
            </div>
        </div>
    </div><!--/copyright-->
</div>
<!--=== End Footer Version 1 ===-->
</div><!--/wrapper-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="<?=base_url()?>assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/plugins/smoothScroll.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="<?=base_url()?>assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="<?=base_url()?>assets/js/app.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/plugins/style-switcher.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        // App.init();
        // LayerSlider.initLayerSlider();
        // StyleSwitcher.initStyleSwitcher();
        // OwlCarousel.initOwlCarousel();
        // ∫OwlRecentWorks.initOwlRecentWorksV2();
    });
</script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.2/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.2/js/responsive.bootstrap.min.js"></script>

<script src="<?=base_url()?>js/pnotify.custom.min.js"></script>

<?php if(!empty($crud)) { foreach($crud->js_files as $file): if (strpos($file, 'common.min.js') === false) { ?>
    <script src="<?php echo $file; ?>"></script>
<?php } endforeach; } ?>

<!-- Custom Script -->
<script src="<?=base_url()?>assets/js/custom_mobile.js"></script>

<script src='https://cdn.rawgit.com/admsev/jquery-play-sound/master/jquery.playSound.js'></script>

<!--[if lt IE 9]>
<script src="<?=base_url()?>assets/plugins/respond.js"></script>
<script src="<?=base_url()?>assets/plugins/html5shiv.js"></script>
<script src="<?=base_url()?>assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html>