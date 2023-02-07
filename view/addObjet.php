<?php ob_start(); ?>

<div class="container justify-content-center">
<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row mt-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" name="nom" id="nom" placeholder="Nom de L'objet">
            </div>
            <div class="form-outline mt-4">
                <textarea name="description" id="description" cols="70" rows="12" placeholder="Description"></textarea>
            </div>
            <input type="file" name="objet" id="objet" accept="image/png, image/jpeg, image/webp" class="text-light">
            <input type="submit" name="submit" value="Envoyez"></input>
        </div>
    </div>
</form>
</div>

<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>