<?php ob_start(); ?>

<div class="container justify-content-center mt-3 mb-3">

<p class="text-light"> Voulez vous supprimer cet objet ?</p>
<form action="index.php" method="post">
    <input type="submit" value="Oui" name="supprimer">
    <input type="hidden" name="deleteid" value="<?php echo $_GET['delete']; ?>">
    <input type="submit" value="Non" name="passupprimer">
</form>

</div>

<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>