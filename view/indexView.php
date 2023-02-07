<?php ob_start(); ?>

<img src="public/image/wallpaper.png" alt="">
</img>

<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>