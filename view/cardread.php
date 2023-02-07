<?php ob_start(); ?>

<?php $list = readPersonnageid(); ?>

<!-- <img src="public/image/wallpaper.png" alt="Gnomed"> -->

<div class="d-flex justify-content-center">
<div class="card mt-3 mb-3 " style="max-width: 700px;">
  <div class="row g-0">
  <div class="d-flex justify-content-center">
    <div class="col-md-10 mt-3">
      <img
        src="<?php echo $list['sprite'] ?>"
        class="img-fluid rounded-start"
      />
      <p>Objet de Départ :</p><img src="<?php echo $list['imageobjet1']; ?>" alt="" height="45px">
    <p><?php echo $list['objet1']; ?></p>
    <img src="<?php echo $list['imageobjet2']; ?>" alt="" height="45px">
    <p><?php echo $list['objet2']; ?></p>
    <img src="<?php echo $list['imageobjet3']; ?>" alt="" height="45px">
    <p><?php echo $list['objet3']; ?></p>
    </div>
    </div>
    <div class="d-flex justify-content-center">
    <div class="col-md-10">
      <div class="card-body">
        <h5 class="card-title"><?php echo $list['nom']; ?></h5>
        <p class="card-text">
        Point de Vie : <?php echo $list['vierouge']; ?> <img src="<?php echo $list['imagevierouge']; ?>" alt="">
        <?php echo $list['viebleu']; ?> <img src="<?php echo $list['imageviebleu']; ?>" alt="">
        <?php echo $list['vienoir']; ?> <img src="<?php echo $list['imagevienoir']; ?>" alt="">
        </p>
        <img src="public/image/speed.png" alt="speed" height="25px" width="auto"><p>Vitesse : <?php echo $list['vitesse']; ?></p>
        <img src="public/image/tears.png" alt="tears" height="25px" width="auto"><p>Débit : <?php echo $list['débit']; ?> </p>
        <img src="public/image/damage.png" alt="damage" height="25px" width="auto"><p>Dégat : <?php echo $list['dégat']; ?> </p>
        <img src="public/image/range.png" alt="range" height="25px" width="auto"><p>Portée : <?php echo $list['portée']; ?> </p>
        <img src="public/image/shot speed.png" alt="shotspeed" height="25px" width="auto"><p>Vitesse de tir : <?php echo $list['vitesse de tir']; ?> </p>
        <img src="public/image/luck.png" alt="luck" height="25px" width="auto"><p>Chance : <?php echo $list['chance']; ?> </p>
        <p><?php echo $list['description']; ?></p>
      </div>
    </div>
    </div>
  </div>
  <button onclick="history.back()" type="button" class="btn btn-danger align-self-center mb-3">Retour</button>
</div>
</div>
<!-- <img> -->

<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>