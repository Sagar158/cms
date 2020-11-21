<!-- BEGIN VENDOR JS-->
<script src="<?php echo e(asset('js/vendors.min.js')); ?>"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<?php echo $__env->yieldContent('vendor-script'); ?>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="<?php echo e(asset('js/plugins.js')); ?>"></script>
<script src="<?php echo e(asset('js/search.js')); ?>"></script>
<script src="<?php echo e(asset('js/custom/custom-script.js')); ?>"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<?php echo $__env->yieldContent('page-script'); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/materialize-admin/materialize-html-laravel-starter-kit-template/resources/views/panels/scripts.blade.php ENDPATH**/ ?>