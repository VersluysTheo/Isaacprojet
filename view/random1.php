<?php ob_start(); ?>

<?php $list = readObjet() ?>

<?php foreach($list as $valeur){ ?>

    <div class="card mb-3 mt-3 ml-3" style="max-width: 900px;">
  <div class="row g-0 justify-content-center">
    <div class="col-md-4" >
      <img
        src="<?php echo $valeur['image']; ?>"
        alt=""
        class="rounded-start"
        height="150px";
      />
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title">Nom : <?php echo $valeur['nom']; ?></h5>
        <h5 class="card-title">id : <?php echo $valeur['id']; ?></h3>
        <p class="card-text">
        Description : <?php echo $valeur['description']; ?>
        </p>
        <a href="index.php?action=updateobjet&update=<?php echo htmlspecialchars( $valeur ['id']); ?>"><button type="button" class="btn btn-warning">Modifier</button></a>
        <a href="index.php?action=deleteobjet&delete=<?php echo ($valeur['id']); ?>"><button type="button" class="btn btn-danger">Supprimer</button></a>
      </div>
    </div>
  </div>
</div>

<?php } ?>



<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>