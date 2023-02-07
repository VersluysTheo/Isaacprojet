<?php ob_start(); ?>

<form action="index.php" method="POST">
    <input type="text" name="username" id="username">
    <input type="password" name="password" id="password">
    <input type="submit" value="Se connecter" name="submitlogin">
</form>



<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>