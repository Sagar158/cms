<!-- BEGIN: Footer-->
<footer
  class="<?php echo e($configData['mainFooterClass']); ?> <?php if($configData['isFooterFixed']=== true): ?><?php echo e('footer-fixed'); ?><?php else: ?> <?php echo e('footer-static'); ?> <?php endif; ?> <?php if($configData['isFooterDark']=== true): ?> <?php echo e('footer-dark'); ?> <?php elseif($configData['isFooterDark']=== false): ?> <?php echo e('footer-light'); ?> <?php else: ?> <?php echo e($configData['mainFooterColor']); ?> <?php endif; ?>">
  <div class="footer-copyright">
    <div class="container">
      <span>&copy; 2019 <a href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
          target="_blank">PIXINVENT</a> All rights reserved.
      </span>
      <span class="right hide-on-small-only">
        Design and Developed by <a href="https://pixinvent.com/">PIXINVENT</a>
      </span>
    </div>
  </div>
</footer>

<!-- END: Footer--><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/materialize-admin/materialize-html-laravel-starter-kit-template/resources/views/panels/footer.blade.php ENDPATH**/ ?>