<?php ob_start(); ?>

<div class="container justify-content-center">
<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row mt-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" name="updatenom" id="updatenom" placeholder="Nom de L'objet">
            </div>
            <div class="form-outline mt-4">
                <textarea name="updescription" id="updescription" cols="70" rows="12" placeholder="Description"></textarea>
                <input type="hidden" name="id" value="<?= $_GET['update']; ?>">
            </div>
            <input type="file" name="upobjet" id="upobjet" accept="image/png, image/jpeg, image/webp" class="text-light">
            <input type="submit" name="upsubmit" value="Envoyez"></input>
        </div>
    </div>
</form>
</div>


<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>