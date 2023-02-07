<?php ob_start(); ?>

<?php $list = readPersonnage(); ?>


<main class="my-5">
  <div class="container">

    <section class="text-center">
      <h4 class="mb-5"><strong></strong></h4>

      <div class="row">
      <?php foreach($list as $valeur){ ?>
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="<?php echo $valeur['image']; ?>" class="img-fluid" height: auto />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
            <div
  class="bg-image"
  style="
    background-image: url('https://img.freepik.com/premium-vector/blank-light-grey-blurred-background-with-radial-gradient_53562-6788.jpg?w=2000');
    height: auto;
  "
>
<h5 class="card-title mt-3"><?php echo $valeur['nom']; ?></h5>
              <p class="card-text"> <?php echo $valeur['textecard']; ?>
              </p>
              <a href="index.php?action=cardread&read=<?php echo htmlspecialchars( $valeur ['id']); ?>" class="btn btn-outline-dark">En savoir plus</a>
</div>

            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </section>

  </div>
      </main>


<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>